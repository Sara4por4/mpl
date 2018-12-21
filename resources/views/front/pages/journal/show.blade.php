@extends ('front.layout.app')

@section('content')

<!-- banner -->
@include ('front.components.top-banner-blog', [
  'class' =>  'workshop',
  'title' => 'Blog Article Title',
  'by' => 'Mafalda',
  'date' => '20 May 2018',
  'image' => 'front/img/photos/photo9.jpg',
])
<!-- banner -->

<section class="section">
  <div class="container">

    <article class="article">

      <h3 class="article__header title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

      <figure>
        <img src="{{asset('front/img/photos/photo11.jpg')}}" alt="">
        <figcaption><h6>Lorem ipsum dolor sit amet</h6></figcaption>
        <figcaption><span>2018 &copy; Lorem ipsum dolor sit</span></figcaption>
      </figure>

      <div class="editable text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h4>
      </div>

    </article>

  </div>

</section>

<!-- you may also like -->
@include ('front.components.teaser-section')
<!-- you may also like -->


<!-- highlighted products -->
@include ('front.components.highlighted-section-products')
<!-- highlighted products -->


@endsection
