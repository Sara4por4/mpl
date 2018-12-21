<div class="product-card product-card--{{$class}}">

  <div class="product-card__img" onclick="location.href='{{url($link)}}'" style="background-image:url({{asset($image)}})"></div>

  <div class="product-card__caption">
    <h4 class="product-card__date category">{{$date}}</h4>
    <h3 class="product-card__title title">{{$title}}</h3>
    <p class="product-card__by">by {{$author}}</p>
    <div class="small-text editable">
      {!! $text !!}
    </div>

    <a href="{{url($link)}}" class="link">Read more <span class="icon icon--arrow-right"></span></a>
  </div>

</div>
