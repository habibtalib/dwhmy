@if (count($errors))
<div class="message-popup bottom-left error" data-show-after-time="1000" data-close-after-time="5000">
    <div class="close"><i class="fa fa-times"></i></div>
    <div class="title">Error!</div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>
@endif
<!--<div class="message-popup bottom-left" data-show-after-time="5000" data-close-after-time="5000">
    <div class="close"><i class="fa fa-times"></i></div>
    <p>Last booking was from <strong>France</strong></p>
</div>-->

<footer id="page-footer">
    <div class="footer-wrapper">
        <div class="block">
            <div class="container">
                <div class="vertical-aligned-elements">
                    <div class="element width-50">
                        <!--<p data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam at neque sit amet vestibulum. <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>-->
                    </div>
                    <div class="element width-50 text-align-right">
                        <a href="#" class="circle-icon"><i class="social_twitter"></i></a>
                        <a href="#" class="circle-icon"><i class="social_facebook"></i></a>
                        <a href="#" class="circle-icon"><i class="social_youtube"></i></a>
                    </div>
                </div>
                <div class="background-wrapper">
                    <div class="bg-transfer opacity-50">
                        <img src="{{url('/')}}/assets/img/footer-bg.png" alt="">
                    </div>
                </div>
                <!--end background-wrapper-->
            </div>
        </div>
        <div class="footer-navigation">
            <div class="container">
                <div class="vertical-aligned-elements">
                    <div class="element width-50">(C) 2017 GetRiuh.com, All right reserved</div>
                    <div class="element width-50 text-align-right">
                        <a href="/">Home</a>
                        <a href="listing">Listings</a>
                        <a href="submit-item">Submit Item</a>
                        <a href="contact-us">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end page-footer-->