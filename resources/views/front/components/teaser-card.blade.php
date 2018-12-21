<div class="teaser-card teaser-card--{{$class}} clearfix" id="section-{{$id}}">

    <div class="teaser-card__figure">
      <div class="teaser-card__image-wrapper">
        <div class="teaser-card__image" style="background-image:url({{asset($image)}})"></div>
        <div class="teaser-card__subtitles">
          <h6>{{$subtitles}}</h6>
          <h4 class="teaser-card__copy">{{$copy}}</h4>
        </div>
      </div>
    </div>

    <div class="teaser-card__caption">
      <h4 class="category">{{$subtitle}}</h4>
      <h3 class="teaser-card__title big-title">{{ $title }}</h3>
      <div class="teaser-card__text text editable">
        {!! $text !!}
      </div>
      <!-- tags -->
      <ul class="teaser-card__tags-list tags-list">
        <li><a href="">{{ $tag }}</a></li>
        <li><a href="">{{ $tag }}</a></li>
      </ul>
      <!-- tags -->

      <!-- não aparece na pag abc-detail -->
      <a href="{{url($link)}}" class="link">{{$linkname}} <span class="icon icon--arrow-right"></span></a>
      <!-- não aparece na pag abc-detail -->

      <h6 class="teaser-card__info">{{$info}}</h6>

      <a href="#section-{{$id + 1}}" id="scrolldown" class="teaser-card__scrolldown icon icon--arrow-down"></a>
    </div>


</div>
