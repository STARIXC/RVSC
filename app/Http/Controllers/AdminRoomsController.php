<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Image;

class AdminRoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = DB::table('rooms')
        ->join('categories', 'categories.id', '=', 'rooms.room_type')
        ->select('rooms.*','rooms.id' ,'categories.price','categories.category_name')
        ->latest()
        ->paginate(6);
        // return $services;
        // dd($rooms);
        return view('admin.room.room', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
         $categories = DB::table('categories')->get();
        return view('admin.room.add_room', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
    
    //     $validated = $request->validate([
    //         'roomtype' => 'required',
    //         'roomname' => 'required',
    //         'maxadult' => 'required',
    //         'maxchild' => 'required',
    //         'roomdes' => 'required',
    //         'roompet' => 'required',
    //         'roombreakfast' => 'required',
    //         'roomfeatured' => 'required',
    //         'nobed' => 'required',
            
    //         'imagemain' => 'required|mimes:jpg,jpeg,png',
    //     ],
    //     [
    //         'roomtype.required'=>'Please select the room type',
    //         'roomname.required'=>'Please input room name',
    //         'maxadult.required'=>'Please input Maximum number of  Adult',
    //         'maxchild.required'=>'Please Input Maximum  number of Children',
    //         'roomdes.required'=>'Please Input Rooms description',
    //         'nobed.required'=>'Please Input number of beds in that room',
           
    //         'imagemain.required'=>'Please select the main image of the room',
           
    //     ]
    // );
   
    $data = array();
    $data['room_type']=$request->roomtype;
    $data['room_name']=$request->roomname;
    $data['max_adult']=$request->maxadult;
    $data['max_child']=$request->maxchild;
    $data['room_desc']=$request->roomdes;
    if (empty($request->roompet)) {
        $data['pests_allowed']='0';
     }else{
        $data['pests_allowed']=$request->roompet;
     }
    if (empty($request->roombreakfast)) {
        $data['breakfast']='0';
     }else{
        $data['breakfast']=$request->roombreakfast;
     }
    if (empty($request->roomfeatured)) {
        $data['featured_room']='0';
     }else{
        $data['featured_room']=$request->roomfeatured;
     }
      
    $slug=hexdec(uniqid()).strtolower(str_replace(' ', '-', $request->roomname));
    $collection=$request->input('roomfac');
    $output= implode(',', $collection);
    // image setup
    $rimage=$request->file('imagemain');
    $make_name = hexdec(uniqid()).'.'.$rimage->getClientOriginalExtension();
      Image::make($rimage)->resize(1280,720)->save('backend/assets/images/roomimages/'.$make_name);
      $last_image = 'backend/assets/images/roomimages/'.$make_name;

    $data['slug']=$slug;
    $data['no_of_beds']=$request->nobed;
    $data['room_image']=$last_image;
    $data['room_facilities']=$output;
    $data['created_at']=Carbon::now();

    // $rimage->move($up_location,$image_name);
    $room_id=DB::table('rooms')->insert($data);
    ////////// Multiple Image Upload Start ///////////

   if ($room_id) {
    $images = $request->file('multi_img');
    foreach ($images as $img) {
        $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
      Image::make($img)->resize(1280,720)->save('backend/assets/images/roomimages/otherimages/'.$make_name);
      $uploadPath = 'backend/assets/images/roomimages/otherimages/'.$make_name;

     $dataimage= array();
     $dataimage['room_id']=$slug;
     $dataimage['room_image']=$uploadPath;
     $dataimage['image_status']=1;
     $dataimage['created_at']=Carbon::now();


      DB::table('room_images')->insert($dataimage);

    }
      ////////// Een Multiple Image Upload Start ///////////


      $notification = array(
        'message' => 'Product Inserted Successfully',
        'alert-type' => 'success'
    );
  return  redirect()->route('room')->with($notification);


   }else{
      
    // $error_submit = array(
    //     'message' => 'Failled to submited multiple images',
    //     'alert-type' => 'danger'
    // );
  return  redirect()->route('room')->with('success','failled to load');
 
   }

  
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function MultiImageAdd(Request $request){
    $images = $request->file('multi_img');
    foreach ($images as $img) {
        $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
      Image::make($img)->resize(1280,720)->save('backend/assets/images/roomimages/otherimages/'.$make_name);
      $uploadPath = 'backend/assets/images/roomimages/otherimages/'.$make_name;

     $dataimage= array();
     $dataimage['room_id']=$request->id;
     $dataimage['room_image']=$uploadPath;
     $dataimage['image_status']=1;
     $dataimage['created_at']=Carbon::now();
     DB::table('room_images')->insert($dataimage);

    }
    return  redirect()->back()->with('success','Uploaded Successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $categories=  DB::table('categories')->where('id',$id)->first();
        // return view('admin.room.edit', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
//         $noAdminUsersId = DB::table('users') ->join('role_user', 'users.id', '=', 'role_user.user_id') ->select('role_user.user_id') ->where('role_user.role_id', '>', 1) ->get()->pluck('user_id')->toArray();

// $users = User::whereIn('id', $noAdminUsersId);
        $room=DB::table('rooms')->where('id',$id)->first();
        $facilities=DB::table('rooms')->where('id',$id)->pluck('room_facilities');
        $categories=  DB::table('categories')->get();
        return view('admin.room.edit_room', compact('room','facilities','categories'));

    }
  /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRoomImages($id)

    {
      $room=DB::table('rooms')->where('id',$id)->first();
        $slug=DB::table('rooms')->where('id',$id)->pluck('slug');
        // $multImages=DB::table('room_images')->where('room_id',$slug)->value('room');
        // dd($multImages);
       return view('admin.room.edit_rooom_images', compact('room','slug'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
