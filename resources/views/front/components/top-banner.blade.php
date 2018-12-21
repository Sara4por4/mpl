<div class="banner banner--{{$class}}">

  <div class="banner__img" style="background-image:url({{asset($image)}})"></div>

  <div class="container">

    <div class="banner__caption">
      <h4 class="category">{{$subtitle}}</h4>
      <h2 class="big-title">{{$title}}</h2>
      <div class="banner__text text editable">
        {!! $text !!}
     </div>
      <h4 class="banner__author">{{$by}}</h4>

      <!-- não tem link na pag about -->
      <a href="{{url($link)}}" class="link">Learn more <span class="icon icon--arrow-right"></span></a>
      <!-- não tem link na pag about -->
    </div>

  </div>
</div>
