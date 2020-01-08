<nav id="menu" class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}"> <img id="" src="{{ asset('back_end/upload/basic/'.$basic->logo)}}" alt=""> </a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id="navbar" class="nav navbar-nav navbar-right">
            <li class="active"><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#service" class="page-scroll">Service</a></li>
            <li><a href="#resume" class="page-scroll">Resume</a></li>
            <li><a href="#skill" class="page-scroll">Skill</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
            <li><a href="#availability-calendar" class="page-scroll">Calendar</a></li>
            <li><a href="#blog" class="page-scroll">Blog</a></li>
            <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">pages </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('single.blog') }}">Blog </a></li>
                    <li><a href="#blog">Blog single</a></li>
                    <li><a href="{{ route('single.portfolio')}}">Portfolio single</a></li>
                    <li><a href="error-404.html">Error 404</a></li>
                </ul>
            </li>
            <li><a href="#contact" class="page-scroll">contact</a></li>
        </ul>
   </div> 
</nav>

