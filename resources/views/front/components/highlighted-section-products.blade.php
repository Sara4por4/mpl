<section class="section purple-bg-color">
  <div class="container">

    <div class="section__header">
      <h3 class="subtitle">You may also like</h3>
    </div>

    <div class="section__container">
      @php
        $card = [];
        $cards = [];

        for($i = 0; $i<3; $i++){
          $cards[] = $card;
        };
      @endphp

      <div class="workshops-list">
        <div class="row">

          @foreach($cards as $card)
          <div class="workshops-list__element slider col-xs-6 col-sm-4">
            @include ('front.components.product-card', [
            'sale' => 'new',
            'class' => 'product',
            'oldprice' => '',
            'newprice' => '28',
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
            'image' => 'front/img/photos/photo10.jpg',
            'link' => 'shop-detail',
            ])
          </div>
          @endforeach

        </div>

      </div>
    </div>

  </div>
</section>

@push('scripts')
<script src="{{asset('front/plugins/slick/slick.min.js')}}"></script>
<script>


$( ".product-card__heart" ).click(function() {
  $(this).toggleClass('active');
});



 $('.workshops-list .row').slick({
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
     responsive: [
     {
       breakpoint: 2500,
       settings: "unslick"
     },
     {
       breakpoint: 800,
       settings: {
         slidesToShow: 1,
         centerMode: true,
         centerPadding: '30px'
       }
     }]
   });

</script>
@endpush
