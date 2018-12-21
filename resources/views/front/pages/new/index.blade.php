@extends ('front.layout.app')

@section('content')

<section class="section">
  <div class="container">
    @include ('front.components.section-header', [
    'subtitle' => 'How to get started',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    ])
  </div>
</section>

<!-- banner -->
@include ('front.components.top-banner', [
'class' =>  'promotion',
'text' =>  '',
'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
'subtitle' => 'Brand new',
'image' => 'front/img/photos/photo8.jpg',
'by' => '',
'link' => '',
])
<!-- banner -->

<div class="teaser-card-list teaser-card-list--topics">
  <div class="teaser-card-list__element">
    @include ('front.components.teaser-card', [
    'class' => '',
    'linkname' => 'get to know',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    'subtitle' => 'To Start',
    'tag' => 'tag 1',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
    'image' => 'front/img/photos/photo5.jpg',
    'link' => '',
    'subtitles' => 'Lorem ipsum dolor sit amet',
    'copy' => '2018 &copy; Lorem ipsum dolor sit',
    'info' => '',
    'id' => '1',
    ])
  </div>
  <div class="teaser-card-list__element">
    @include ('front.components.teaser-card', [
    'class' => '',
    'linkname' => 'get to know',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'subtitle' => 'To improve',
    'tag' => 'tag 1',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
    'image' => 'front/img/photos/photo6.jpg',
    'link' => '',
    'subtitles' => 'Lorem ipsum dolor sit amet',
    'copy' => '2018 &copy; Lorem ipsum dolor sit',
    'info' => '',
    'id' => '2',
    ])
  </div>
  <div class="teaser-card-list__element">
    @include ('front.components.teaser-card', [
    'class' => '',
    'linkname' => 'subscribe plans',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.',
    'subtitle' => 'Subscriptions',
    'tag' => 'tag 1',
    'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
    'image' => 'front/img/photos/photo7.jpg',
    'link' => '',
    'subtitles' => 'Lorem ipsum dolor sit amet',
    'copy' => '2018 &copy; Lorem ipsum dolor sit',
    'info' => '',
    'id' => '3',
    ])
  </div>
</div>


@endsection
