@extends('layouts.master')
@section('content')
<div class="content" style="background: #eee;">
  <header class="aboutHero">
    <div class="banner">
      <h1>About Us</h1>
      <div></div>
      <p></p>
      <a class="btn-primary" href="/">return home</a>
    </div>
  </header>
  <section class="single-room ">


    <div class="container card mb-5">
      <div class="row">
        <div class="col-6 m-1">
          <div class="section-title">
            <h4></h4>
            <div></div>
          </div>
          <div class="card card-default">
            <div id="carouselExampleControls" class="carousel slide p-2" data-ride="carousel">

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
          </div>

        </div>
        <div class="col-5 m-1">
          <div class="section-title">
            <h4>About Rift Valley Sports Club</h4>
            <div></div>
          </div>
          <article class="desc">

            <p>
              Rift Valley Sports Club was started in 1907 by a few Englishmen
              after the arrival of the railway in Nakuru town.
            </p>
            <p>
              The Club was initially meant to bring people with common interests
              together and also for the “who is who” in the Country and aimed to
              serve the needs of such groups.
            </p>
            <p>
              The trend has however evolved with the Club opening up for young
              professionals and sports personalities.
            </p>
            <p>
              The Club has since changed from its initial mission to a more
              active role offering a wide range of sporting facilities such as
              international squash courts, international lawn tennis courts,
              modern table tennis, modern snooker tables, international cricket
              pitch, modern swimming pool, basketball pitch and a modern soccer
              ground.
            </p>
            <p>
              In July, 2013, the Club officially opened its newly modern Health
              and Fitness centre comprising the following:
            </p>
            <ul class="extras">
              <li class="list-item">
                <i class="fa fa-angle-double-right"></i> 100 pax capacity
                Aerobics hall
              </li>
              <li class="list-item">
                <i class="fa fa-angle-double-right"></i> 100 pax capacity
                Gymnasium hall fully equipped
              </li>
              <li class="list-item">
                <i class="fa fa-angle-double-right"></i> A ladies wing with
                Sauna, Steam bath
              </li>
              <li class="list-item">
                <i class="fa fa-angle-double-right"></i> A Gents wing with
                Sauna, Steam Bath.
              </li>
            </ul>
          </article>
        </div>
      </div>
      {{--  <div class="single-room-info container">
  
        <article class="info">
          <h3>Afilliate Clubs</h3>
          <p>
            Rift Valley Sports Club has reciprocal arrangements with reputable
            international and national Clubs which includes;
          </p>
    
          <h6 class="text-muted">Kenya</h6>
          <ul class="list">
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>Nairobi Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>United Kenya Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i> Parklands Sports
              Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>Gymkhana Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>Mombasa Club Eldoret
              Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>Nanyuki Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>Kitale Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>Nyanza Club
            </li>
          </ul>
    
          <br />
          <h6 class="text-muted">International Clubs</h6>
          <ul class="list-group">
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>
              <strong>India –</strong>Cricket Club of India
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>
              <strong>India –</strong>Karnavati Club of India
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>
              <strong>India –</strong> Juhu Vile Gymkhana Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>
              <strong>India –</strong>
              Umed Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>
              <strong>India –</strong>
              Pleasure Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>
              <strong>Qatar -</strong> Doha Club
            </li>
            <li class="list-item">
              <i class="fa fa-paper-plane mx-2"></i>
              <strong>SRI LANKA–</strong> Colombo Swimming Club
            </li>
          </ul>
        </article>
      </div>
    
      <div class=" single-room-images container-fluid">
        <div class="row">
          <div class="card shadow-sm col m-1 bg-white rounded">
            <figure class="figure card-default">
              <img src="{{asset('assets/images/gate.jpg')}}" class="img-fluid" alt="..." />
      <figcaption class="figure-caption">
        The Entrance to Rift Valley Sports Club.
      </figcaption>
      </figure>
    </div>

    <div class="card shadow-sm col m-1 bg-white rounded">
      <figure class="figure card-default">
        <img src="{{asset('assets/images/Main-Entrance.jpg')}}" class="img-fluid" alt="..." />
        <figcaption class="figure-caption">
          The Entrance to Rift Valley Sports Club Reception.
        </figcaption>
      </figure>
    </div>

    <div class=" card shadow-sm col m-1 bg-white rounded">
      <figure class="figure card-default">
        <img src="{{asset('assets/images/photo-gallery/spool3.jpg')}}" class="img-fluid" alt="..." />
        <figcaption class="figure-caption">
          Rift Valley Sports Club Swimming Pool.
        </figcaption>
      </figure>
    </div>
</div>
</div> --}}
</div>
</section>
<!-- slider -->
<div class="book">
  <div class="container">
    <div class="row">

      <div class="col-lg-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg align-middle" data-toggle="modal" data-target="#missionstatement">
          Mission 
        </button>
      </div>
      <div class="col-lg-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg align-middle" data-toggle="modal" data-target="#clubvision">
          Vision
        </button>
      </div>
      <div class="col-lg-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-lg align-middle" data-toggle="modal" data-target="#corevalues">
          Mission Statement
        </button>
      </div>


    </div>

  </div>

</div>



<!-- Modal -->
<div class="modal fade" id="missionstatement" tabindex="-1" role="dialog" aria-labelledby="missionstatementTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
           <div class="modal-body">
        <div class="section-title">
          <h4>RVSC MISSION STATEMENT</h4>
          <div></div>
        </div>
        <p>To develop and maintain the Club facilities to the highest standards
          in order to provide consistent and quality social events, sporting, recreational
          and hospitality services to our members and their guests.</p>
      </div>

    </div>
  </div>
</div>
<!-- Vission Modal -->
<div class="modal fade" id="clubvision" tabindex="-1" role="dialog" aria-labelledby="clubvisionTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
        <div class="section-title">
          <h4>RVSC VISION</h4>
          <div></div>
        </div>
        <p>Our Vision is to be the most efficient, friendly and homely Member’s Club in the Country with International outlook.</p>
      </div>

    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="corevalues" tabindex="-1" role="dialog" aria-labelledby="corevaluesTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
        <div class="section-title">
          <h4>RVSC Core Vallues</h4>
          <div></div>
        </div>
        <h6 class="text-muted">1)	To uphold family values</h6>
        <ul class="list">
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i>By being role models to our children through good behavior.
          </li>
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i>By promoting of togetherness in the family unit
          </li>
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i> By creating activities for all age groups in the family thereby enhancing bonding
            Club
          </li>
 
        </ul>
        <br>
        <h6 class="text-muted">2)	To uphold good morals</h6>
        <ul class="list">
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i>By discouraging anti-social behaviors like drug abuse, improper mode of dress, use of abusive language etc.
          </li>
           
        </ul>
        <br>
        <h6 class="text-muted">3)	To encourage interpersonal relations</h6>
        <ul class="list">
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i>By creating an atmosphere where every member and staff regardless of race, religion etc feels welcome and appreciated.
          </li>
           
        </ul>
        <br>
        <h6 class="text-muted">4)	To respect other members and their guests</h6>
        <ul class="list">
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i>To be civil in our approach when dealing with other members and their guests.
          </li>
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i>To treat others as we would wish to be treated.
          </li>
           
        </ul>
        <br>
        <h6 class="text-muted">5)	To respect the rule of law.</h6>
        <ul class="list">
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i>To ensure adherence to all laws provided by the Clubs Constitution and those enacted by the state.
          </li>
             
        </ul>
        <br>
        <h6 class="text-muted">6)	To respect and uphold the club’s constitution and bylaws.</h6>
        <ul class="list">
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i>To be civil in our approach when dealing with other members and their guests.
          </li>
          <li class="list-item">
            <i class="fa fa-paper-plane mx-2"></i>To treat others as we would wish to be treated.
          </li>
           
        </ul>
        
      </div>

    </div>
  </div>
</div>
@endsection



</div>