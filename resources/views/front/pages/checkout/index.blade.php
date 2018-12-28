@extends ('front.layout.app')

@section('content')

<section class="section white-color">
  <div class="container">

     <div class="section__header">
      <h1 class="category">Checkout</h1>
      <h3 class="title title--semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</h3>
     </div>

       <div class="section__container">
         <div class="user-intro">
           @include ('front.components.widget')

             @include ('front.components.checkout')

        </div>
      </div>
   </div>
</section>

@endsection
