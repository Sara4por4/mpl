@extends ('front.layout.app')

@section('content')

<section class="section white-color">
  <div class="container">
     <div class="section__header">
      <h1 class="category">My Workshops</h1>
      <h3 class="title title--semibold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</h3>
    </div>
    <a href="myworkshops"><span class="icon icon--arrow-left"></span> Back to workshops</a>
  </div>

  <hr class="divider">

  <div class="container">
       <div class="section__container">
        <div class="row">
          <div class="col-sm-4">
            <div class="summary__header">
              <h4 class="category category--caps">Date enrolled</h4>
              <p class="summary__date">22/02/18</p>
            </div>
            <div class="summary__overview">
              <h4 class="summary__overview-title">Workshop Overview</h4>
              <ul class="summary__list">
                <li>
                  <h4 class="summary__list-title text">1. Introduction</h4>
                  <p><span class="icon icon--doc"></span>PDF</p>
                  <ul>
                    <li>
                      <h4 class="summary__list-title text">1.1 Lorem ipsum</h4>
                      <p><span class="icon icon--video"></span>Video</p>
                    </li>
                  </ul>
                </li>
                <li>
                  <h4 class="summary__list-title text">2. Lorem ipsum</h4>
                  <p><span class="icon icon--doc"></span>Exercise</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="workshop-container">

              <div class="workshop-container__header">
                <h4 class="category category--caps">Lorem ipsum dolor sit amet</h4>
                <div class="text text--secondary">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
              </div>
              <div class="workshop-container__content">
                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/_ZdsmLgCVdU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>

            </div>
          </div>
        </div>
      </div>
   </div>
</section>

@endsection
