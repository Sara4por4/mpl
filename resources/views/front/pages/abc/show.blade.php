@extends ('front.layout.app')

@section('content')

<section class="section">
  <div class="container">

    @include ('front.components.section-header', [
      'subtitle' => 'ABC: MPL glossary from A to Z',
      'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.',
    ])

    <!-- back link -->
    <a href="{{url('abc')}}" class="link">< Back</a>
    <!-- back link -->

  </div>
</section>

<div class="teaser-card-list teaser-card-list--topics">

  <div class="teaser-card-list__element">
    @include ('front.components.teaser-card', [
    'linkname' => '',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'subtitle' => 'A',
    'tag' => 'tag 1',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
    'image' => 'front/img/photos/photo12.jpg',
    'link' => '',
    'subtitles' => 'Lorem ipsum dolor sit amet',
    'copy' => '2018 &copy; Lorem ipsum dolor sit',
    'info' => '',
    'id' => '1',
    'class' => 'glossary',
    ])
  </div>

</div>


<!-- you may also like -->
@include ('front.components.teaser-section')
<!-- you may also like -->


<!-- highlighted products -->
@include ('front.components.highlighted-section-products')
<!-- highlighted products -->

@endsection
