@extends('layouts.master')
@section('content')
<link href="{{ asset('frontend/assets/dist/css/daterangepicker.min.css') }}" rel="stylesheet" type="text/css"
  media="all" />
<link href="{{ asset('frontend/assets/css/booking.css')}}" rel="stylesheet" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.daterangepicker.min.js') }}"></script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
@php
$multImages=DB::table('room_images')->where('room_id',$data->slug)->get();
// $booking= $request->session()->get('booking');
@endphp
<header class="roomsDetailsHero" style="background-image: url('{{ asset($data->room_image)}}') !important;
  min-height: 50vh;">
  <div class="banner">
    <h1>{{ $data->room_name }}</h1>
    <div></div>
    <p></p>
    <a class="btn-primary" href="/home">return home</a>
  </div>
</header>
<div class="container">
  
<div class="row">


  <div class="col-md-8">
    <div class="container">
      <div class="row">
        @if (count($multImages)==0)

        @else
        @foreach ($multImages as $item)

        <div class="col-md-6 col-lg-4 mb-5 mt-3">
          <div class="hotel-room text-center">
            <a href="#" class="d-block mb-0 thumbnail"><img src="{{ asset($item->room_image) }}" alt="room_image"
                class="img-fluid"></a>
          </div>
        </div>

        @endforeach

        @endif
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-7">
              <article class="desc p-3">
                <h3>details</h3>
                <p>{{ $data->room_desc }}</p>
              </article>
            </div>
            <div class="col-md-5">
              <article class="info">
                <h3>info</h3>
                <h6>price : KES : {{ $data->price}}</h6>
                <h6>max capacity : {{ $data->max_adult }} people</h6>
                @if ($data->pests_allowed =="Yes")
                <h6>Pets allowed</h6>
                @else
                <h6>no pets allowed</h6>
                @endif
                <!-- <h6>no pets allowed</h6> -->
                <h6></h6>
                {{--  <a class="btn-primary mt-5" href="book-room/{{ $data->id }}">Book Now</a>  --}}
              </article>
              
                <section class="room-extras">
                  <h6>extras </h6>
                  <ul class="extras">
                    @foreach(explode(',', $facilities) as $string)
                    <li>- {{ $string }}</li>
      
                    @endforeach
                  </ul>
                </section>
              
            </div>
          </div>
           
         
         
        </div>

      </div>
      

    </div>



  </div>
  <div class="col-md-4 mt-3 mb-3 bg">

    <form action="{{ route('availability.booking') }}" method="post" autocomplete="off">
      @csrf
      <div class="_booking-side-wrapper">
        <h4 class="title1">Your Reservation</h4>
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
  
  
  
        <!--Card footer-->
  
  
      </div>
    </form>
  </div>

</div>

</div>

<!-- cards services -->
<script>
  $(function() {
    if ($('#checkin, #checkout').length) {
      // check if element is available to bind ITS ONLY ON HOMEPAGE
      var currentDate = moment().format("DD-MM-YYYY");

      $('#checkin, #checkout').daterangepicker({
        locale: {
          format: 'DD-MM-YYYY'
        },
        "alwaysShowCalendars": true,
        "minDate": currentDate,
        "maxDate": moment().add('months', 2),
        autoApply: true,
        autoUpdateInput: false
      }, function(start, end, label) {
        // console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
        // Lets update the fields manually this event fires on selection of range
        var selectedStartDate = start.format('DD-MM-YYYY'); // selected start
        var selectedEndDate = end.format('DD-MM-YYYY'); // selected end

        $checkinInput = $('#checkin');
        $checkoutInput = $('#checkout');

        // Updating Fields with selected dates
        $checkinInput.val(selectedStartDate);
        $checkoutInput.val(selectedEndDate);

        // Setting the Selection of dates on calender on CHECKOUT FIELD (To get this it must be binded by Ids not Calss)
        var checkOutPicker = $checkoutInput.data('daterangepicker');
        checkOutPicker.setStartDate(selectedStartDate);
        checkOutPicker.setEndDate(selectedEndDate);

        // Setting the Selection of dates on calender on CHECKIN FIELD (To get this it must be binded by Ids not Calss)
        var checkInPicker = $checkinInput.data('daterangepicker');
        checkInPicker.setStartDate(selectedStartDate);
        checkInPicker.setEndDate(selectedEndDate);

      });

    } // End Daterange Picker
  });
</script>
@endsection