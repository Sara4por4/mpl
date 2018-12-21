@extends ('front.layout.app')

@section('content')

<section class="section">
  <div class="container">

    @include ('front.components.section-header', [
    'subtitle' => 'Contact',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    ])

  </div>
</section>


<section class="section">
  <div class="container">

    <div class="section__container">

      <h4 class="category category--caps">Contact us</h4>
      <p class="tip small-text">*required question</p>

      @include ('front.forms.contacts')

    </div>

  </div>
</section>


@endsection
