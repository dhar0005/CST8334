<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
<link href='http://fonts.googleapis.com/css?family=Fugaz+One|Muli|Open+Sans:400,700,800' rel='stylesheet' type='text/css' />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script type="text/javascript" src="{{url('assets/js/javascript.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jcarousellite.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript">
$(function(){
  $('#homeCarousel').carousel();
});
</script>
<style>
.carousel-inner img {
  width: 100%;
  height: 100%;
}
</style>
</head>
<body>
	<div class="body1">

<!-- header -->
<?php
include(app_path() . '/includes/menubar.php');
?>
<!-- header end-->

  </div>
 	<div  class="body2">
  </div>
  <div class="body3">
    <div class="container-fluid">
      <!-- content -->

      @yield('content')
    </div>
  </div>

<div class="body4">
  <div class="container bottom">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h4>Address</h4>
              <ul class="list-group  list-group-flush ">
                <li class="list-group-item bg-transparent">Algonquin College</li>
                <li class="list-group-item bg-transparent">Ottawa</li>
                <li class="list-group-item bg-transparent">Canada</li>
                <li class="list-group-item bg-transparent">+1(613)111-1111</li>
                <li class="list-group-item bg-transparent">ebusiness@mail.com<a href="mailto:"></a></li>
              </ul>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-12">
            <h4>Follow Us</h4>
              <ul class="list-group  list-group-flush">
                    <!--Facebook-->
                    <li class="list-group-item bg-transparent"><a href="https://www.facebook.com"><button type="button" class="btn btn-fb"><i class="fab fa-facebook-f"></i></button>Facebook</a></li>
                    <!--Twitter-->
                    <li class="list-group-item bg-transparent"><a href="https://www.twitter.com"><button type="button" class="btn btn-tw"><i class="fab fa-twitter"></i></button>Twitter</a></li>
               </ul>
       </div>
       <div class="col-lg-4 col-md-4 col-sm-12">
            <h4>Newsletter</h4>
              <form id="newsletter" method="post">
                <input  type="text" class= "input" value="Type Your Email Here"  onblur="if(this.value=='') this.value='Type Your Email Here'" onfocus="if(this.value =='Type Your Email Here' ) this.value=''" >
                <a href="#" class="button" onclick="document.getElementById('newsletter').submit()">Subscribe</a>
              </form>
        </div>
     </div>
   </div>
 </div>
<!-- content -->

<div class="container-fluid body5">
  <!-- footer -->
    <footer>
       <p>&copy; <?php echo date("Y") ?> CST8334. All Rights Reserved.</p>
    </footer>
  <!-- footer end -->
</div>
 </body>
</html>
