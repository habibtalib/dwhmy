<div class="hero-section has-background height-500px background-is-dark">
    <div class="slider">
        <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1" data-owl-loop="1">
            @foreach( $recent as $item)
                <div class="slide center">
                    <div class="coupon">
                        <div class="wrapper">
                            <div class="image">
                                <!--<figure class="circle">-59%</figure>-->
                                <div class="bg-transfer"><img src="{{url('/').'/'.$item->gallery->first()['image']}}" alt=""></div>
                            </div>
                            <div class="description">
                                <h1>{{$item['title']}}</h1>
                                <figure class="label label-default">{{$item['fee']}}</figure>
                                <figure class="location"><i class="fa fa-map-marker"></i>{{$item['address']}}</figure>
                                <hr>
                                <div class="count-down" data-countdown-year="{{Carbon\Carbon::parse($item->start_date)->year}}" data-countdown-month="{{Carbon\Carbon::parse($item->start_date)->month}}" data-countdown-day="{{Carbon\Carbon::parse($item->start_date)->day}}"></div>
                                <a href="/detail/{{$item['id']}}" class="btn btn-default btn-framed btn-rounded">View Detail</a>
                            </div>
                        </div>
                    </div>
                    <!--end coupon-->
                </div>
                <!--end slide-->
            @endforeach
        </div>
        <!--end owl-carousel-->
    </div>
    <!--end slider-->
    <div class="background-wrapper">
        <div class="bg-transfer opacity-40"><img src="assets/img/background-01.jpg" alt=""></div>
        <div class="background-color background-color-black"></div>
    </div>
    <!--end background-wrapper-->
</div>
<!--end hero-section-->