<div class="product-detail">
  <div class="row">

    <div class="col-sm-6">
       <div class="product-detail__slideshow">
         @include ('front.components.product-slideshow', [
         'image' => 'front/img/photos/photo10.jpg',
         ])
       </div>
    </div>

    <div class="col-sm-6">
       <div class="product-detail__info">
         <header>
           <h4 class="subtitle">{{$category}}</h4>
           <h2 class="big-title">{{$title}}</h2>
           <h6>Size: {{$size}}</h6>
           <p class="subtitle product-detail__price">{{$price}}€</p>
         </header>

         <div class="minusplusnumber">
           <div class="mpbtn minus" @click="removeOne(product.id)">-</div>
           <div id="field_container">
             <input type="number" :value="product.qty" disabled />
           </div>
           <div class="mpbtn plus" @click="addOne(product.id)">+</div>
         </div>

         <button type="button" name="button" class="buy__btn btn">Add to cart<span>|</span>85€</button>

         <div class="product-detail__text editable text">
           {!! $text !!}
         </div>

         <ul class="product-detail__info-list">
            <li>
               <h4 class="subtitle">How to use</h4>
               <p class="small-text">{{$howtouse}}<p>
            </li>
            <li>
               <h4 class="subtitle">Key Ingredients</h4>
               <p class="small-text">{{$keyingredients}}<p>
            </li>
            <li>
               <h4 class="subtitle">Ingredients</h4>
               <p class="small-text">{{$ingredients}}<p>
            </li>
            <li>
               <h4 class="subtitle">Key benefits</h4>
               <ul class="benefits-list">
                  <li class="product-detail__benefits benefits-list__element">
                     <figure>
                        <img src="{{ asset($img) }}" alt="">
                     </figure>
                     <figcaption class="small-text">{{$benefits}}</figcaption>
                  </li>
                  <li class="product-detail__benefits benefits-list__element">
                     <figure>
                        <img src="{{ asset($img) }}" alt="">
                     </figure>
                     <figcaption class="small-text">{{$benefits}}</figcaption>
                  </li>
               </ul>
            </li>
         </ul>

         <ul class="tags-list product-detail__tags">
           <li><a href="">{{$tag}}</a></li>
           <li><a href="">{{$tag}}</a></li>
         </ul>

       </div>
    </div>

  </div>
</div>
