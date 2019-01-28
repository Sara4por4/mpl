<div class="topic">
   <div class="topic__img img-filter" style="background-image:url( {{$image}} )"></div>

   <div class="topic__caption">
      <h2 class="topic__title">{{$title}}</h2>
   </div>
   <ul class="topic__list">
      <li class="active" id="1">
         <a href="{{ $link }}">party <span class="mdi mdi-trending-neutral"></span></a>
      </li>
      <li id="2">
         <a href="{{ $link }}">corporate <span class="mdi mdi-trending-neutral"></span></a>
      </li>
      <li id="3">
         <a href="{{ $link }}">wedding <span class="mdi mdi-trending-neutral"></span></a>
      </li>
      <li id="4">
         <a href="{{ $link }}">home project <span class="mdi mdi-trending-neutral"></span></a>
      </li>
      <li id="5">
         <a href="{{ $link }}">blogger event <span class="mdi mdi-trending-neutral"></span></a>
      </li>
   </ul>

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
