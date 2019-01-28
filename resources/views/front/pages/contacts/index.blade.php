@extends ('front.layout.app')

@section('content')

<section class="section">
   <div class="container">

         <div class="row contacts-list">
            <div class="col-md-4 contacts-list__element">
               @include('front.components.contact-card', [
                  'title' => 'General',
                  'subtitle' => 'Want us to organize your event? Can we help you with any of our services?',
                  'text' => 'Awesome! Tell us all about your vision!',
                  'contact' => '000 000 000',
                  'email' => 'info@portohost.pt',
               ])
            </div>
            <div class="col-md-4 contacts-list__element">
               @include('front.components.contact-card', [
               'title' => 'Francisca',
               'subtitle' => 'Want us to organize your event? Can we help you with any of our services?',
               'text' => 'Francisca and tell her all about your wow effect!',
               'contact' => '000 000 000',
               'email' => 'francisca@portohost.pt',
               ])
            </div>
            <div class="col-md-4 contacts-list__element">
               @include('front.components.contact-card', [
               'title' => 'Mafalda',
               'subtitle' => 'Is it marketing or PR related? Then let...',
               'text' => 'Mafalda knows what you are looking for!',
               'contact' => '000 000 000',
               'email' => 'mafalda@portohost.pt',
               ])
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
