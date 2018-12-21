@extends ('front.layout.app')

@section('content')

<section class="section white-color">
  <div class="container">

     <div class="section__header">
      <h1 class="category">Login</h1>
    </div>

    <div class="section__container">

      <div class="row">
         <div class="user-intro col-sm-6">
            <h3 class="user-intro__title title title--semibold">Já tem conta?</h3>
            <p class="subtitle subtitle--secondary">Só assim poderá acompanhar todas as fases da sua encomenda, processar trocas ou devoluçõess de forma mais rápida e simples, e ainda receber todas as novidades e promoções.</p>
            <div class="user-intro__content">
               <!-- form -->
               @include ('front.forms.login')
               <!-- form -->
            </div>
         </div>
         <div class="col-sm-6">

            <div class="cta-sign">
               <h3 class="cta-sign__title title tile--semibold">Ainda não tem conta?</h3>
               <p class="subtitle subtitle--secondary">Se ainda não tem uma conta não espere mais!</p>

               <div class="cta-sign__btn">
                  <a class="btn" href="register">Register</a>
               </div>
            </div>

         </div>

      </div>

      </div>
   </div>
</section>

@endsection
