<div class="item infobox" data-id="{{ $currentLocation['id'] }}">
    <a href="detail/{{ $currentLocation['id'] }}">
        <div class="description">



            @if( !empty($currentLocation['category']) )

                <div class="label label-default">{{ $currentLocation['category'] }}</div>
            @endif



            @if( !empty($currentLocation['title']) )

                <h3>{{ $currentLocation['title'] }}</h3>
            @endif



            @if( !empty($currentLocation['location']) )

                <h4>{{ $currentLocation['location'] }}</h4>
            @endif

            @if( !empty($currentLocation['phone']) )

                <h4>RM{{ $currentLocation['phone'] }}</h4>
            @endif

                @if( !empty($currentLocation['email']) )

                    <h4>{{ $currentLocation['email'] }}</h4>
                @endif


        </div>
        <!--end description-->


        @if( !empty($gallery[0]['image']) )

            <div class="image" style="background-image: url({{ $gallery[0]['image'] }})"></div>
        
        @else
        
            <div class="image" style="background-image: url('assets/img/items/default.png')"></div>
        @endif


<!--end image-->
</a>
{{--@if( !empty( $currentLocation['rating'] ) )

    <div class="rating-passive">
        @for($i=0; $i < 5; $i++)
            @if( $i < $currentLocation['rating'] )
                <span class="stars"><figure class="active fa fa-star"></figure></span>
            @else
                <span class="stars"><figure class="fa fa-star"></figure></span>
            @endif
        @endfor

        <span class="reviews">{{ count($reviews) }}</span>
    </div>
@endif--}}

<!--<div class="controls-more">
    <ul>
        <li><a href="#">Add to favorites</a></li>
        <li><a href="#">Add to watchlist</a></li>
    </ul>
</div>-->
<!--end controls-more-->

</div>
<!--end item-->