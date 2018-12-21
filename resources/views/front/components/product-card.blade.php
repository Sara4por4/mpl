<div class="product-card product-card--{{$class}} {{$sale}}-sale">

  <a class="product-card__heart"></a>
  <div class="product-card__wrapper">
     <h4 class="product-card__new">new</h4>
     <h4 class="product-card__sale">sale</h4>
     <div class="product-card__img" style="background-image:url({{asset($image)}})"></div>

     <div class="product-card__hover">
        <div class="caption">
           <h3 class="product-card__title category">{{$title}}</h3>
           <a href="{{url($link)}}" class="link">Shop now</a>
        </div>
     </div>
  </div>

  <div class="product-card__caption">
    <h4 class="product-card__price text"><span>{{$oldprice}}€</span> {{$newprice}}€</h4>
    <h3 class="product-card__title category">{{$title}}</h3>
    <div class="small-text editable">
      {!! $text !!}
    </div>

    <a href="{{url($link)}}" class="link">Shop now <span class="icon icon--arrow-right"></span></a>


    <!-- QUANDO NÃO HÁ STOCK -->

    <!-- <button type="button" class="link" data-toggle="modal" data-target="#request">
      Email me when available
    </button> -->

    <!-- QUANDO NÃO HÁ STOCK -->

  </div>
</div>
