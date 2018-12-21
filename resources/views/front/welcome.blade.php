@extends ('front.layout.app')

@section('content')

<!-- slideshow -->
@php
  $photo = [];

  $photos = [];

  for($i = 0; $i<3; $i++){
    $photos[] = $photo;
  };
@endphp
<div class="slideshow-wrapper">
  <div class="slideshow slideshow--home" id="top">
    @foreach($photos as $photo)
    <div class="slideshow__slider">
      <div class="slideshow__content">
        @include ('front.components.top-banner', [
        'text' =>  '',
        'class' =>  'top',
        'title' => 'Inspiring women to nourish their body, mind and spirit. All day everyday.',
        'subtitle' => 'Why MPL daily',
        'image' => 'front/img/photos/photo1.JPG',
        'link' => '',
        'by' => '',
        ])
      </div>
    </div>
    @endforeach
  </div>
  <div class="slideshow__dots"></div>
</div>
<!-- slideshow -->

<div class="teaser-card-list">
  <div class="teaser-card-list__element">
    @include ('front.components.teaser-card', [
    'linkname' => 'shop now',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    'subtitle' => 'Shop',
    'tag' => '',
    'text' => '',
    'image' => 'front/img/photos/photo2.png',
    'link' => '',
    'subtitles' => 'Lorem ipsum dolor sit amet',
    'copy' => '',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
    'id' => '1',
    'class' => '',
    ])
  </div>
  <div class="teaser-card-list__element">
    @include ('front.components.teaser-card', [
    'linkname' => 'shop now',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    'subtitle' => 'Shop',
    'tag' => '',
    'text' => '',
    'image' => 'front/img/photos/photo3.png',
    'link' => '',
    'subtitles' => 'Lorem ipsum dolor sit amet',
    'copy' => '',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
    'id' => '2',
    'class' => '',
    ])
  </div>
  <div class="teaser-card-list__element">
    @include ('front.components.teaser-card', [
    'linkname' => 'shop now',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    'subtitle' => 'Shop',
    'tag' => '',
    'text' => '',
    'image' => 'front/img/photos/photo4.jpg',
    'link' => '',
    'subtitles' => 'Lorem ipsum dolor sit amet',
    'copy' => '',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
    'id' => '3',
    'class' => '',
    ])
  </div>
</div>


@endsection

@push('scripts')
<script src="{{asset('front/plugins/slick/slick.min.js')}}"></script>
<script>

$(document).ready(function () {

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
     dots: true,
     arrows: false,
     variableWidth: false,
     infinite: true,
     speed: 900,
     slidesToShow: 1,
     fade: false,
     pauseOnHover: false,
     cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
     autoplay: true,
     appendDots: '.slideshow__dots',
   });

 });

 </script>
 @endpush
