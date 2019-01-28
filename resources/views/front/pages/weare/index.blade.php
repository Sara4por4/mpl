@extends ('front.layout.app')

@section('content')

<div class="section">
  <div class="container-fluid">

     <div class="section__header">
        <h2 class="title text-left">#herewedowhatwelove</h2>
        <h2 class="title text-right">#weknowhowtoparty</h2>
     </div>

     <div class="section__container">
        <div class="row article-list">

           <div class="col-sm-6 article-list__element">
             @include('front.components.card-about', [
               'title' => 'Francisca Sapage Amorim',
               'subtitle' => 'our founder and a pretty cool chick if you ask us',
               'intro' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>',
               'text' => '<ul><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li><li> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li></ul>',
             ])
           </div>
           <div class="col-sm-6 article-list__element">
             @include('front.components.card-about', [
               'title' => 'Mafalda Ortigão de Oliveira',
               'subtitle' => 'our brand strategist visionary',
               'intro' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>',
               'text' => '<ul><li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li><li> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li></ul>',
             ])
           </div>

        </div>
     </div>

  </div>
</div>


<div class="section">
  <div class="container-fluid">

   @include('front.components.cta', [
   'title' => 'Are you one of us? Do you want to be part of the team?',
   'link' => 'contacts',
   'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>',
   ])

  </div>
</div>

<section class="section">
   <div class="section__header text-center">
      <h3 class="title">#thewoweffectagency</h3>
   </div>

   <!-- instagram -->
   <!-- include('front.components.instagram-v2') -->
   <!-- instagram -->

   <div class="container-fluid">

   <div class="instagram">
      <div class="row">

         <div class="col-sm-3">
            <div class="instagram__element">
               <a href="" target="_blank">
                  <img src="front/img/icons/instagram-white.svg" alt="">
                  <div class="instagram__img" style="background-image:url(front/img/photos/photo1.jpg)"></div>
               </a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="instagram__element">
               <a href="" target="_blank">
                  <img src="front/img/icons/instagram-white.svg" alt="">
                  <div class="instagram__img" style="background-image:url(front/img/photos/photo1.jpg)"></div>
               </a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="instagram__element">
               <a href="" target="_blank">
                  <img src="front/img/icons/instagram-white.svg" alt="">
                  <div class="instagram__img" style="background-image:url(front/img/photos/photo1.jpg)"></div>
               </a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="instagram__element">
               <a href="" target="_blank">
                  <img src="front/img/icons/instagram-white.svg" alt="">
                  <div class="instagram__img" style="background-image:url(front/img/photos/photo1.jpg)"></div>
               </a>
            </div>
         </div>

      </div>
   </div>
   </div>

</section>
@endsection
