

@extends('landing.layouts.app')

@section('content')

  <div class="main-banner wow fadeIn" id="home" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h2>Our program<em> offers leadership development skills tailored for growth and transformation.</em>This<span> highly-interactive program focuses</span>  on empowering and nurturing professionals with tools and coaching relevant to successful career.</h2>
                <form id="search" action="#" method="GET">
                  <fieldset>
                  <a href="{{route('register.index')}}">
                 <input type="button" value="Click here to register" >
                 </a>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="/custom/assets/images/pic3.jpeg" alt="team meeting" style="border-radius:8px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="question&answer" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2 styles="font-size:20px">Questions &amp; <span>Answers</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
      @foreach($questions as $qns)
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Answer</h4>
                <p>{{$qns->answertrainer->answer}}</p>
              </div>
              <div class="showed-content">
              <span>From: {{$qns->name}}</span>
                <p>{{$qns->question}}</p>
              </div>
          
            </div>
          </a>
        </div>
        @endforeach
        
        
       
      </div>
    </div>
  </div>

  <div id="timetable" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Refer to our schedule <em> for</em> further <span> details</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">

        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="/custom/assets/images/meet.jpg" alt="Workspace Desktop"></a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  <li><i class="fa fa-calendar"></i> {{$training->date}}</li>
                  <li><i class="fa fa-users"></i>{{$training->train_name}}</li>
                  <li><i class="fa fa-folder"></i>Fanisiprogram</li>
                </ul>
                <a href="#"><h4>{{$training->title}} </h4></a>
                <p>{{$training->description}}...</p>
                <div class="main-blue-button">
                  <a href="{{ route('timetable.download', $training->id) }}" target="_blank">Download timetable</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 13 Oct 2022</span>
                  <a href="#"><h4>Personal branding </h4></a>
                  <p>Personal branding through your digital identity...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="/custom/assets/images/brand.jpeg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 12 April 2022</span>
                  <a href="#"><h4>Building self-awareness</h4></a>
                  <p>Building self-awareness through emotional intelligence...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="/custom/assets/images/pic2.jpeg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 12 April 2022</span>
                  <a href="#"><h4>Time management</h4></a>
                  <p>Time management – psychology and techniques...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="/custom/assets/images/time.jpeg" alt=""></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s" >
          <div class="section-heading" style="margin-bottom:80px;">
            <h2>Let's get in touch, by follow us on social media</h2>
            <div class="phone-info">
              <h4><span> <a href="https://www.linkedin.com/company/fanisi-program/"><i class="fa fa-linkedin"></i>Linkedin: @fanisiprogram</a></span></h4>
              <h4><span> <a href="https://www.facebook.com/FanisiProgram/posts/475147204396186"><i class="fa fa-facebook"></i>Facebook: @fanisiprogram</a></span></h4>
              <h4><span> <a href="https://www.instagram.com/p/Ch1djeUNj_e/?igshid=NWQ4MGE5ZTk="><i class="fa fa-instagram"></i>Instagram: @fanisiprogram</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="/custom/assets/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection