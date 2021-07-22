@extends('layouts.master')
@section('content')
<div class="content">
	<header class="contactHero">
    <div class="banner">
      <h1>Contact Us</h1>
      <div></div>
      <p></p>
      <a class="btn-primary" href="index.php">return home</a>
    </div>
  </header>
     <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-5">
          <!-- <Title title="Get in Touch !!!" /> -->
          <div class="section-title">
          	<h4>Get in Touch !!!</h4>
          	<div></div>
          </div>
          
        </div>
        
      </div>
      <div class="row">
     
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pb-5">
          <div class="card card-default">
            <div class="card-body">
              <div class="wrapper-contact animated bounceInLeft">
                <div class="company-info">
                  <h3>Rift Valley Sports Club</h3>
                  <h5>Do you have something to share with us? Get in touch with us on</h5>
                  <ul>
          
                    <li>
                      <i class="fa fa-phone"></i> Phone : +254 717-333-799
                    </li>
                    <li>
                      <i class="fa fa-envelope"> </i> Enquiry :
                       info@rvsc.co.ke
                    </li>
                    <li>
                      <i class="fa fa-envelope"></i> Reservations :  reservations@rvsc.co.ke
                    </li>
                    <li>
                      <i class="fa fa-envelope"> </i> Accounts :  accounts@rvsc.co.ke
                    </li>
                    <li>
                      <i class="fa fa-envelope"> </i> Manager : manager@rvsc.co.ke
                    </li>
                    <li>
                      <i class="fa fa-envelope"> </i> Food and Beverage : fnb@rvsc.co.ke
                    </li>

                  </ul>
                  
                </div>
                <div class="contact">
                
                  <form action="contact.php" method="post">
                    <p>
                      <label>Name</label>
                      <input
                        type="text"
                        name="name"
                        class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"
                        placeholder="Name"
                      />
                    </p>
                    <p>
                      <label>Email</label>
                      <input
                        type="text"
                        name="email"
                        class="validate[required,custom[email]] feedback-input"
                        id="email"
                        placeholder="Email"
                      />
                    </p>
                    <p>
                      <label>Phone</label>
                      <input
                        type="text"
                        name="phone"
                        class="feedback-input"
                        placeholder="+254-716-421-703"
                      />
                    </p>
                    <p>
                      <label>Subject</label>
                      <input
                        type="text"
                        name="subject"
                        class="feedback-input"
                        placeholder="Subject"
                      />
                    </p>
                    <p class="full">
                      <label>Message</label>
                      <textarea
                        name="message"
                        rows="5"
                        class="feedback-input"
                        placeholder="Enter your Message Here"
                      ></textarea>
                    </p>
                  <!--   /* <p class="full">
                      <label>*What is 2+2? (Anti-spam)</label>
                      <input name="human" placeholder="Type Here" />
                    </p> */ -->
                    <p class="full">
                      <button name="submit" type="submit">
                        Submit
                      </button>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
</div>
@endsection