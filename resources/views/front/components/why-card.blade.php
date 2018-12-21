<div class="product-card product-card--{{$class}}">

  <h3 class="product-card__info title">{{$info}}</h3>

  <div class="product-card__img" style="background-image:url({{asset($image)}})"></div>

  <div class="product-card__caption">
    <h3 class="product-card__title category category--caps">{{$title}}</h3>
    <div class="small-text editable">
      {!! $text !!}
    </div>
  </div>

</div>
