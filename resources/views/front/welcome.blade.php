@extends ('front.layout.app')

@section('content')

<div class="container-fluid">
   <!-- slideshow -->
   @php
     $photo = [];
     $photos = [];

     for($i = 0; $i<3; $i++){
       $photos[] = $photo;
     };
   @endphp

   <div class="slideshow-wrapper">
     <div class="slideshow">
       @foreach($photos as $photo)
       <div class="slideshow__slider">
         <div class="slideshow__content">
           @include ('front.components.top-banner', [
           'image' => 'front/img/photos/photo1.jpg',
           ])
         </div>
       </div>
       @endforeach
     </div>
     <div class="slideshow__arrows"></div>
   </div>
   <!-- slideshow -->
</div>

<!-- content -->
<div class="section">
  <div class="container-fluid">

     <div class="teaser-list__element" data-aos="fade-left">
        <div class="teaser-area teaser-area--right clearfix">
          <div class="teaser-area__img img-filter" style="background-image:url(front/img/photos/photo2.jpg)"></div>
          <div class="teaser-area__title">
             <a class="big-title" href="">weekly inspiration <span class="mdi mdi-trending-neutral"></span></a>
          </div>
       </div>
     </div>
  </div>

  <!-- full Width -->
   <div class="teaser-area teaser-area--full clearfix" data-aos="fade-right">
      <div class="teaser-area__img img-filter" style="background-image:url(front/img/photos/photo7.jpg)"></div>
      <div class="teaser-area__title">
         <a class="big-title" href="wow">About the wow effect agency <span class="mdi mdi-trending-neutral"></span></a>
      </div>
      <!-- <div class="teaser-area__text">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div> -->
   </div>
  <!-- full Width -->

</div>

<section class="section">
  <div class="container-fluid">

     <div class="topics clearfix" data-aos="fade-up">
        <div class="topics__element active">
           @include ('front.components.topic-homepage', [
             'image' => 'front/img/photos/photo6.jpg',
             'title' => 'events',
             'link' => 'wedo',
            ])
        </div>
        <div class="topics__element">
           @include ('front.components.topic-homepage', [
             'image' => 'front/img/photos/photo5.jpg',
             'title' => 'people',
             'link' => 'wedo',
            ])
        </div>
     </div>

 </div>
</section>

<section class="section">
   <div class="section__header text-center">
      <h3 class="title">#thewoweffectagency</h3>
   </div>

   <!-- instagram -->
   <!-- include('front.components.instagram-v2') -->
   <!-- instagram -->

   <div class="container-fluid">

   <div class="instagram">
      <div class="row">

         <div class="col-sm-3">
            <div class="instagram__element">
               <a href="" target="_blank">
                  <img src="front/img/icons/instagram-white.svg" alt="">
                  <div class="instagram__img" style="background-image:url(front/img/photos/photo1.jpg)"></div>
               </a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="instagram__element">
               <a href="" target="_blank">
                  <img src="front/img/icons/instagram-white.svg" alt="">
                  <div class="instagram__img" style="background-image:url(front/img/photos/photo1.jpg)"></div>
               </a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="instagram__element">
               <a href="" target="_blank">
                  <img src="front/img/icons/instagram-white.svg" alt="">
                  <div class="instagram__img" style="background-image:url(front/img/photos/photo1.jpg)"></div>
               </a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="instagram__element">
               <a href="" target="_blank">
                  <img src="front/img/icons/instagram-white.svg" alt="">
                  <div class="instagram__img" style="background-image:url(front/img/photos/photo1.jpg)"></div>
               </a>
            </div>
         </div>

      </div>
   </div>
   </div>

</section>
@endsection

@push('scripts')
<script src="{{asset('front/plugins/slick/slick.min.js')}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>

AOS.init({
   delay: 150,
});

$(document).ready(function () {

   $(function() {
     $(".topics__element").click(function() {
        $('.topics__element').removeClass( "active" );
         $(this).addClass( "active" );
      });
   });

 $('.slideshow').on(
   'init',
   function(event, slick)
   {
       $(slick.$slides[slick.currentSlide]).addClass('active');
   }
 ).on(
   'afterChange',
   function(event, slick, currentSlide, nextSlide)
   {
       $(slick.$slides[currentSlide]).addClass('active');
   }
 ).on(
   'beforeChange',
   function(event, slick, currentSlide, nextSlide)
   {
       $(slick.$slides[currentSlide]).removeClass('active');
   }
 ).slick({
     dots: false,
     arrows: true,
     variableWidth: false,
     infinite: true,
     speed: 900,
     slidesToShow: 1,
     fade: false,
     pauseOnHover: false,
     cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
     autoplay: true,
     // appendArrows: '.slideshow__arrows',
     nextArrow: '<button class="slideshow__arrow slick-next slick-arrow mdi mdi-trending-neutral"></button>',
      prevArrow: false,
   });

 });

 </script>
 @endpush
