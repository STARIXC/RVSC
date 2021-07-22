<!DOCTYPE HTML>
<html lang="eng">

<head>
  <title>Rift Valley Sports Club | Home :: Page</title>
  <link href="{{ asset('frontend/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
  <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/froom.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/rooms.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/rdetails.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/sports.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('frontend/assets/css/contact.css')}}" rel="stylesheet" type="text/css" media="all" />
  {{-- <link href="{{ asset('frontend/assets/css/lightbox.css')}}" rel="stylesheet" type="text/css" media="all" /> --}}
  <link href="{{ asset('frontend/assets/css/management.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
  <link rel="icon" href="{{ asset('favicon.ico') }}" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('frontend/assets/js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

</head>

<body>
  <!--header-->
 @include('includes.nav')
  <!--header-->
      @yield('content') 

@include('includes.footer'); 
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6040afc61c1c2a130d64ccfa/1evuat8cc';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>