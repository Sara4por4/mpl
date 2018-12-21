@extends ('front.layout.app')

@section('content')

<!-- banner -->
@include ('front.components.top-banner', [
'class' =>  'why',
'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
'subtitle' => 'Why MPL daily',
'image' => 'front/img/photos/photo14.jpg',
'by' => 'Mafalda', 
'link' => '',
])
<!-- banner -->

<section class="section yellow-color">
  <div class="container">

    @include ('front.components.cta-2', [
      'info' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      'title' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      'text' =>  '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, c aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
    ])

  </div>
</section>

<!-- you may also like -->
<section class="section section--padding">
  <div class="container">

    <div class="section__header">
      <h3 class="big-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</h3>
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
        <div class="slideshow slideshow--why">

          @foreach($cards as $card)
          <div class="slideshow__container">
            <div class="slideshow__slider">

                <div class="workshops-list__element">
                  @include ('front.components.why-card', [
                  'class' => 'why',
                  'info' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.',
                  'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                  'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
                  'image' => 'front/img/photos/photo5.jpg',
                  ])
                </div>

            </div>
          </div>
          @endforeach

        </div>

        <div class="slideshow__arrows"></div>
      </div>
    </div>
    <!-- you may also like -->

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
       breakpoint: 500,
       settings: {
         slidesToShow: 1,
         centerMode: true,
         centerPadding: '30px'
       }
     }]
   });

 });

 </script>
 @endpush

@endsection
