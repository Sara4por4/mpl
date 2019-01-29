<div class="topic">
   <div class="topic__img img-filter" style="background-image:url( {{$image}} )"></div>

   <div class="topic__wrapper">
      <div class="topic__caption">
         <h2 class="topic__title">{{$title}}</h2>

         <ul class="topic__list nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <li>
              <a class="nav-item nav-link active" id="nav-party-tab" data-toggle="tab" href="#nav-party" role="tab" aria-controls="nav-home" aria-selected="true">Party <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a class="nav-item nav-link" id="nav-corporate-tab" data-toggle="tab" href="#nav-corporate" role="tab" aria-controls="nav-corporate" aria-selected="false">Corporate <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-party" role="tab" aria-controls="nav-party" aria-selected="false">Wedding <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a class="nav-item nav-link" id="nav-party-tab" data-toggle="tab" href="#nav-party" role="tab" aria-controls="nav-party" aria-selected="false">Blogger Event <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a class="nav-item nav-link" id="nav-party-tab" data-toggle="tab" href="#nav-party" role="tab" aria-controls="nav-party" aria-selected="false">Home Project <span class="mdi mdi-trending-neutral"></span></a>
           </li>
         </ul>
      </div>
   </div>

</div>

@push('scripts')
<script>

   $(".topic__list #nav-party-tab").hover(function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo3.jpg)");
      }, function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo4.jpg)");
   });
   $(".topic__list #nav-corporate-tab").hover(function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo2.jpg)");
      }, function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo5.jpg)");
   });

</script>
@endpush
