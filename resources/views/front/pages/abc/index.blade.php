@extends ('front.layout.app')

@section('content')

<section class="section">

  <div class="container">
    @include ('front.components.section-header', [
    'subtitle' => 'ABC: MPLglossary from A to Z',
    'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    ])
  </div>

  <!-- categories -->
  @include ('front.forms.filter')
  <!-- categories -->

</section>

@php
  $col = [];
  $cols = [];

  for($i = 0; $i<9; $i++){
    $cols[] = $col;
  };
@endphp

<div class="section">
  <div class="container">

    <div class="section__container">
      <div class="abc-list row">

        @foreach($cols as $col)
        <div class="abc-list__element abc-card col-md-2 col-sm-4 col-xs-6">
          <h3 class="category">A</h3>
          <ul>
            <li>
              <a href="{{url('abc-detail')}}">Lorem ipsum dolor sit amet</a>
            </li>
            <li class="select">
              <a href="{{url('abc-detail')}}">Lorem ipsum dolor sit amet</a>
            </li>
            <li>
              <a href="{{url('abc-detail')}}">Lorem ipsum dolor sit amet</a>
            </li>
            <li class="select">
              <a href="{{url('abc-detail')}}">Lorem ipsum dolor sit amet</a>
            </li>
          </ul>
        </div>
        @endforeach

      </div>
    </div>

  </div>
</div>

@endsection

@push('scripts')
<script>

// eu sei que isto está uma palhaçada mas o mister filipe tem de ajudar e não se encontra aqui
$( ".form--select input" ).click(function(){

  $(".abc-list__element li").filter(".select").addClass('alive').removeClass('dead');

  $(".abc-list__element li").addClass('dead');

})

</script>
@endpush
