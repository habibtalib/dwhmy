@if( !empty($_POST['markers']) )

    @for( $i=0; $i < count($data); $i++)
        @for( $e=0; $e < count($_POST['markers']); $e++)
            @if( $data[$i]['id'] == $_POST['markers'][$e] )

                <div class="result-item" data-id="{{ $data[$i]['id'] }}">


                    @if( !empty($data[$i]['ribbon']) )

                        <figure class="ribbon">{{ $data[$i]['ribbon'] }}</figure>
                    @endif


                    <a href="{{ $data[$i]['url'] }}">



                        @if( !empty($data[$i]['title']) )

                            <h3>{{ $data[$i]['title'] }}</h3>
                        @endif


                        <div class="result-item-detail">



                            @if( !empty($gallery[$i]["image"]) )

                                <div class="image" style="background-image: url({{$gallery[$i]["image"]}} )">
                                    @if( !empty($data[$i]['additional_info']) )

                                        <figure>{{ $data[$i]['additional_info'] }}</figure>
                                    @endif



                                    @if( !empty($data[$i]['price']) )

                                        <div class="price">{{ $data[$i]['price'] }}</div>
                                    @endif

                                </div>

                            @else

                                <div class="image" style="background-image: url('assets/img/items/default.png')">
                                    @if( !empty($data[$i]['additional_info']) )

                                        <figure>{{ $data[$i]['additional_info'] }}</figure>
                                    @endif

                                    @if( !empty($data[$i]['price']) )

                                        <figure class="price">{{ $data[$i]['price'] }}</figure>
                                    @endif

                                </div>
                            @endif


                            <div class="description">
                                @if( !empty($data[$i]['location']) )

                                    <h5><i class="fa fa-map-marker"></i>{{ $data[$i]['location'] }}</h5>
                                @endif


                                @if( !empty($data[$i]['rating']) )

                                    <div class="rating-passive"data-rating="{{ $data[$i]['rating'] }}">
                                        <span class="stars"></span>
                                        <span class="reviews"></span>
                                    </div>
                                @endif


                                @if( !empty($data[$i]['category']) )

                                    <div class="label label-default">{{ $data[$i]['category'] }}</div>
                                @endif


                                @if( !empty($data[$i]['description']) )

                                    <p>{{ $data[$i]['description'] }}</p>
                                @endif

                            </div>
                        </div>
                    </a>
                    <div class="controls-more">
                        <ul>
                            <li><a href="#" class="add-to-favorites">Add to favorites</a></li>
                            <li><a href="#" class="add-to-watchlist">Add to watchlist</a></li>
                        </ul>
                    </div>
                </div>

            @endif
        @endfor
    @endfor
@endif