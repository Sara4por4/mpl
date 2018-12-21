@php
$photo = [];

$photos = [];

for($i = 0; $i<6; $i++){
  $photos[] = $photo;
};
@endphp

<a href="#" class="product-card__heart"></a>

<div class="product-slideshow">

  @foreach($photos as $photo)
  <div class="product-slideshow__slider">
    <div class="product-slideshow__content">
      <div class="product-slideshow__img" style="background-image:url({{asset($image)}})"></div>
    </div>
  </div>
  @endforeach

</div>

<div class="product-slideshow-nav">

  @foreach($photos as $photo)
  <div class="product-slideshow__slider">
    <div class="product-slideshow__content">
      <div class="product-slideshow__img" style="background-image:url({{asset($image)}})"></div>
    </div>
  </div>
  @endforeach

</div>


@push('scripts')
<script src="{{asset('front/plugins/slick/slick.min.js')}}"></script>
<script>

$(document).ready(function () {

 $('.product-slideshow').slick({
     dots: false,
     arrows: false,
     variableWidth: false,
     infinite: true,
     speed: 900,
     slidesToShow: 1,
     fade: false,
     pauseOnHover: false,
     cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
     autoplay: true,
     asNavFor: '.product-slideshow-nav'
   });

 $('.product-slideshow-nav').slick({
     dots: false,
     arrows: false,
     variableWidth: false,
     infinite: true,
     speed: 900,
     slidesToShow: 5,
     fade: false,
     pauseOnHover: false,
     cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
     autoplay: true,
     asNavFor: '.product-slideshow',
     responsive: [
     {
       breakpoint: 769,
       settings: {
         slidesToShow: 4
       }
     },
     {
       breakpoint: 480,
       settings: {
         slidesToShow: 3
       }
     }]
   });

 });

 </script>
 @endpush
