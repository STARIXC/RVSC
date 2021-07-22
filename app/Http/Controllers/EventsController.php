<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
 use Image;
class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = DB::table('events')
        ->whereDate('event_date',  '>=', DATE(NOW()))
        ->get();
        return view('news_events.index', ['events' => $events]);
    }
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminEvents()
    {
        $events = DB::table('events')
        ->latest()
        ->paginate('6');
       
        return view('admin.events.index', ['events' => $events]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
    $data['event_name']=$request->ename;
    $data['event_description']=$request->description;
    $data['entrance_fee']=$request->efee;
    $data['event_date']=$request->edate;
    $data['event_from']=$request->estime;
    $data['event_to']=$request->eetime;
    $data['event_venue']=$request->evenue;
    $data['created_at']=Carbon::now();

    $rimage=$request->file('simage');
    $make_name = hexdec(uniqid()).'.'.$rimage->getClientOriginalExtension();
      Image::make($rimage)->resize(500,850)->save('backend/assets/images/events/'.$make_name);
      $last_image = 'backend/assets/images/events/'.$make_name; 
    $data['event_image']=$last_image;
    DB::table('events')->insert($data);
    return  redirect()->route('events.all')->with('success','Event Submited successfully');

   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = DB::table('events')->where('id',$id)->first();
        return view('admin.events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $old_image=$request->old_img;
        $data= array();
        $data['event_name']=$request->ename;
        $data['event_description']=$request->description;
        $data['entrance_fee']=$request->efee;
        $data['event_date']=$request->edate;
        $data['event_from']=$request->estime;
        $data['event_to']=$request->eetime;
        $data['event_venue']=$request->evenue;
        $data['updated_at']=Carbon::now();

         $img = $request->file('simage');
         if ($img) {
            unlink($old_image);
            $image_location='backend/assets/images/events/';
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
             Image::make($img)->resize(500,850)->save($image_location.$make_name);
             $uploadPath = $image_location.$make_name;
             $data['event_image']=$uploadPath;
             
             DB::table('events')->where('id',$id)->update($data);
             return Redirect()->route('events.all')->with('success','successfully updated the site image');
         }else{
            DB::table('events')->where('id',$id)->update($data);
            return Redirect()->route('events.all')->with('success','successfully updated without the site image');
         }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event_image = DB::table('events')->where('id',$id)->first();
        $image=$event_image->event_image;
        unlink($image);
        DB::table('events')->where('id',$id)->delete();
       return  redirect()->route('events.all')->with('success', 'site image removed successfully');
    }
}
