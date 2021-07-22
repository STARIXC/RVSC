@extends('layouts.master')
@section('content')

<div class="content">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            @foreach( $photos as $photo )
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                class="{{ $loop->first ? 'active' : '' }}"></li>
            @endforeach
        </ol>

        <div class="carousel-inner" role="listbox">
            @foreach( $photos as $photo )
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="d-block img-fluid" src="{{asset($photo->image_name)}}" alt="{{ $photo->image_name }}">
                <div class="carousel-caption d-none d-md-block">
                    {{-- <h3>{{ $photo->image_name }}</h3>
                    <p>{{ $photo->image_description }}</p> --}}
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- @include('includes.carausel') --}}

    <section class="services">
        <div class="section-title">
            <h4>Services</h4>
            <div></div>
        </div>
        <div class="services-center">
            <div class="row">


                @foreach ($services as $service)

                <!-- cards services -->

                <div class="col-lg-6 col-xl-4">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded card">
                        <img alt="..." class="card-img-top" src="{{ asset($service->service_image) }}">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold font-size-lg">{{ $service->service_title }}
                            </h5>
                            <p class="card-text">{{ $service->service_description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- featured Rooms -->
    <section class="featured-rooms">
       
        <div class="container">
            <div class="section-title">
                <h4>Featured Rooms</h4>
                <div></div>
            </div>
            <div class="row">
              
                @foreach ($frooms as $room)
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
                <a class="btn-primary room-link" href="/room-details/{{{ $room ->slug }}}">features</a>
            </div>
            <p class="room-info">{{ $room ->room_name }}<br />{{ $room ->category_name }}</p>
            </article> --}}
            @endforeach
    
              
       
               
              
            </div>
        </div>
    
</section>
    
 

<!-- slider -->
<div class="book mb-2">
    <div class="container" data-aos="zoom-in">
        <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
                <h3>Book a Stay</h3>
                <p> EXPERIENCE A GOOD STAY, ENJOY FANTASTIC SERVICE</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <a href="booking.php?checking" class="btn btn-lg align-middle">Researve Now</a>
            </div>

        </div>

    </div>

</div>
</div>
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6040afc61c1c2a130d64ccfa/1evuat8cc';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

</script>
@endsection