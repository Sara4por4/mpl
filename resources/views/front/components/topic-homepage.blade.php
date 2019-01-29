<div class="topic">
   <div class="topic__img img-filter" style="background-image:url( {{$image}} )"></div>

   <div class="topic__wrapper">
      <div class="topic__caption">
         <h2 class="topic__title">{{$title}}</h2>

         <ul class="topic__list">
            <li>
              <a id="nav-party-tab" href="{{ $link }}">Party <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a id="nav-corporate-tab" href="{{ $link }}">Corporate <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a id="nav-party-tab" href="{{ $link }}">Wedding <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a id="nav-party-tab" href="{{ $link }}">Blogger Event <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a id="nav-party-tab" href="{{ $link }}">Home Project <span class="mdi mdi-trending-neutral"></span></a>
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
