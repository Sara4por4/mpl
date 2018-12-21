<div class="navbar-wrapper">

    <nav class="navbar navbar--desktop navbar--user">
      <div class="navbar__user-wrap">
         <div class="container">
            <ul class="navbar__user">
               <li><a href="{{url('/personal-info')}}">My personal details</a></li>
               <li><a href="{{url('/history')}}">My order history</a></li>
               <li><a href="{{url('/vouchers')}}">My vouchers</a></li>
               <li><a href="{{url('/myworkshops')}}">My workshops</a></li>
               <li><a href="{{url('/changepass')}}">Change Password</a></li>
               <li><a href="{{url('/')}}">Logout</a></li>
            </ul>
         </div>
      </div>

      <div class="container">
      <div class="navbar__top clearfix">

        <!-- toggler button -->
        <button type="button" class="navbar__toggler icon icon--menu" onclick="openNav()"></button>
        <!-- toggler button -->

        <!-- Brand -->
        <div class="app-logo navbar__logo navbar-brand">
          <a class="app-logo-1" href="{{url("/")}}" style="background: url('/front/img/logo/{{ rand(14,17) }}.svg')  no-repeat center /contain">Mafalda Pinto Leite</a>
          <a class="app-logo-2" href="{{url("/")}}" style="background: url('/front/img/logo/{{ rand(10,13) }}.svg')  no-repeat center /contain">Mafalda Pinto Leite</a>
        </div>
        <!-- Brand -->

        <!-- right menu -->
        <ul class="navbar__submenu navbar-nav pull-right">
          <li class="navbar__search">
            <button type="button" data-toggle="collapse"
            data-target="#search" aria-expanded="false"><span class="icon icon--search"></span></button>

            <!-- search form -->
            <form class="form-inline search collapse" id="search" action="index.html" method="post">
              <input type="text" class="form-control" placeholder="search">
              <span class="input-group-btn">
                <a class="icon icon--search" href="{{url('/search')}}"></a>
              </span>
            </form>
            <!-- search form -->

          </li>
          <li><a href="{{url('/')}}">Bag (0)</a></li>
          <li><a href="{{url('/login')}}">My account</a></li>
        </ul>
        <!-- right menu -->

      </div>

      <div class="navbar__bottom">

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

          <!-- footer menu -->
          <ul class="navbar__footer">
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
          <!-- footer menu -->

      </div>

      @include('front.components.left-menu')

    </nav>
  </div>
</div>

@include('front.layout.nav.nav-mobile')

@push('scripts')
<script>

$('.navbar__menu li.opacity').click(function() {
   $('.navbar__menu li').removeClass('opacity');
});

$('.navbar__menu li').click(function() {
   $('.navbar__menu li').addClass('opacity');
});

function openNav() {
  // $('#my-navbar-collapse').removeClass('collapse');
  $('#my-navbar-collapse').css({'display':'block'});
  $('#my-navbar-collapse').animate({'width':'320px'}, 250);
  $('#body-content').css('opacity','.6');
  $('body').css('overflow','hidden');
  $('#body-content').css('cursor','url(/front/img/vetors/cursor.png), auto');

  $('#body-content').click( function() {
     //Hide the menus if visible
     $('#my-navbar-collapse').animate({'width':'0'}, 250);
     $('#my-navbar-collapse').css({'display':'none'});
     // $('#my-navbar-collapse').addClass('collapse');
     $('.icon--menu').css('display','block');
     $('#body-content').css('opacity','1');
     $('body').css('overflow','auto');
     $('#body-content').css('cursor','auto');
  });
}

$(document).ready(function() {

	$(window).scroll(function() {

		var scrollVal = $(window).scrollTop();

    	if (scrollVal >= 850){
         $('.navbar').addClass('animation');
         // $('.navbar__bottom').animate({'width':'0'}, 200);
      }

    	if (scrollVal >= 100){
         $('.navbar').addClass('top');
      }

      if (scrollVal >= 800){
         $('body').css('margin-top','256px');
         $('.navbar').addClass('navbar-fixed-top');
         $('.navbar__bottom').addClass('collapse');
         $('.navbar--desktop .icon--menu').css('display','block');

         function openNav() {
            $('.icon--close').removeClass('active');
         }
      }

      else {
         $('.navbar').removeClass('animation');
      	$('.navbar').removeClass('navbar-fixed-top');
         $('.navbar').removeClass('top');
         $('body').css('margin-top','0');
        $('.navbar--desktop .navbar__bottom').removeClass('collapse');
        $('.navbar--desktop .icon--close').removeClass('active');
        $('.navbar--desktop .icon--menu').css('display','none');
    	}
  	});

    $('[data-toggle="slide-collapse"]').on('click', function() {
        $navMenuCont = $($(this).data('target'));
        $navMenuCont.animate({'width':'toggle'}, 350);
    });
  });


</script>
@endpush
