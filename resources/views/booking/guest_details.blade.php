@extends('layouts.master')
@section('content')
<link href="{{ asset('frontend/assets/css/booking.css')}}" rel="stylesheet" type="text/css" media="all" />

<div class="content">
    <header class="roomsHero">
        <div class="banner">
            <h1>Select Room</h1>
            <div></div>
            <p></p>
            <a class="btn-primary" href="index.php">return home</a>
        </div>
    </header>

    <section class="roomslist">


        <div class="container">


            <div class="card p-3">
                <div class="bg">
                    <!--For Row containing all card-->
                    <div class="row mainRow">
                        <!--Card 1-->

                        <div class="col-sm-12 col-md-4 ">
                            
    <form action="{{ route('availability.booking') }}" method="post" autocomplete="off">
        @csrf
  
                            <div class="booking-side-wrapper">
                                <h4 class="title1">Booking Information</h4>
                                <!--Card Body-->

                                <div class="mb-1">
                                  <!--Card Body-->
    
          <div class="rooms-wrapper">
            <label for="room-selection">Rooms</label>
            <div class="select-wrapper room-selection-wrapper">
              <input type="text" value="{{ session()->get('booking.room-selection') }}" name="room-selection" id="room-selection" required>
              <span id="error_room" class="text-danger"></span>
            </div>
          </div>
          <div class="rooms-wrapper">
            <div class="room-1 room-booking rv-clearfix" style="display: block;">
              <p>Room 1</p>
              <div class="guest-2-cols">
                <label for="Adult">Adult</label>
                <div class="select-wrapper">
                  <input type="text" name="adult" id="adult" required value="{{ session()->get('booking.adult') }}"/>
                  <span id="error_adults" class="text-danger"></span>
                </div>
              </div>
              <div class="guest-2-cols">
                <label for="child">Child</label>
                <div class="select-wrapper">
                  <input type="text" name="child" id="child" value="{{ session()->get('booking.child') }}" required />
                </div>
              </div>
            </div>
            <!-- END .rooms-wrapper -->
          </div>
        
                                </div>
                                <!--Card footer-->

                            </div>
                        </div>
                        <!--Card 2-->
                        <div class="col-xs-12 col-md-8">
                      
                                <div class="booking-main-wrapper">
                                    <div class="rooms-wrapper">
                                        <div class="room-1 room-booking rv-clearfix" style="display: block;">
                                          <p>Select Dates</p>
                                          <div class="guest-2-cols">
                                            <label for="checkin">Checkin Date</label>
                                            <div class="select-wrapper">
                                              <input type="text" name="checkin" id="checkin" value="{{ session()->get('booking.checkin') }}"/>
                                            </div>
                                          </div>
                                          <div class="guest-2-cols">
                                            <label for="child">Checkout Date</label>
                                            <div class="select-wrapper">
                                              <input type="text" name="checkout" id="checkout" value="{{ session()->get('booking.checkout') }}"/>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="room-1 room-booking rv-clearfix" style="display: block;">
                                          <p></p>
                                          <div class="guest-1-cols">
                                            <button type="submit" id="search-room" name="submitBtn"
                                              class="purchaseLink card-footer text-center btn btn-block">Check Availability &#8594;</button>
                                          </div>
                                
                                        </div>
                                        <!-- END .rooms-wrapper -->
                                      </div>
                                </div>
                       

                        </div>

                    </form>
                    </div>



                </div>
    </section>


</div>

@endsection