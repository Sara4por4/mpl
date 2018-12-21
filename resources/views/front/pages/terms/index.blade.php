@extends ('front.layout.app')

@section('content')
<div class="container-fluid">
  <section class="section">

    <!-- section header -->
    @include ('front.components.section-header', [
      'title' => 'Terms & Conditions',
      'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    ])
    <!-- section header -->

    <div class="section__container">

      <div class="container container--shrink">
        <!-- start article -->
        <div class="editable text">
          <h4>Receção de Informação</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h4>Remoção de dados</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h4>Produtos</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <!-- end article -->
      </div>

    </div>
  </section>

  <section class="section">

    <div class="social-header row">
      <div class="col-xs-6">
        <h3 class="small-subtitle small-subtitle--bold">#CastroLighting</h3>
      </div>
      <div class="social-header__link col-xs-6">
        <a href="#" target="_blank" class="btn-link"><span class="icon icon--instagram"></span>follow us</a>
      </div>
    </div>

    <!-- begin thumbs list  -->
    <div class="social-card-list">

      @php
        $photo = [
          'image' => 'front/img/photos/homepage/photo4.jpg',
        ];

        $photos = [];

        for($i = 0; $i<10; $i++){
          $photos[] = $photo;
        };
      @endphp

      @foreach($photos as $photo)
      <div class="social-card-list__element">
        @include ('front.components.social-card',[
        'image' => $photo['image']
        ])
      </div>
      @endforeach

    </div>
    <!-- end thumbs list  -->

  </section>

</div>
@endsection

@push('scripts')
<script src="{{asset('front/plugins/slick/slick.min.js')}}"></script>
<script>

$(document).ready(function () {

  $('.social-card-list').slick({
   dots: false,
   arrows: false,
   variableWidth: false,
   infinite: true,
   speed: 900,
   slidesToShow: 6,
   slidesToScroll: 1,
   fade: false,
   pauseOnHover: false,
   cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
   autoplay: true,
   responsive: [
   {
     breakpoint: 480,
     settings: {
         slidesToShow: 3,
     }
   }]
  });


});
</script>
@endpush
