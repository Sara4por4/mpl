@extends ('front.layout.app')

@section('content')

<section class="section">
  <div class="container">
    @include ('front.components.section-header', [
    'subtitle' => 'Journal: My personal Lifestyle',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    ])
  </div>

  <!-- categories -->
  @include ('front.forms.filter')
  <!-- categories -->

</section>
<div class="wrapper">

<!-- banner -->
@include ('front.components.top-banner', [
'class' =>  'promotion',
'text' =>  '',
'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.',
'subtitle' => '9 September 2018',
'image' => 'front/img/photos/photo8.jpg',
'by' => 'Mafalda',
'link' => '',
])
<!-- banner -->

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
          @include ('front.components.journal-card', [
          'class' => 'journal',
          'author' => 'Mafalda Pinto Leite',
          'date' => '30 July 2018',
          'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
          'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
          'image' => 'front/img/photos/photo5.jpg',
          'link' => 'journal-detail',
          ])
        </div>
        @endforeach

      </div>

    </div>

  </div>
</div>
</div>

@endsection
