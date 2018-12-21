<div class="banner banner--{{$class}}">

  <div class="banner__img" style="background-image:url({{asset($image)}})"></div>

  <div class="container">

    <div class="banner__caption">

      <h4 class="category">{{$category}}</h4>
      <h1 class="big-title">{{$title}}</h1>

      <div class="text editable">
        {{ $text }}
      </div>

    </div>

  </div>
</div>
