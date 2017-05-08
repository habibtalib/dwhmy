<div class="sidebar-content" data-id="'. $currentLocation['id'] .'">
    <div class="back"></div>
    <!--end back-button-->

    <div class="controls-more">
        <ul>
            <li><a href="#">Add to favorites</a></li>
            <li><a href="#">Add to watchlist</a></li>
        </ul>
    </div>
    <!--end controls-more-->

    <div class="section-title">
        <a href="{{$currentLocation['url']}}" class="btn btn-primary btn-framed btn-rounded btn-xs full-detail">Full Detail</a>



        @if( !empty($currentLocation['title']) )
        
        <h2>{{$currentLocation['title']}}</h2>
        @endif



        @if( !empty($currentLocation['location']) )
        
        <h4>{{$currentLocation['location']}}</h4>
        @endif



        @if( !empty($currentLocation['category']) )
        
        <div class="label label-default">{{$currentLocation['category']}}</div>
        @endif



        @if( !empty($currentLocation['ribbon']) )
        
        <figure class="ribbon">{{$currentLocation['ribbon']}}</figure>
        @endif

        
        </div>
    <!--end section-title-->




    @if( !empty($gallery) )


    
    <div class="gallery-wrapper">



        @if( !empty($currentLocation['price']) )
        
        <div class="price">{{$currentLocation['price']}}</div>
        @endif

        
        <div class="gallery owl-carousel" data-owl-nav="0" data-owl-dots="1">
            @for($i=0; $i < count($gallery); $i++)
                <img src="{{$gallery[$i]["image"]}}" alt="">
            @endfor
        </div>
    </div>
    <!--end gallery-->
    @else
    
    <div class="image" style="background-image: url('assets/img/items/default.png'); height: 290px;"></div>
    <!--end gallery-->
    @endif



    @if( !empty($currentLocation['description']) )
    
    <section>
        <h3>About</h3>
        <div class="read-more"><p>{{$currentLocation['description']}}</p></div>
    </section>
    <!--end about-->
    @endif



<section>
    <h3>Share This Listing</h3>
    <div class="social-share"></div>
</section>


</div>