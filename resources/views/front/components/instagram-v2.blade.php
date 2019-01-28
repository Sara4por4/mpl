@php
 /*
    use Vinkla\Instagram\Instagram;

    $instagram = new Instagram('8376365949.1677ed0.27bad2656b7f4d53bb1b7971b61133aa');

    $images=$instagram->media();
    */
@endphp

<div class="instagram">

   @foreach ($images as $image)
   <div class="instagram__element">
      <a href="{{$image->link}}" target="_blank">
         <img src="front/img/icons/instagram-white.svg" alt="">
         <div class="instagram__img" style="background-image:url({{$image->images->standard_resolution->url}})"></div>
      </a>
   </div>
   @endforeach

</div>


@push('scripts')
<script>

$(document).ready(function () {


 $('.instagram').slick({
     dots: false,
     arrows: false,
     variableWidth: false,
     infinite: true,
     speed: 900,
     slidesToShow: 5,
     centerMode: true,
     centerPadding: '30px',
     fade: false,
     pauseOnHover: false,
     cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
     autoplay: true,
     responsive: [
     {
       breakpoint: 1200,
       settings: {
         slidesToShow: 3,
         slidesToScroll: 3,
       }
     },
     {
       breakpoint: 600,
       settings: {
         slidesToShow: 2,
         slidesToScroll: 2
       }
     }
   ]
   });

 });

 </script>
 @endpush
