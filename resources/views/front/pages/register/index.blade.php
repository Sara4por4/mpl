@extends ('front.layout.app')

@section('content')

<section class="section white-color">
  <div class="container">

     <div class="section__header">
      <h1 class="category">Register</h1>
    </div>

    <div class="section__container">

      <div class="row">
         <div class="user-intro col-sm-6">
            <h3 class="user-intro__title title tile--semibold">Register</h3>
            <p class="subtitle subtitle--secondary">É obrigatório registar-se para efetuar uma encomenda. Desta forma conseguirá acompanhar todas as fases da compra efetuada.</p>
            <div class="user-intro__content register">
               <!-- form -->
               @include ('front.forms.register')
               <!-- form -->
            </div>
         </div>

      </div>

      </div>
   </div>
</section>

@endsection
