@extends ('front.layout.app')

@section('content')

<section class="section">
  <div class="container">
    @include ('front.components.section-header', [
    'subtitle' => 'Workshops',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    ])
  </div>

  <!-- categories -->
  @include ('front.forms.filter')
  <!-- categories -->

</section>

<div class="wrapper">
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
          @include ('front.components.product-card', [
          'sale' => 'yes',
          /* quando for novo
          'sale' => 'new',
           quando for novo */
          'class' => 'workshop',
          'oldprice' => '35',
          'newprice' => '28',
          'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
          'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur.</p>',
          'image' => 'front/img/photos/photo5.jpg',
          'link' => 'workshops-detail',
          ])
        </div>
        @endforeach

      </div>

    </div>

  </div>
</div>
</div>

@endsection

@push('scripts')
<script>


$( ".product-card__heart" ).click(function() {
  $(this).toggleClass('active');
});

</script>
@endpush
