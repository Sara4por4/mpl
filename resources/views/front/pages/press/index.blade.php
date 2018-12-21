@extends ('front.layout.app')

@section('content')

<section class="section">
  <div class="container">
    @include ('front.components.section-header', [
    'subtitle' => 'Press',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    ])
  </div>
</section>

<div class="section__container">
  <div class="container">

    @php
      $card = [];
      $cards = [];

      for($i = 0; $i<4; $i++){
        $cards[] = $card;
      };
    @endphp

    <div class="workshops-list">
      <div class="row">

        @foreach($cards as $card)
        <div class="workshops-list__element col-xs-6">
          @include ('front.components.press-card', [
          'class' => 'press',
          'date' => '30 July 2018, Portugal',
          'title' => 'Nome da Revista',
          'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
          'image' => 'front/img/photos/photo5.jpg',
          ])
        </div>
        @endforeach

      </div>

    </div>

  </div>
</div>

<section class="section yellow-color">
  <div class="container">

    @include ('front.components.cta', [
      'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
    ])



  </div>
</section>

@endsection
