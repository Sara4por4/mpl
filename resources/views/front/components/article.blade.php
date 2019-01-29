<article class="article">
   <div class="row">
      <div class="col-sm-6">
         <h1 class="article__title title title--extrabold">{{ $title }}</h1>
         <div class="text editable">
            {!! $text !!}
         </div>
      </div>
      <div class="col-sm-6">
         <div class="article__img" style="background-image:url({{ $image }})"></div>
      </div>
   </div>
</article>
