<div class="review-card">

  <h4 class="review-card__title category">Write a review</h4>

  <div class="review-card__rating row">
    <div class="col-xs-6">
      <h4 class="review-card__subtitle category">Your rating</h4>
      <p class="tip small-text">*required question</p>
    </div>
    <div class="review-card__stars col-xs-6">
      <!-- Begin:Rating Stars Box -->
      <div class='rating-stars'>
        <ul id='stars'>
          <li class='star' title='Poor' data-value='1'>
            <i class='icon icon--star-outline'></i>
          </li>
          <li class='star' title='Fair' data-value='2'>
            <i class='icon icon--star-outline'></i>
          </li>
          <li class='star' title='Good' data-value='3'>
            <i class='icon icon--star-outline'></i>
          </li>
          <li class='star' title='Excellent' data-value='4'>
            <i class='icon icon--star-outline'></i>
          </li>
          <li class='star' title='WOW!!!' data-value='5'>
            <i class='icon icon--star-outline'></i>
          </li>
        </ul>

        <!-- tip -->
        <div class='success-box'>
          <div class='clearfix'></div>
          <div class='text-message'></div>
          <div class='clearfix'></div>
        </div>
        <!-- tip -->
        
      </div>
      <!-- End: Rating Stars Box -->

    </div>
  </div>


  @include ('front.forms.review-form')

</div>
