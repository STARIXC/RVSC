<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $booking= $request->session()->get('booking');
     
        return view('booking.restart_booking',compact('booking', $booking));
    }
 /**
     * pass data from booking form to check available rooms.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function roomAvailability(Request $request)
    {
        $validatedData = $request->validate([
            'adult' => 'required|numeric',
            'child' => 'required|numeric',
            'checkin' => 'required',
            'checkout' => 'required',
            'room-selection' => 'required',
        ]);

        // $booking= $request->session()->get('booking');
        // dd($booking);
        
        if(empty($request->session()->get('booking'))){
            $booking = new Booking();
            $booking->fill($validatedData);
            $request->session()->put('booking', $booking);
        }else{
            $booking= $request->session()->get('booking');
            $booking->fill($validatedData);
            $request->session()->put('booking', $booking);
        }

        return view('booking.select_room',compact('booking'));
    }
  
    
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadForm(Request $request)
    {

        $booking= $request->session()->get('booking');
     
        return view('booking.guest_details',compact('booking', $booking));
       
        // return view('booking',compact('booking', $product));
    }

          /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postGuestForm(Request $request) 
    {
        $validatedData = $request->validate([
            'customer-name'=> 'required',
            'customer-email'=> 'required|email',
            'phone'=> 'required',
            'address'=> 'required',
            'city'=> 'required',
            'region'=> 'required',
            'postal-code'=> 'required',
            'special-requests'=> 'string|nullable',
        ]
        ,
        [
            'customer-name.required'=>'Please enter your Full Name',
            'customer-email.required'=>'Please enter your Email',
            'phone.required'=>'Please enter your Phone',
            'address.required'=>'Please enter your Postal Address',
            'city.required'=>'Please enter your City',
            'region.required'=>'Please enter your County',
            'postal-code.required'=>'Please enter your Zip/Postal Code',
            
           
        ]);

        // $booking= $request->session()->get('booking');
        // dd($booking);
        
        if(empty($request->session()->get('booking'))){
            $booking = new Booking();
            $booking->fill($validatedData);
            $request->session()->put('booking', $booking);
        }else{
            $booking= $request->session()->get('booking');
            $booking->fill($validatedData);
            $request->session()->put('booking', $booking);
        }

        return redirect('/booking/summary');
        
     
    }
     public function showSummary(Request $request){
        $booking= $request->session()->get('booking');
     
        return view('booking.booking_review',compact('booking', $booking));
     }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postdisplayRooms(Request $request)
    {
        $validatedData = $request->validate([
            'room-id'=>'string|required',
            'room-price'=>'string|required',
            'room-name'=>'string|required',
        ]);
    
        if(empty($request->session()->get('booking'))){
            $booking = new Booking();
            $booking->fill($validatedData);
            $request->session()->put('booking', $booking);
        }else{
            $booking= $request->session()->get('booking');
            $booking->fill($validatedData);
            $request->session()->put('booking', $booking);
        }

        return redirect('/guest/personal_info');
        
     
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 'customer-name'=> 'required',
        // 'customer-email'=> 'required|email',
        // 'phone'=> 'required',
        // 'address'=> 'required',
        // 'city'=> 'required',
        // 'region'=> 'required',
        // 'postal-code'=> 'required',
        // 'special-requests'=> 'string|nullable',
         $request->session()->get('booking');
        $data = array();
        $data['check_in']=$request->session()->get('booking.checkin');
        $data['checkout']=$request->session()->get('booking.checkout');
        $data['adult']=$request->session()->get('booking.adult');
        $data['children']=$request->session()->get('booking.child');
        $data['roomtype']=$request->session()->get('booking.room-id');
        $data['guestname']=$request->session()->get('booking.customer-name');
        $data['email']=$request->session()->get('booking.customer-email');
        $data['phone']=$request->session()->get('booking.phone');
        $data['address']=$request->session()->get('booking.address');
        $data['city']=$request->session()->get('booking.city');
        $data['zipcode']=$request->session()->get('booking.postal-code');
        $data['specialrequest']=$request->session()->get('booking.special-requests');
        
        $data['created_at']=Carbon::now();
        DB::table('bookings')->insert($data);
        $request->session()->forget('booking');
        return  view('booking.booking_successful');
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
