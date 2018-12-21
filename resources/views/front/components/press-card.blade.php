<div class="product-card product-card--{{$class}}">

  <figure class="product-card__img">
    <img src="{{asset($image)}}" alt="">
  </figure>

  <div class="product-card__caption">
    <h3 class="product-card__title category category--caps">{{$title}}</h3>
    <h4 class="product-card__date">{{$date}}</h4>
    <div class="small-text editable">
      {!! $text !!}
    </div>
  </div>

</div>
