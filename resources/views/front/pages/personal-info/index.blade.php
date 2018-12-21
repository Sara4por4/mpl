@extends ('front.layout.app')

@section('content')

<section class="section white-color">
  <div class="container">

     <div class="section__header">
      <h1 class="category">Personal Details</h1>
      <h3 class="title title--semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</h3>
     </div>

    <div class="section__container">
       <div class="user-intro">

         <div class="user-intro__division">
            <h4 class="category category--caps">- Addresses</h4>
         </div>

         <div class="row">

            <div class="col-sm-6">
               <h4 class="small-text small-text--caps">Shipping address</h4>

               <div class="user-intro__content">
                  <!-- form -->
                  @include ('front.forms.shipping-address')
                  <!-- form -->
               </div>
            </div>

            <div class="col-sm-6">
               <h4 class="small-text small-text--caps">Billing address</h4>

               <div class="user-intro__content">
                  <!-- form -->
                  @include ('front.forms.billing-address')
                  <!-- form -->
               </div>
            </div>

         </div>

         <!-- cancel subscription -->
         <div class="user-intro__wrap">
            <div class="user-intro__division">
               <h4 class="category category--caps">- Newsletter subscription</h4>
            </div>
            <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <form class="form form--cancel" action="index.html" method="post">
               <div class="form-group">
                  <label for="email1">Email (leave blank to lave unchanged)<span>*</span></label>
                  <input id="email1" type="email" name="" value="">
               </div>
               <div class="form__footer">
                 <button type="send" name="button" class="btn">Cancel subscription</button>
               </div>
            </form>

         </div>
         <!-- cancel subscription -->
      </div>
   </div>
</section>

@endsection
