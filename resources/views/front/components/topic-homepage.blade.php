<div class="topic">
   <div class="topic__img img-filter" style="background-image:url( {{$image}} )"></div>

   <div class="topic__wrapper">
      <div class="topic__caption">
         <h2 class="topic__title">{{$title}}</h2>

         <ul class="topic__list">
            <li>
              <a href="{{ $link }}">Party <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a href="{{ $link }}">Corporate <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a href="{{ $link }}">Wedding <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a href="{{ $link }}">Blogger Event <span class="mdi mdi-trending-neutral"></span></a>
           </li>
           <li>
              <a href="{{ $link }}">Home Project <span class="mdi mdi-trending-neutral"></span></a>
           </li>
         </ul>
      </div>
   </div>

</div>

@push('scripts')
<script>

   $(".topic__list #1 a").hover(function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo3.jpg)");
      }, function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo4.jpg)");
   });
   $(".topic__list #2 a").hover(function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo2.jpg)");
      }, function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo5.jpg)");
   });
   $(".topic__list #3 a").hover(function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo1.jpg)");
      }, function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo6.jpg)");
   });
   $(".topic__list #4 a").hover(function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo3.jpg)");
      }, function(){
      $('.active .topic__img').css("background-image", "url(front/img/photos/photo2.jpg)");
   });

</script>
@endpush
