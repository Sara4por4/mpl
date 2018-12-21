<section class="section section--padding">
  <div class="container">

    <div class="section__header">
      <h3 class="subtitle">You may also like</h3>
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
        <div class="slideshow slideshow--products">

          @foreach($cards as $card)
          <div class="slideshow__container">
            <div class="slideshow__slider">

                <div class="workshops-list__element">
                  @include ('front.components.journal-card', [
                  'class' => 'journal',
                  'author' => 'Maria',
                  'date' => '20 May',
                  'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                  'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
                  'image' => 'front/img/photos/photo5.jpg',
                  'link' => 'journal-detail',
                  ])
                </div>

            </div>
          </div>
          @endforeach

        </div>

        <div class="slideshow__arrows"></div>

      </div>
    </div>

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
     responsive: [{
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
