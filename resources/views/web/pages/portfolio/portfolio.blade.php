 @extends('web.index')
 @section('content')
  <div class="page-header bg gradient-01">
      <div class="container-fluid">
      <div class="row">
        <div class="top-bar clearfix">
          <div class="back-home pull-left">
            <a href="index.html"><span class="ti-angle-left"></span> back to home</a>
          </div>
          <ul class="breadcrumb pull-right">
            <li><a href="index.html"><span class="ti-home"></span> Home</a></li>
            <li class="active">Portfolio single</li>        
          </ul>
        </div>
        <div class="page-header-title">
           <h1>Portfolio single page</h1>
           <span>By Sam Martin </span>
        </div>
       </div>
    </div>
  </div>
  
<!--=================================
  intro --> 

 
<!--=================================
  single portfolio --> 

  <section class="single-portfolio-post page-section-pt">
  <div class="container-fluid">
     <div class="row">
      <div class="col-lg-7 col-md-7">
           <div class="owl-carousel-1">
              <div class="item">
                 <img src="{{asset('frontend/images/portfolio/05.jpg')}}" alt="">
              </div>
              <div class="item">
                 <img src="{{asset('frontend/images/portfolio/06.jpg')}}" alt="">
              </div>
              <div class="item">
                 <img src="{{asset('frontend/images/portfolio/07.jpg')}}" alt="">
              </div>
           </div>
      </div>
      <div class="col-lg-5 col-md-5 clearfix">
         <div class="port-title">
            <h2>Single Portfolio post</h2>
         </div>
          <div class="tags-2">
            <h5>Tags:</h5>
            <ul>
              <li><a href="#">Design</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">HTML5</a></li>
            </ul>
          </div>
          <div class="port-meta clearfix">
            <ul>
              <li><b>Release:</b><span>07/07/2020 </span></li>
              <li><b>Client:</b><span>Your client name</span></li>
              <li><b>Live Demo: </b><span>www.projecturl.com</span></li>
              <li><b>Date: </b><span>September 26, 2015</span></li>
              <li><b>Skills: </b><span>Design, Photography, HTML, jQuery</span></li>
            </ul>
          </div>
          <div class="port-info">
              <p>Step out on to the path to your left. Where there is no change. Briefly imagine that you are not going to live and discover your unfulfilled dreams. Instead, you continue doing what you have in the past. What will life be like in 10 years time? Step out, every step you take you get older, days pass, weeks pass. Notice how your body is, how your mind is, how you feel about staying on this path. <br> <br>
              Walk out into your future to the 10 year point. Walk out 10 years into your future and feel how it feels to carry on doing the same thing. This path is just like today, with one difference: you have 10 fewer years remaining in your life. I want you to think about how you will feel in 10 years if you continue doing the exact same things you have done to date. What will your daily life be like?</p>

              <p>Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. <br> <br>

              Imagine reaching deep inside you for all the strength and wisdom that you need to make this decision today. As you do so, imagine that when you choose to make that decision that deep inside your mind you are switching off the alternative </p>
              <div class="button-small"><a href="#">View Project</a> </div>
              
           </div>
       </div>
    </div>
  <!--=================================-->
   <div class="row">
    <div class="col-ld-12 col-md-12">
      <div class="port-post clearfix">
       <div class="port-post-photo">
          <img src="{{asset('frontend/images/my-photo.jpg')}}" alt="">
        </div> 
        <div class="port-post-info">
          <h3 class="text-blue"><span>Posted by :</span> Sam Martin</h3>
          <div class="port-post-social pull-right">
            <strong>Follow on:</strong>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div>
          <p>Really experience that. See what you see, hear what you hear, feel the feelings. Disappointment? Anger? Frustration? Failure? How does that feel? How do you affect those around you? How do they feel? Absorb every aspect of this path that you can take today if you so choose. Notice everything that you need to know about what it will be like if you carry on with the same behaviour, putting off change. Drift back to where the path splits. Step Five: Now take a step out on to the path to the right. This is where you create powerful, progressive change. Notice the sense of freedom in your thoughts, the sense of accomplishment and walk out 10 years into your future. Imagine you are 10 years into the future but this time it’s different. Why? Because starting today you actually begin making changes in your life. Specific intentional changes are not easy. They are intentional because these changes are changes that you are choosing and they are the changes that will cause you to live.</p>
        </div>
      </div>
     </div>
   </div>
 <!--=================================-->
  </div>
</section>

<!--=================================
  single portfolio --> 

  
<!--=================================
 contact --> 

<section id="contact" class="google-map white-bg page-section-pt">
 <div class="container-fluid">
  <div id="google-map">
   <div id="map-canvas" class="wow animated fadeInUp"></div>
 </div>
 <div class="contact">  
  <h2>Say Hi It’s Free! </h2>
  <div class="address">
    <ul>
      <li><span class="ti-location-pin"></span> <p>24 SL Road, London. UK</p> </li>
      <li><span class="ti-marker-alt"></span> <p>sammartin@website.com </p></li>
      <li><span class="ti-mobile"></span> <p>(123)-456-7890 </p></li>
      <li><span class="ti-printer"></span> <p>(098)-765-4321 </p></li>
    </ul>
  </div>
  <div class="social">
   <h4>I'm also on Social Networks</h4>
   <p>Follow me on social networks to get the latest news, blog, updates and much more.</p>
   <ul>
       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-dribbble"></i> </a></li>
         <li><a href="#"><i class="fa fa-vimeo"></i> </a></li>
         <li><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
         <li><a href="#"><i class="fa fa-behance"></i> </a></li>
         <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
    </ul>
  </div>
  <div class="button-large"><a href="#">Download my CV</a></div>
 </div>
 <div class="contact-form">
   <div id="contact-wrapper">
    <div class="contact-content">
     <div id="formmessage">Success/Error Message Goes Here</div>
       <form class="form-horizontal" id="contactform" method="post" action="php/contact-form.php">
          <div class="contact-form">
            <h4>Drop me a line</h4>
            <p>Use this form to tell me about your project goals and needs. I will be in touch within 24 hours.</p>
               <input id="name" type="text" placeholder="Name*"  name="name">
               <input type="email" placeholder="Email*" name="email">
               <input type="text" placeholder="Phone*" name="phone">
               <textarea class="input-message" placeholder="Comment*" rows="7" name="message"></textarea>
             <input type="hidden" name="action" value="sendEmail"/>
            <button id="submit" name="submit" type="submit" value="Send" class="button-small"> Say Hello! </button>
          </div> 
        </form>
        <div id="ajaxloader" style="display:none"><img class="center-block" src="{{asset('frontend/images/ajax-loader-white.gif')}}" alt=""></div>
   </div>
   <a href="#" class="contact-toggle"><span class="ti-comments"></span></a>
  </div>
 </div>
 </div>
</section>

<!--=================================
 contact --> 


  <!--=================================
 color customizer --> 
 
 <div class="style-customizer closed">
  <div class="buy-button"> <a class="opener" href="#"><i class="fa fa-cog fa-spin"></i></a>  </div>
  <div class="clearfix content-chooser">
     <a target="_blank" class="button" href="https://themeforest.net/item/sam-martin-personal-vcard-resume-html-template/16795240?ref=Potenzaglobalsolutions">purchase now</a> 
      <h3>Color Schemes</h3>
      <p>Which theme color you want to use? Here are some predefined colors.</p>
      <ul class="styleChange clearfix">
        <li class="skin-default selected" title="Default" data-style="skin-default" ></li>
        <li class="skin-blue" title="Blue" data-style="skin-blue" ></li>
        <li class="skin-green" title="green" data-style="skin-green"></li>
        <li class="skin-gold" title="Gold" data-style="skin-gold"></li>
        <li class="skin-salmon" title="Salmon" data-style="skin-salmon"></li>
        <li class="skin-lime" title="Lime" data-style="skin-lime"></li>
        <li class="skin-pink" title="Pink" data-style="skin-pink" ></li>
        <li class="skin-olive" title="Olive" data-style="skin-olive"></li>
      </ul>
      <h3>Layout Options</h3>
      <p>Which Layout options you want to use? Choose from below options.</p>
      <ul class="layout">
        <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-1/index.html"><img class="img-responsive" src="{{asset('frontend/images/color-customizer/layout-01.png')}}" alt=""></a></li>
        <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-2/index.html"><img class="img-responsive" src="{{asset('frontend/images/color-customizer/layout-02.png')}}" alt=""></a></li>
        <li><a href="http://themes.potenzaglobalsolutions.com/html/sam-martin/writer/layout-3/index.html"><img class="img-responsive" src="{{asset('frontend/images/color-customizer/layout-03.png')}}" alt=""></a></li>
      </ul>
  </div>
</div>
@endsection

 <!--=================================
 color customiz