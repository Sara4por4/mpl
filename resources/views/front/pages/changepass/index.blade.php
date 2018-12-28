@extends ('front.layout.app')

@section('content')

<section class="section white-color">
  <div class="container">

    <div class="section__header">
      <h1 class="category">Change your password</h1>
    </div>

    <div class="section__container">

      <div class="row">
         <div class="user-intro col-sm-6">
            <h3 class="user-intro__title title title--semibold">Deseja mudar a sua pass?</h3>
            <p class="subtitle subtitle--secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
            <div class="user-intro__content">
               <!-- form -->
               @include ('front.forms.changepass')
               <!-- form -->
            </div>
         </div>
         

      </div>

      </div>
   </div>
</section>

@endsection
