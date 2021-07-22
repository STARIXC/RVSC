@extends('layouts.master')
@section('content')
   <div class="content">
 
    <header class="membershipHero">
      <div class="banner">
        <h1>Membership</h1>
        <div></div>
        <p></p>
        <a class="btn-primary" href="index.php">return home</a>
        {{-- <a class="btn-primary" href="member-login.php">Member Login</a> --}}
      </div>
    </header>

    <section class="container">
      <div class="col-lg-12">
        <div class="section-title">
          <h4>Joining the Club</h4>
          <div></div>
        </div>
      </div>
      <div class="card col-md-12 ">
        <div class="card-body">
          <article class="desc">
            <h3>RIFT VALLEY SPORTS CLUB MEMBERSHIP REQUIREMENTS</h3>
            <p>Please submit the following document with your duly completed Application form.</p>
            <ul class="p-5">
              <li class="list-item"><i class="fa fa-angle-double-right"> </i> A copy of the National Identity Card.</li>
              <li class="list-item"><i class="fa fa-angle-double-right"> </i> One Passport Size Coloured photograph.</li>
              <li class="list-item"><i class="fa fa-angle-double-right"> </i>One ½ body size – coloured photograph.</li>
              <li class="list-item"><i class="fa fa-angle-double-right"> </i> A copy of your property Title Deed-within Nakuru County</li>
              <li class="list-item"><i class="fa fa-angle-double-right"> </i> Entrance fee of (Two Hundred And Twenty Six Thousand Shillings Only) Kshs. 226,000.00</li>
            </ul>
            <p>
              <span>Annual subscriptions of (Twelve Thousand Only) Kshs. 12,000.00</span>
              <span>the first year.</span>
            </p>
            <p>
              <span>Sports Levy Subscriptions of (Twelve Thousand Only) Kshs. 12,000.00</span>
              <span>the first year.</span>
            </p>
            <p>
              <span><strong>TOTAL AMOUNT PAYABLE Kshs 250,000.00</strong></span>
            </p>
            <p>
              <span>Please download and fill out the membership request form below</span>
            </p>
            <p>
              <a href="http://rvsc.co.ke/form.pdf">DOWNLOAD MEMBERSHIP REQUEST FORM</a>
            </p>
          </article>
        </div>
      </div>
    </section>
    <div class="p-5"></div>
  </div>
      
@endsection