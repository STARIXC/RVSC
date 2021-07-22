@extends('layouts.master')
@section('content')
<div class="content">

    <header class="sportsHero">
      <div class="banner">
        <h1>Careers</h1>
        <div></div>
        <p></p>
        <a class="btn-primary" href="/">return home</a>
      </div>
    </header>
    <section class="section-search-content">
      <div class="container">
        <div class="row">
          <div id="primary" class="container">

            <div class="search-result-header">
              <div class="row">
                <div class="col-sm-7">
                  <h2>Jobs</h2>
                </div>
              </div>
            </div>
             <div class="search-result-item sale">
              <!-- <div class="ribbon"><span>Sale</span></div> -->
              <div class="row">
                <section class="section-event-single-content">
                  <div class="container">
                    <div class="row">
                      <div id="primary" class="col-sm-12 col-md-12">
                        <p>We dont have any Jop Openings at the moment.. check out this page in the near future for updates</p>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            
            {{-- @if (count($events) > 0) 
                @foreach ($events as $event) 
                    

                <div class="search-result-item sale">
                  <!-- <div class="ribbon"><span>Sale</span></div> -->
                  <div class="row">
                    <div class="search-result-item-info col-sm-9">
                      <h3 class="event-title">
                        <a href="#"><strong>{{ $event->event_name }}</strong></a>
                      </h3>
                    </div>
                    <div class="search-result-item-price col-sm-3">
                      <span>Price From KSH</span>
                      <strong>{{ $event->entrance_fee}}</strong>
                      <!-- <a href="https://www.mtickets.com/buy/malumz-on-decks/924">Buy Tickets</a> -->
                    </div>
                  </div>
                  &nbsp;
                  <section class="section-event-single-content">
                    <div class="container">
                      <div class="row">
                        <div id="primary" class="col-sm-12 col-md-12">
                          <div class="event-info">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="event-info-img">
                                  <img class="img-thumbnail upcoming-small" src="{{asset('assets/images/events/' .$event->event_image) }}" alt="banner" srcset="">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="col-sm-12">
                                  <div class="event-info-about">
                                    <h2>Description</h2>
                                    <p> {{ $event->event_description }}</p>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="event-info-about">
                                    <h2>Time</h2>
                                    <p>
                                      From {{ $event->event_from }} on {{ $event->event_date }}
                                      to {{$event->event_to }} ,{{ $event->event_date}}
                                    </p>
                                  </div>
                                </div>
                                <!--  <div class="col-sm-4">
                                <div class="event-info-about">
                                  <h2>Location</h2>
                                  <p>
                                    CAPTAIN&#039;S TERRACE, Nairobi
                                  </p>
                                </div>
                              </div> -->
                                <div class="search-result-item-price col-sm-12">
                                  <!-- <a href="https://www.mtickets.com/buy/malumz-on-decks/924">Buy Tickets</a> -->
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                @endforeach
            @else 
           <div class="search-result-item sale">
              <!-- <div class="ribbon"><span>Sale</span></div> -->
              <div class="row">
                <section class="section-event-single-content">
                  <div class="container">
                    <div class="row">
                      <div id="primary" class="col-sm-12 col-md-12">
                        <p>We dont have any Jop Openings at the moment.. check out this page in the near future for updated</p>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
                  
         @endif --}}

         

              <div class="search-result-footer">
                <!-- <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                  </a>
                </li>
                            </ul> -->
                <ul class="pagination">

                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous</span>
                    </a>
                  </li>


                  <li>
                    <a href="https://www.mtickets.com/events/upcoming?page=2" aria-label="Next">
                      <span aria-hidden="true">Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                    </a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
    </section>




    <div class="p-5"></div>
  </div>
    
@endsection