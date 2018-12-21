<div class="product-card product-card--{{$class}}">

  <div class="product-card__img" style="background-image:url({{asset($image)}})" onclick="location.href='{{url($link)}}'"></div>

  <div class="product-card__caption">
    <h3 class="product-card__title category">{{$title}}</h3>
    <div class="small-text editable">
      {!! $text !!}
    </div>

    <a href="{{url($link)}}" target="_blank" class="link">Shop now <span class="icon icon--arrow-right"></span></a>
  </div>

</div>
