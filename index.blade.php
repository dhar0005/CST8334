@extends('templates.template')

@section('content')
<div  class="container-fluid body6">

    <!-- slider -->

   <div id="homeCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
       <!-- Indicators -->
       <ol class="carousel-indicators">
         <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#homeCarousel" data-slide-to="1"></li>
         <li data-target="#homeCarousel" data-slide-to="2"></li>
         <li data-target="#homeCarousel" data-slide-to="3"></li>
       </ol>

       <!-- Wrapper for slides -->
       <div class="carousel-inner">
         <div class="item active">
           <img src="images/img1.jpg" class="d-block w-100" width="940" height="400" alt="">
         </div>

         <div class="item">
           <img src="images/img2.jpg" class="d-block w-100" width="940" height="400" alt="">
         </div>

         <div class="item">
           <img src="images/img3.jpg" class="d-block w-100" width="940" height="400" alt="">
         </div>

         <div class="item">
           <img src="images/img4.jpg" class="d-block w-100" width="940" height="400" alt="">
         </div>
       </div>

     <!-- Left and right controls -->
     <a class="carousel-control-prev" href="#homeCarousel" data-slide="prev">
     <span class="carousel-control-prev-icon"></span>
     </a>
     <a class="carousel-control-next" href="#homeCarousel" data-slide="next">
       <span class="carousel-control-next-icon"></span>
     </a>
   </div>

</div>
  <!-- slider -->


<!-- content -->

  <div class="wrapper">
    <div class="container body3">
      <h2>Welcome, dear visitor!</h2>
        <div class="row">
          <div class="col-sm-3 col-md-3" >
            <figure class="left marg_right1"><img src="images/page1_img1.jpg" alt=""></figure>
          </div>
          <div class="col-sm-9 col-md-9" >
            <p>We are here to help you to sail with us. we are the new Generation of shipping goods to one destination to another one. Many has already chosen to sail with us and you are next. Services include same, one or two-day delivery. get in touch with us the dockshipper is here for your help.</p>
            
          </div>
        </div>
    </div>
  </div>



@endsection
