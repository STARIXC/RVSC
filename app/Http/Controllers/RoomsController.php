<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RoomsController extends Controller
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
        ->select('rooms.*', 'categories.price','categories.id','categories.category_name')
        ->get();
 
        // return $services;
        return view('accomodation.index', ['rooms' => $rooms]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $data=DB::table('rooms')
        ->join('categories', 'categories.id', '=', 'rooms.room_type')
        ->select('rooms.*', 'categories.price','categories.id','categories.category_name')
       ->where('slug',$id)->first();
       $facilities=DB::table('rooms')->where('slug',$id)->pluck('room_facilities');
       $booking= $request->session()->get('booking');
    //    dd($data);
        return view('accomodation.room-details', compact('data','facilities','booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
