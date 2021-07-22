@extends('layouts.master')
@section('content')


    <div class="content">
        <header class="managemmentHero">
            <div class="banner">
                <h1>Management of RVSC</h1>
                <div></div>
                <p></p>
                <a class="btn-primary" href="index.php">return home</a>
            </div>
        </header>
     
        <section class="container">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>Rift Valley Sports Club Management</h4>
                        <div></div>
                    </div>
                </div>
                <div class=" col-md-12 ">
                    <div class="">

                        <p class="text-muted">
                            The Rift Valley Sports Club in Managed by various boards and
                            directors
                        </p>
                        <p>These includes:-</p>
                        <h6 class="text-muted">Committee</h6>
                        <ul class="list">
                            <li class="list-item">
                                <i class="fa fa-user mx-2"></i>Chairperson
                            </li>
                            <li class="list-item">
                                <i class="fa fa-user mx-2"></i>Vice Chairperson
                            </li>
                            <li class="list-item">
                                <i class="fa fa-users mx-2"></i> Committee Members
                            </li>
                        </ul>
                        <h6 class="text-muted">Sub-Committee </h6>
                        <p>
                            For better running of the Club, the Committee is further divided
                            into several sub-committees.
                        </p>
                        <h6 class="text-muted">Secretariat </h6>
                        <p>
                            The Club’s daily operations are run by a dedicated management
                            headed by the Club secretary.
                        </p>
                    </div>
                </div>
            </div>

        

        </section>
        <!-- Team -->
        <section id="team" class="pb-5 pt-5">
            <div class="container">
                <div class="section-title">
                <h5 class="h1">OUR TEAM OF DIRECTORS</h5> 
                <div></div>   
                </div>
                
                <div class="row">
                    @foreach ($directors as $director)
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip">
                            <div class="mainflip flip-0">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid"
                                                    src="{{ asset($director->director_image) }}"
                                                    alt="card image"></p>
                                            <h4 class="card-title">{{ $director->director_name }}</h4>
                                            <p class="card-text">{{ $director->director_position }}</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i
                                                    class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">{{ $director->director_name }}</h4>
                                            <p class="card-text">{{ $director->director_position }}
                                            </p>
                                            {{-- <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank"
                                                        href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank"
                                                        href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank"
                                                        href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank"
                                                        href="https://www.fiverr.com/share/qb8D02">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Team -->
        <!-- Page Content -->
       

        <div class="p-5"></div>
    </div>
@endsection
