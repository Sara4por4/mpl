@extends ('front.layout.app')

@section('content')

<section class="section">
   <div class="container-fluid">

      @include('front.components.article', [
         'title' => 'about the wow effect agency',
         'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>',
         'image' => 'front/img/photos/photo2.jpg',
      ])

   </div>
</section>

<section class="section">
   <div class="container">

      <div class="section__header text-center">
         <h2 class="title">Why Portohost?</h2>
      </div>

      <div class="section__container">
         <div class="row values-list">
            <div class="col-sm-4 values-list__element">
               @include('front.components.value-card', [
               'title' => 'connect',
               'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
               ])
            </div>
            <div class="col-sm-4 values-list__element">
               @include('front.components.value-card', [
               'title' => 'customize',
               'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>',
               ])
            </div>
            <div class="col-sm-4 values-list__element">
               @include('front.components.value-card', [
               'title' => 'innovate',
               'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>',

               ])
            </div>
         </div>
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
<script src="{{asset('front/plugins/slick/slick.min.js')}}"></script>
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
