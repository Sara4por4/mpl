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
           <div class="cart-widget row">
             <div class="col-sm-4">
               <div class="cart-widget__step">
                 <h4>1</h4>
                 <h4>Review Order</h4>
               </div>
             </div>
             <div class="col-sm-4">
               <div class="cart-widget__step active">
                 <h4>2</h4>
                 <h4>Payment & Shipping</h4>
               </div>
             </div>
             <div class="col-sm-4">
               <div class="cart-widget__step">
                 <h4>3</h4>
                 <h4>Checkout</h4>
               </div>
             </div>
           </div>


          @include ('front.components.checkout-2')

        </div>
      </div>
   </div>
</section>

@endsection
