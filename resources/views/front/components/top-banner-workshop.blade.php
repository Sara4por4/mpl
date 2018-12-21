<div class="banner banner--{{$class}}">

  <div class="banner__img" style="background-image:url({{asset($image)}})"></div>

  <div class="container">

    <div class="banner__caption">

      <ul class="breadcrumb">
        <li>
          <a class="category" href="{{url('workshops')}}">Workshops: My plant-based lesson</a>
        </li>
        <li class="active">
          <a class="category" href="#">{{$title}}</a>
        </li>
      </ul>

      <h1 class="big-title">{{$title}}</h1>
      <h2 class="banner__price subtitle">{{$price}}€</h2>

      <button type="button" name="button" class="banner__btn buy__btn btn">Add to cart<span>|</span>{{ $price }}€</button>

      <ul class="banner__tags tags-list">
        <li><a href="">{{ $tag }}</a></li>
        <li><a href="">{{ $tag }}</a></li>
      </ul>

    </div>

  </div>
</div>
