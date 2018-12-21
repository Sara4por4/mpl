@extends ('front.layout.app')

@section('content')

<section class="section">
  <div class="container">
    @include ('front.components.section-header', [
    'subtitle' => 'Terms & Conditions',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    ])
  </div>
</section>

<div class="section__container">
  <div class="container">
    @php
      $topic = [];
      $topics = [];

      for($i = 0; $i<6; $i++){
        $topics[] = $topic;
      };
    @endphp

    <!-- accordion -->

    @foreach($topics as $topic)
    @include ('front.components.accordion', [
      'id' => '1',
      'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
    ])
    @endforeach
    <!-- accordion -->

  </div>
</div>

@endsection
