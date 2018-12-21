@extends ('front.layout.app-landing')

<!-- navbar -->
<nav class="navbar navbar--landing">
   <div class="container">
      <div class=" row">
         <div class="col-xs-7 col-sm-6">
            <!-- Brand -->
            <div class="app-logo navbar__logo navbar-brand">
               <a>Mafalda Pinto Leite</a>
            </div>
            <!-- Brand -->
         </div>

         <div class="col-xs-5 col-sm-6">
            <!-- social -->
            <ul class="social-list pull-right">
               <li>
                  <a class="icon icon--youtube" href="https://www.youtube.com/mpldaily" target="_blank"></a>
               </li>
               <li>
                  <a class="icon icon--facebook" href="https://www.facebook.com/mpldaily" target="_blank"></a>
               </li>
               <li>
                  <a class="icon icon--instagram" href="https://www.instagram.com/MPLdaily/" target="_blank"></a>
               </li>
            </ul>
            <!-- social -->
         </div>
      </div>

   </div>
</nav>
<!-- navbar -->
<div class="banner banner--top">
  <div class="banner__img" style="background-image:url(front/img/photos/photo1.jpg)"></div>

  <div class="container">

    <div class="banner__caption">
      <h4 class="category">Join our newsletter</h4>
      <h2 class="big-title">Be the FIRST to be notified when my full website becomes available!</h2>
      <button type="button" name="button" class="btn">Send me <span class="icon icon--arrow-right"></span></button>
    </div>

  </div>
</div>


<section class="section-landing">
   <div class="container">

      <div class="section__title">
         <h2 class="section-landing__title">MPL’daily, is an inspirational platform that helps Women nourish their mind, heart and soul.</h2>
      </div>

      <div class="section__container">
         <p class="title">Our purpose is to empower Women to turn within for the answers they seek, giving them the creative tools and resources to do so. If becoming Whole is what you are looking for the answer lies within and we are here to guide you to live a more authentic clever existence.</p>
      </div>
   </div>

   <div class="banner">
      <div class="banner__img parallax" style="background-image:url(front/img/photos/photo15.jpg)"></div>
   </div>

</section>

<section class="section-landing">

   <div class="container">
      <div class="section__header">
         <h4 class="category">Transformational Workshops</h4>
         <h3 class="section-landing__subtitle semibold">Online workshops centred on empowering you with tools and resources to help guide you back to your WHOLE Self. Inspiring you to delve within for the answers, to nurture your dreams, and to intentionally release old patterning, old behavior and karma that holds you back from living fully in your truth. The more you commit, the more aligned, abundant and transformed your life will be.</h3>
      </div>

      <div class="section__container">

       <div class="workshop-list">
         <div class="row">
            <!-- workshop -->
           <div class="workshops-list__element col-sm-6">
             @include ('front.components.landing-card', [
             'class' => 'product',
             'title' => 'The love blueprint',
             'text' => '<p>To be seen and accepted for who we truly are is our utmost desire. In this workshop, you will fully embody true intimacy and connection with another, by becoming deeply intimate with ourselves, accepting all aspects of who we are along with reconnecting with our full potential. Only there can we aspire to encompass an authentic relationship and true affinity with another.</p>',
             'image' => 'front/img/photos/WKS_LOVE.jpg',
             'link' => 'https://tictail.com/dashboard/store/mpldaily/products/love-blueprint',
             ])
           </div>
           <!-- workshop -->
            <!-- workshop -->
           <div class="workshops-list__element col-sm-6">
             @include ('front.components.landing-card', [
             'class' => 'product',
             'title' => 'The abundance blueprint',
             'text' => '<p>In this workshop you will learn how to consciously master your relationship with money. Deconditioning the way you show up so you can live an empowered life and tap into the abundance of money. Through the purposeful realigning with your true beliefs, expanding your worth, activating your magnetism, redefining your power you will create an easier and, a more integrated way, to achieve wealth.</p>',
             'image' => 'front/img/photos/WKS_ABUNDANCE.jpg',
             'link' => 'https://tictail.com/dashboard/store/mpldaily/products/abundance-blueprint',
             ])
           </div>
           <!-- workshop -->
            <!-- workshop -->
           <div class="workshops-list__element col-sm-6">
             @include ('front.components.landing-card', [
             'class' => 'product',
             'title' => 'The purpose blueprint',
             'text' => '<p>In this workshop you will unearth and unfold your truest auhentic self and effortlessly evolve into your most purposeful life. you will learn all about reprogramming your subconscious as a way to increase your awareness, your magnetism and the entire manifestation process. Through creativity, flow and transformation you will overcome all the beliefs that are limiting you to unleash your true purpose and uncap the expression of your true destiny.</p>',
             'image' => 'front/img/photos/WKS_PURPOSE.jpg',
             'link' => 'https://tictail.com/dashboard/store/mpldaily/products/purpose-blueprint',
             ])
           </div>
           <!-- workshop -->
            <!-- workshop -->
           <div class="workshops-list__element col-sm-6">
             @include ('front.components.landing-card', [
             'class' => 'product',
             'title' => 'The thrive blueprint',
             'text' => '<p>In this workshop you will learn how to infuse your being with renewed vital energy tapping into your inner divinity so you can manifest your best authentic life. This life force not only animates your physical being but opens your mind and activates your emotions. In this expansive energy you will stimulate your body innate powers to heal, thrive and become a magnet, empowering your manifestation process.</p>',
             'image' => 'front/img/photos/WKS_THRIVE.jpg',
             'link' => 'https://tictail.com/dashboard/store/mpldaily/products/thrive-blueprint',
             ])
           </div>
           <!-- workshop -->
            <!-- workshop -->
           <div class="workshops-list__element col-sm-6">
             @include ('front.components.landing-card', [
             'class' => 'product',
             'title' => 'The evolve blueprint',
             'text' => '<p>This workshop will lead you on a profound exploration of what is holding you back and how to enter your deepest connection with yourself and your relationships. You will acquire a heightened state of awareness and insight that leads to a greater sense of self, empowerment and clarity.</p>',
             'image' => 'front/img/photos/WKS_ENVOLVE.jpg',
             'link' => 'https://tictail.com/dashboard/store/mpldaily/products/evolve-blueprint',
             ])
           </div>
           <!-- workshop -->
            <!-- workshop -->
           <div class="workshops-list__element col-sm-6">
             @include ('front.components.landing-card', [
             'class' => 'product',
             'title' => 'The awaken blueprint',
             'text' => '<p>In this workshop you will discover the tools, strategies and inspiration, that will wake you from a lifetime of family and cultural conditioning, and will rekindle your intuition, letting your light shine through. Awakening your intuition and aligning you with the flow so become your most magnetic and authentic Self possible.</p>',
             'image' => 'front/img/photos/WKS_AWAKEN.jpg',
             'link' => 'https://tictail.com/dashboard/store/mpldaily/products/awaken-blueprint',
             ])
           </div>
           <!-- workshop -->

         </div>
       </div>

     </div>
   </div>
</section>

<!-- footer -->
<div class="page-footer page-footer--landing">

    <footer>

      <div class="container">

         <div class="page-footer__top row">

            <div class="col-sm-4">
              <!-- brand -->
              <div class="page-footer__logo app-logo">
                <a>Mafalda Pinto Leite</a>
              </div>
              <h4 class="page-footer__quote">Inspiring women to nourish their body, mind and spirit. All day everyday.</h4>
              <!-- brand -->
            </div>

            <div class="col-sm-8 col-xs-12">
               <!-- social -->
               <ul class="social-list">
                  <li>
                     <a class="icon icon--youtube" href="https://www.youtube.com/mpldaily" target="_blank"></a>
                  </li>
                  <li>
                     <a class="icon icon--facebook" href="https://www.facebook.com/mpldaily" target="_blank"></a>
                  </li>
                  <li>
                     <a class="icon icon--instagram" href="https://www.instagram.com/MPLdaily/" target="_blank"></a>
                  </li>
               </ul>
               <!-- social -->
               <h4 class="small-text">All rights reserved 2018</h4>
            </div>

         </div>
      </div>

      <!-- newsletter -->
      <div class="newsletter-landing">
         <div class="container">
            <div class="row">
               <div class="newsletter-landing__col col-sm-5">
                  <p>Subscribe - Receive products updates and special offers.</p>
               </div>
               <div class="newsletter-landing__col col-sm-7">
                  <form class="form form--newsletter clearfix" action="index.html" method="post">
                     <input id="newsletter" type="email" placeholder="Email" value="">
                     <button type="submit" name="button" class="icon icon--arrow-right"></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- newsletter -->

      </footer>

   </div>
</div>
<!-- footer -->
