<div class="banner banner--{{$class}}">

  <div class="banner__img" style="background-image:url({{asset($image)}})"></div>

  <div class="container">

    <div class="banner__caption">

      <ul class="breadcrumb">
        <li>
          <a class="category" href="{{url('workshops')}}">Journal</a>
        </li>
        <li>
          <a class="category" href="{{url('workshops')}}">Category 123</a>
        </li>
        <li class="active">
          <a class="category" href="#">{{$title}}</a>
        </li>
      </ul>

      <h1 class="big-title">{{$title}}</h1>
      <h2 class="banner__author subtitle">{{$by}}</h2>

      <h4 class="banner__date">{{$date}}</h4>

    </div>

  </div>
</div>
