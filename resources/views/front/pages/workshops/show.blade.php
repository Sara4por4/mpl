@extends ('front.layout.app')

@section('content')

<!-- banner -->
@include ('front.components.top-banner-workshop', [
'class' =>  'workshop',
'title' => 'Workshop Title',
'price' => '85',
'tag' => 'tag',
'image' => 'front/img/photos/photo9.jpg',
])
<!-- banner -->

<section class="section">
  <div class="container">

    <article class="article">

      <h3 class="article__header title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

      <figure>
        <img src="{{asset('front/img/photos/photo1.JPG')}}" alt="">
        <figcaption><h6>Lorem ipsum dolor sit amet</h6></figcaption>
          <p><span>2018 &copy; Lorem ipsum dolor sit</span></p>
      </figure>

      <div class="editable text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h4>
      </div>

    </article>

    <div class="section__container">

      <!-- start acordion list -->
      @php
        $accordion = [];
        $accordions = [];

        for($i = 0; $i<4; $i++){
          $accordions[] = $accordion;
        };
      @endphp

      @foreach($accordions as $accordion)
      @include ('front.components.accordion', [
        'id' => '1',
        'title' => 'Lorem ipsum dolor sit amet',
        'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
      ])
      @endforeach
      <!-- end acordion list -->

      <button type="button" name="button" class="buy__btn btn btn--top">Add to cart<span>|</span>85€</button>

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
          <h4 class="subtitle">What people say <span>10 reviews</span></h4>
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
@include ('front.components.highlighted-section')
<!-- highlighted products -->


@endsection

@push('scripts')
<script>

$( ".accordion__header").click(function() {
  $(this).toggleClass('active');
});

$( ".buy__btn").click(function() {
  $(this).text('Added!');
});


</script>
@endpush
