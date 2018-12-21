<nav class="navbar navbar--mobile">
  <div class="navbar__top clearfix">

    <!-- Brand -->
    <div class="app-logo navbar__logo navbar-brand">
      <a href="{{url("/")}}">Mafalda Pinto Leite</a>
    </div>
    <!-- Brand -->

    <!-- right menu -->
    <ul class="navbar__submenu navbar-nav pull-right">
      <!-- toggler button -->
      <li>
        <button type="button" class="icon icon--close collapse" data-toggle="close"></button>
      </li>
      <li>
        <button type="button" class="icon icon--menu" data-toggle="slide-collapse" data-target="#menu-mobile" aria-controls="menu-mobile"></button>
      </li>
      <!-- toggler button -->
      <li><a href="{{url('/')}}">Bag (0)</a></li>
    </ul>
    <!-- right menu -->

  </div>

  <div class="navbar__bottom collapse" id="menu-mobile">

     <!-- Menu -->
     <ul class="navbar__menu navbar-nav">
     <li>
         <a href="{{url('/new')}}">New? Start here</a>
     </li>
     <li class="dropdown">
         <a class="dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown">Workshops</a>

         <div class="dropdown-menu">
          <ul class="navbar__dropdown" aria-labelledby="dropdown">
             <li>
               <a href="{{url('/workshops')}}">Love</a>
             </li>
             <li>
               <a href="{{url('/workshops')}}">Abundance</a>
             </li>
             <li>
               <a href="{{url('/workshops')}}">Purpose</a>
             </li>
             <li>
               <a href="{{url('/workshops')}}">Thrive</a>
             </li>
             <li>
               <a href="{{url('/workshops')}}">Evolve</a>
             </li>
             <li>
               <a href="{{url('/workshops')}}">Awaken</a>
             </li>
             <li>
               <a href="{{url('/workshops')}}">2019</a>
             </li>
          </ul>
         </div>
     </li>
     <li class="dropdown">
         <a class="dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown">Shop</a>

         <div class="dropdown-menu">
          <ul class="navbar__dropdown" aria-labelledby="dropdown">
             <li>
               <a href="{{url('/shop')}}">View all</a>
             </li>
             <li>
               <a href="{{url('/shop')}}">Blends</a>
             </li>
             <li>
               <a href="{{url('/shop')}}">Plant protein</a>
             </li>
             <li>
               <a href="{{url('/shop')}}">Adaptogeins</a>
             </li>
          </ul>
         </div>
     </li>
     <li>
         <a href="{{url('/journal')}}">Journal</a>
     </li>
     <li>
         <a href="{{url('/abc')}}">Abc</a>
     </li>
     <li class="dropdown">
         <a class="dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown">Curated</a>

         <div class="dropdown-menu">
          <ul class="navbar__dropdown" aria-labelledby="dropdown">
             <li>
               <a href="{{url('/curated')}}">View all</a>
             </li>
             <li>
               <a href="{{url('/curated')}}">Apothecary</a>
             </li>
             <li>
               <a href="{{url('/curated')}}">Home</a>
             </li>
             <li>
               <a href="{{url('/curated')}}">Apparel</a>
             </li>
             <li>
               <a href="{{url('/curated')}}">Podcats</a>
             </li>
             <li>
               <a href="{{url('/curated')}}">Books</a>
             </li>
             <li>
               <a href="{{url('/curated')}}">Inspired</a>
             </li>
          </ul>
         </div>
     </li>
     <li class="dropdown">
         <a class="dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown">About</a>

         <div class="dropdown-menu">
          <ul class="navbar__dropdown" aria-labelledby="dropdown">
             <li>
               <a href="{{url('/about-mpl')}}">About mpl</a>
             </li>
             <li>
               <a href="{{url('/about-personal')}}">About mafalda pinto leite</a>
             </li>
             <li>
               <a href="{{url('/why')}}">Why MPL?</a>
             </li>
             <li>
               <a href="{{url('/press')}}">Press</a>
             </li>
             <li>
               <a href="{{url('/contacts')}}">Contacts</a>
             </li>
          </ul>
         </div>
     </li>
     </ul>
     <!-- End Menu -->

    <ul class="navbar__footer-menu">
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
      <li><a href="{{url('/login')}}">My account</a></li>
    </ul>

    <ul class="page-footer__langs langs">
      <li class="active"><a>Português</a></li>
      <li><a>English</a></li>
    </ul>

  </div>
</nav>


@push('scripts')
<script>

    $( ".langs .active" ).click(function(){
      $(this).removeClass('active');
      $(this).siblings().toggleClass('active');
    });

    $('[data-toggle="slide-collapse"]').on('click', function() {
      $('body').css('overflow','hidden');
      $navMenuCont = $($(this).data('target'));
      $navMenuCont.animate({'width':'80%'}, 150);
      $('.navbar--mobile .icon--menu').addClass('collapse');
      $('#body-content').addClass('transition');
      $('.navbar--mobile .icon--menu').removeClass('show');
      $('.navbar--mobile .icon--close').addClass('show');
      // document.getElementById("body-content").style.marginRight = "250px";
    });

    $('[data-toggle="close"]').on('click', function(){
       $('body').css('overflow','initial');

        $navMenuCont = $($(this).data('target'));
        $navMenuCont.animate({'width':'0'}, 150);
        $('#body-content').removeClass('transition');
        // $('.navbar--mobile .icon--menu').addClass('show');
        $('.navbar--mobile .icon--menu').removeClass('collapse');
        $('.navbar--mobile .icon--close').removeClass('show');
        $('.navbar--mobile .icon--close').addClass('collapse');
        $('.navbar__bottom').css('display','none');
    });

</script>
@endpush
