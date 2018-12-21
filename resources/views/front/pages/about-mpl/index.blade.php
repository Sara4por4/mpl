@extends ('front.layout.app')

@section('content')

<!-- banner -->
@include ('front.components.top-banner', [
'class' =>  'about',
'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
'subtitle' => 'About MPL',
'image' => 'front/img/photos/photo13.jpg',
'link' => '',
'by' => '',

])
<!-- banner -->


<div class="teaser-card-list teaser-card-list--about">

  <div class="teaser-card-list__element">
    @include ('front.components.teaser-card', [
    'linkname' => '',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'subtitle' => '',
    'tag' => '',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
    'image' => 'front/img/photos/photo12.jpg',
    'link' => '',
    'subtitles' => 'Lorem ipsum dolor sit amet',
    'copy' => '2018 &copy; Lorem ipsum dolor sit',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    'id' => '1',
    'class' => '',
    ])
  </div>

  <div class="teaser-card-list__element">
    @include ('front.components.teaser-card', [
    'linkname' => '',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'subtitle' => '',
    'tag' => '',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
    'image' => 'front/img/photos/photo12.jpg',
    'link' => '',
    'subtitles' => 'Lorem ipsum dolor sit amet',
    'copy' => '2018 &copy; Lorem ipsum dolor sit',
    'info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    'id' => '2',
    'class' => '',
    ])
  </div>

</div>

<!-- you may also like -->
<section class="section section--padding">
  <div class="container">

    <div class="section__header">
      <h3 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</h3>
    </div>

    <div class="section__container">

      @php
        $card = [];
        $cards = [];

        for($i = 0; $i<5; $i++){
          $cards[] = $card;
        };
      @endphp

      <div class="slideshow-wrapper">
        <div class="slideshow slideshow--topics">
        <!-- <div class="slideshow slideshow--products"> -->

          @foreach($cards as $card)
          <div class="slideshow__container">
            <div class="slideshow__slider">

                @include ('front.components.about-card', [
                'class' => 'product',
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
                'image' => 'front/img/photos/photo5.jpg',
                ])
            </div>
          </div>
          @endforeach


        </div>
        <div class="slideshow__arrows"></div>
      </div>
    </div>
    <!-- you may also like -->

    <a href="#" class="btn btn--center" download>Download full cv</a>

  </div>
</section>


@push('scripts')
<script src="{{asset('front/plugins/slick/slick.min.js')}}"></script>
<script>

$(document).ready(function () {

 $('.slideshow').slick({
     dots: false,
     arrows: true,
     variableWidth: false,
     infinite: true,
     speed: 900,
     slidesToShow: 3,
     fade: false,
     pauseOnHover: false,
     cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
     autoplay: true,
     appendArrows: '.slideshow__arrows',
     nextArrow: '<button class="icon icon--arrow-right"></button>',
     prevArrow: '<button style="display:none"></button>',
     responsive: [
        {
           breakpoint: 480,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         }
     ]
   });

 });

 </script>
 @endpush

@endsection
