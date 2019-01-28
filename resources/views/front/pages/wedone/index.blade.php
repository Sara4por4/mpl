@extends ('front.layout.app')

@section('content')

<section class="section">
  <div class="container-fluid">

     <div class="services-list row">
        <div id="service-1" data-aos="fade-right" class="services-list__element col-sm-6">
          @include ('front.components.event-card', [
            'image' => 'front/img/photos/photo4.jpg',
            'title' => 'nome do evento',
            'subtitle' => 'localização',
          ])
        </div>
        <div id="service-2" data-aos="fade-left" class="services-list__element col-sm-6">
           @include ('front.components.event-card', [
           'image' => 'front/img/photos/photo3.jpg',
            'title' => 'nome do evento',
            'subtitle' => 'localização',
           ])
        </div>
        <div id="service-3" data-aos="fade-right" class="services-list__element col-sm-6">
          @include ('front.components.event-card', [
            'image' => 'front/img/photos/photo4.jpg',
            'title' => 'nome do evento',
            'subtitle' => 'localização',
          ])
        </div>
        <div id="service-4" data-aos="fade-left" class="services-list__element col-sm-6">
           @include ('front.components.event-card', [
           'image' => 'front/img/photos/photo3.jpg',
            'title' => 'nome do evento',
            'subtitle' => 'localização',
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
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>

AOS.init({
   delay: 300,
});
$('#service-1').magnificPopup({
    items: [
      {
        src: 'front/img/photos/photo4.jpg',
        title: 'Legenda'
      },
      {
         src: 'front/img/photos/photo2.jpg',
        title: 'Legenda'
      },
      {
         src: 'front/img/photos/photo1.jpg',
        title: 'Legenda'
      },
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
$('#service-2').magnificPopup({
    items: [
      {
        src: 'front/img/photos/photo4.jpg',
        title: 'Legenda'
      },
      {
         src: 'front/img/photos/photo2.jpg',
        title: 'Legenda'
      },
      {
         src: 'front/img/photos/photo1.jpg',
        title: 'Legenda'
      },
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
$('#service-3').magnificPopup({
    items: [
      {
        src: 'front/img/photos/photo4.jpg',
        title: 'Legenda'
      },
      {
         src: 'front/img/photos/photo2.jpg',
        title: 'Legenda'
      },
      {
         src: 'front/img/photos/photo1.jpg',
        title: 'Legenda'
      },
    ],
    gallery: {
      enabled: true
    },
    type: 'image' // this is a default type
});
</script>

@endpush
