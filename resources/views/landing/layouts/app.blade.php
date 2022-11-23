@include('landing.layouts.head')
@include('sweetalert::alert')
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{route('index')}}" class="logo">
            <img src="/custom/assets/images/logo-2.png" height="50px"  alt="team meeting" class="img-logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{route('index')}}" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="{{route('register.index')}}">Register</a></li>
              <li class="scroll-to-section"><a href="{{route('question.index')}}">Questions</a></li>
              <li class="scroll-to-section"><a href="#timetable">Timetable</a></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <main class="p-4">
            @yield('content')
        </main>
 
       @include('landing.layouts.foot')
