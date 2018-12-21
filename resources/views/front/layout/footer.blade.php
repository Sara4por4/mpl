<div class="page-footer">
  <div class="container">

    <footer>

      <div class="page-footer__top row">

        <div class="col-sm-3">
          <!-- brand -->
          <div class="page-footer__logo app-logo">
            <a href="{{url("/")}}">Mafalda Pinto Leite</a>
          </div>
          <h4 class="page-footer__quote">Inspiring women to nourish their body, mind and spirit. All day everyday.</h4>
          <!-- brand -->

          <!-- newsletter -->
          <form class="page-footer__newsletter form form--newsletter clearfix" action="index.html" method="post">
            <label for="newsletter">Subscribe to our newsletter</label>
            <input id="newsletter" type="email" name="newsletter" value="">
            <button type="submit" name="button" class="icon icon--arrow-right"></button>
          </form>
          <!-- newsletter -->
        </div>

        <div class="col-sm-3 page-footer__menu">
          <!-- menu -->
          <ul>
            <li>
              <a href="{{url('/new')}}">New? Start here</a>
            </li>
            <li>
              <a href="{{url('/workshops')}}">Workshops</a>
            </li>
            <li>
              <a href="{{url('/shop')}}">Shop</a>
            </li>
            <li>
              <a href="{{url('/journal')}}">Journal</a>
            </li>
            <li>
              <a href="{{url('/abc')}}">Abc</a>
            </li>
            <li>
              <a href="{{url('/curated')}}">Curated</a>
            </li>
            <li>
              <a href="{{url('/about-mpl')}}">About</a>
            </li>
            <li>
              <a href="{{url('/contacts')}}">Contacts</a>
            </li>
          </ul>
          <!-- menu -->
        </div>
        <div class="col-sm-3 page-footer__menu">
          <!-- menu -->
          <ul>
            <li>
              <a href="{{url('/footer-page')}}">FAQs</a>
            </li>
            <li>
              <a href="{{url('/footer-page')}}">Informations</a>
            </li>
            <li>
              <a href="{{url('/footer-page')}}">Terms and Conditions</a>
            </li>
            <li>
              <a href="{{url('/footer-page')}}">Shipping</a>
            </li>
            <li>
              <a href="{{url('/footer-page')}}">Returns and Exchanges</a>
            </li>
            <li>
              <a href="{{url('/footer-page')}}">Privacy Policy</a>
            </li>
            <li>
              <a href="{{url('/')}}">My account</a>
            </li>
          </ul>
          <!-- menu -->
        </div>
        <div class="col-sm-3">
          <!-- social -->
          <ul class="page-footer__social social-list">
            <li>
              <a class="icon icon--youtube" href="" target="_blank"></a>
            </li>
            <li>
              <a class="icon icon--facebook" href="" target="_blank"></a>
            </li>
            <li>
              <a class="icon icon--instagram" href="" target="_blank"></a>
            </li>
            <li>
              <a class="icon icon--pinterest" href="" target="_blank"></a>
            </li>
            <li>
              <a class="icon icon--spotify" href="" target="_blank" style="background-image:url('front/img/vetors/spotify.svg')"></a>
            </li>
          </ul>
          <!-- social -->

          <div class="row">

            <div class="col-sm-8">
              <div class="page-footer__credits">
                <h4>All rights reserved &copy; 2018</h4>
              </div>
            </div>

            <div class="col-xs-4">
              <ul class="page-footer__langs langs">
                <li class="active"><a>Português</a></li>
                <li><a>English</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </footer>
  </div>
</div>

@push('scripts')
<script>

$( ".langs .active" ).click(function() {
  $(this).removeClass('active');
  $(this).siblings().addClass('active');
});

</script>
@endpush
