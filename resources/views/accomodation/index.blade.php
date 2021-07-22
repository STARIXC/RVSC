@extends('layouts.master')
@section('content')
<div class="content">
    <header class="roomsHero">
      <div class="banner">
        <h1>Accommodation</h1>
        <div></div>
        <p></p>
        <a class="btn-primary" href="index.php">return home</a>
      </div>
    </header>
<section class="roomslist">
    <div class="section-title">
      <h4>Browse rooms</h4>
      <div></div>
    </div>
 
  <div class="container">
    <div class="row">
      @foreach($rooms as $room)

      <!-- cards services -->
            <div class="col-md-6 col-lg-4 mb-5">
                      <div class="hotel-room text-center">
                          <a href="/room-details/{{ $room ->slug }}" class="d-block mb-0 thumbnail"><img src="{{ asset($room->room_image) }}" alt="{{ $room ->room_name }}"
                                  class="img-fluid" ></a>
                          <div class="hotel-room-body">
                              <h3 class="heading mb-0"><a href="/room-details/{{ $room ->slug }}">{{ $room ->room_name }}</a></h3>
                              <strong class="price"> KES: {{ $room ->price }} / per night</strong>
                          </div>
                      </div>
                  </div>
  
        {{-- <article class="room">
          <div class="img-container">
            <img src="{{ asset($room->room_image) }}" alt='{{ $room ->room_name }}'>
            <div class="price-top">
              <h6>KES : {{ $room ->price }}</h6>
              <p>per night</p>
            </div>
            <a class="btn-primary room-link" href="">features</a>
          </div>
          <p class="room-info">{{ $room ->room_name }}<br/>{{$room ->category_name  }}</p>
        </article> --}}
      @endforeach
    </div>
  </div>


  </section>
      
  </div>
  @endsection