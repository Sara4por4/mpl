@extends ('front.layout.app')

@section('content')

<section class="section">
  <div class="container">

     <div class="topics clearfix">
        <div class="topics__element active">
           @include ('front.components.topic', [
             'image' => 'front/img/photos/photo6.jpg',
             'title' => 'events',
            ])
        </div>
        <div class="topics__element">
           @include ('front.components.topic', [
             'image' => 'front/img/photos/photo5.jpg',
             'title' => 'people',
            ])
        </div>
     </div>
  </div>
</section>

<section class="section">
  <div class="container container--shrink">

     <div class="section__container tab-content">
        <article class="article tab-pane show active"  id="nav-party" role="tabpanel" aria-labelledby="nav-party-tab">
           <h2 class="article__title subtitle subtitle--extrabold">Party</h2>
           <div class="article__caption text editable">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
        </article>
        <article class="article tab-pane"  id="nav-corporate" role="tabpanel" aria-labelledby="nav-corporate-tab">
           <h2 class="article__title subtitle subtitle--extrabold">Corporate</h2>
           <div class="article__caption text editable">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
        </article>
     </div>

  </div>
</section>


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


@push('scripts')
<script>

$(document).ready(function () {


$(function() {
     $(".topics__element").click(function() {
        $('.topics__element').removeClass( "active" );
         $(this).addClass( "active" );
      });
   });
});

</script>
@endpush
