<header id="page-header">
    <nav>
        <div class="left">
            <!--<a href="/" class="brand"><img src="{{url('/')}}/img/logo.png" alt=""></a>-->Dawah.My
        </div>
        <!--end left-->
        <div class="right">
            <div class="primary-nav has-mega-menu">
                <ul class="navigation">
                    <li class="{{ (Request::path() == '/') ? 'active': ''}}"><a href="/">Home</a></li>
                    <li class="{{ (Request::path() == 'event') ? 'active': ''}}"><a href="event">Event</a></li>
                    <li class="{{ (Request::path() == 'class') ? 'active': ''}}"><a href="class">Class</a></li>
                    <li class="{{ (Request::path() == 'blog') ? 'active': ''}}"><a href="blog">Blog</a></li>
                    <li class="{{ (Request::path() == 'about-us') ? 'active': ''}}"><a href="about-us">About Us</a></li>
                    <li class="{{ (Request::path() == 'contact-us') ? 'active': ''}}"> <a href="contact-us">Contact Us</a></li>
                </ul>
                <!--end navigation-->
            </div>
            <!--end primary-nav-->
            <div class="secondary-nav">
                @if (Auth::check())
                    <a class="nav-link" href="/logout">Logout</a>
                @else
                    <a href="#" data-modal-external-file="{{url('/')}}/modal/sign-in" data-target="modal-sign-in">Sign In</a>
                    <a href="#" class="promoted" data-modal-external-file="{{url('/')}}/modal/register" data-target="modal-register">Register</a>
                @endif
            </div>
            <!--end secondary-nav-->
            <!--<a href="#" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" data-modal-external-file="{{url('/')}}/modal/submit" data-target="modal-submit"><i class="fa fa-plus"></i><span>Add listing</span></a>-->

            @if (Auth::check())
                <a href="/create" class="btn btn-primary btn-small btn-rounded icon shadow add-listing"><i class="fa fa-plus"></i><span>Add</span></a>
            @endif
            <div class="nav-btn">
                <i></i>
                <i></i>
                <i></i>
            </div>
            <!--end nav-btn-->
        </div>
        <!--end right-->
    </nav>
    <!--end nav-->
</header>
<!--end page-header-->