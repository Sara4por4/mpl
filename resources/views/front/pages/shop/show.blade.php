@extends ('front.layout.app')

@section('content')


<section class="section">
  <div class="container">

    @include ('front.components.section-header', [
    'subtitle' => 'Shop',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    ])

    <!-- back link -->
    <a href="{{url('shop')}}" class="link">< Back</a>
    <!-- back link -->

  </div>

</section>

<section class="section yellow-color">
  <div class="section__container">
    <div class="container">


    @include ('front.components.product-detail', [
      'category' => 'Blends',
      'title' => 'Lorem ipsum dolor sit amet',
      'size' => '0.14 oz / 4g',
      'price' => '35',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
      'howtouse' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
      'keyingredients' => 'Lorem ipsum',
      'ingredients' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
      'benefits' => 'name 1',
      'img' => 'front/img/photos/photo4.jpg',
      'tag' => 'tag',
    ])


    </div>
  </div>
</section>

<section class="section">
  <div class="section__container">

    <div class="container">

      <!-- review form -->
      <div class="collapse" id="review-form">
        @include ('front.components.review-card')
      </div>
      <!-- review form -->

      <div class="user-review-header row">
        <div class="col-md-6 col-sm-8">
          <h6 class="subtitle">What people say <span>10 reviews</span></h6>
        </div>
        <div class="col-md-6 col-sm-4">
          <button type="button"  class="btn" data-toggle="collapse" data-target="#review-form" aria-expanded="false" aria-controls="review-form">Write a review</button>
        </div>
      </div>

      <!-- people reviews -->
      @include ('front.components.user-review',[
        'title' => 'Lorem ipsum dolor sit amet, consecteteur',
        'subtitle' => 'Lorem ipsum dolor sit amet, consecteteur',
        'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
      ])
      <!-- people reviews -->

      <a href="#" class="link">Read more <span class="icon icon--arrow-right"></span></a>

    </div>

  </div>
</section>

<!-- highlighted products -->
@include ('front.components.highlighted-section-products')
<!-- highlighted products -->


@endsection

@push('scripts')
<script>

$( ".buy__btn").click(function() {
  $(this).text('Added!');
});

</script>
@endpush
