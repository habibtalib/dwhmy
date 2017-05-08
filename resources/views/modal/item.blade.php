<div class="modal-item-detail modal-dialog" role="document" data-latitude="{{$latitude}}" data-longitude="{{$longitude}}" data-address="{{$address}}">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>{{$item['title']}}</h2>
                <div class="label label-default">{{$item['category']}}</div>


                @if( !empty($item['ribbon']) )
                    <figure class="ribbon">{{$item['ribbon']}}</figure>
                @endif


                @if( !empty($item['rating']) )
                <!--<div class="rating-passive" data-rating="{{$item['rating']}}">
                    <span class="stars"></span>
                    {{--<span class="reviews">{{count($reviews)}}</span>--}}
                </div>-->
                @endif


                {{--<div class="controls-more">
                    <ul>
                        <li><a href="#">Add to favorites</a></li>
                        <li><a href="#">Add to watchlist</a></li>
                    </ul>
                </div>--}}
                <!--end controls-more-->
            </div>
            <!--end section-title-->
        </div>
        <!--end modal-header-->
        <div class="modal-body">
            <div class="left">


                @if( !empty($item->gallery) )
                <div class="gallery owl-carousel" data-owl-nav="1" data-owl-dots="0">
                @for($i=0; $i < count($item->gallery); $i++)
                    <img src="{{$item->gallery[$i]["image"]}}" alt="">
                @endfor
                </div>
                <!--end gallery-->
                @endif


                <div class="map" id="map-modal"></div>
                <!--end map-->

                <section>
                    <h3>Detail</h3>

                    @if( !empty($item['location']) )
                    <h5><i class="fa fa-map-marker"></i>{{$item['address']}}</h5>
                    @endif


                    @if( !empty($item['phone']) )
                    <h5>Price : RM</i>{{$item['phone']}}</h5>
                    @endif


                    @if( !empty($item['email']) )
                    <h5>Dimension : </i>{{$item['email']}}</h5>
                    @endif


                    </section>
                <section>
                    <h3>Social Share</h3>
                    <div class="social-share"></div>
                </section>
            </div>
            <!--end left -->
            <div class="right">
                <section>
                    <h3>About</h3>
                    <div class="read-more"><p>{{$item['description']}}</p></div>
                </section>
                <!--end about-->


                @if( !empty($tags) )
                <section>
                    <h3>Features</h3>
                    <ul class="tags">
                        @for($i=0; $i < count($tags); $i++)
                            <li>{{$tags[$i]["tag"]}}</li>
                        @endfor
                    </ul>
                </section>
                <!--end tags-->
                @endif


                @if( !empty($todayMenu) )

                <section>
                    <h3>Today menu</h3>
                    @for($i=0; $i < count($todayMenu); $i++)

                    <ul class="list-unstyled list-descriptive icon">
                        <li>
                            <i class="fa fa-cutlery"></i>
                            <div class="description">
                                <strong>{{$todayMenu[$i]['meal_type']}}</strong>
                                <p>{{$todayMenu[$i]['meal']}}</p>
                            </div>
                        </li>
                    </ul>
                    <!--end list-descriptive-->
                    @endfor

                    </section>
                <!--end today-menu-->
                @endif


                @if( !empty($schedule) )

                <section>
                    <h3>Schedule</h3>
                    @for($i=0; $i < count($schedule); $i++)
                    <ul class="list-unstyled list-schedule">
                        <li>
                            <div class="left">
                                <strong class="promoted">{{$schedule[$i]['date']}}</strong>
                                <figure>{{$schedule[$i]['time']}}</figure>
                            </div>
                            <div class="right">
                                <strong>{{$schedule[$i]['location_title']}}</strong>
                                <figure>{{$schedule[$i]['location_address']}}</figure>
                            </div>
                        </li>
                    </ul>
                    <!--end list-schedule-->
                    @endfor

                    </section>
                <!--end schedule-->
                @endif


                @if( !empty($item['video']) )
                <section>
                    <h3>Video presentation</h3>
                    <div class="video">{{$item['video']}}</div>
                </section>
                <!--end video-->
                @endif


                @if( !empty($description_list) )

                <section>
                    <h3>Property Details</h3>
                    @for($i=0; $i < count($description_list); $i++)

                    <dl>
                        <dt>{{$description_list[$i]['title']}}</dt>
                        <dd>{{$description_list[$i]['value']}}</dd>
                    </dl>
                    <!--end property-details-->
                    @endfor

                    </section>
                <!--end description-list-->
                @endif


                {{--@if( !empty($opening_hours) )

                <section>
                    <h3>Opening Hours</h3>
                    <dl>
                        @for($i=0; $i < count($opening_hours); $i++)

                            <dt>{{$opening_hours[$i]["day"]}}</dt>
                            @if( $opening_hours[$i]["closed_day"] == 1 )
                                <dd>Closed</dd>
                            @else
                                <dd>{{$opening_hours[$i]["time_open"] .' - '. $opening_hours[$i]["time_close"]}}</dd>
                            @endif
                        @endfor

                        </dl>
                </section>
                <!--end opening-hours-->
                @endif--}}


                {{--@if( !empty($reviews) )

                    <section>
                        <h3>Latest reviews</h3>
                        @for($i=0; $i < 2; $i++)
                            <div class="review">
                                <div class="image">
                                    <div class="bg-transfer" style="background-image: url({{$reviews[$i]["author_image"]}})"></div>
                                </div>
                                <div class="description">
                                    <figure>
                                        <div class="rating-passive" data-rating="{{$reviews[$i]["rating"]}}">
                                            <span class="stars"></span>
                                        </div>
                                        <span class="date">{{$reviews[$i]["date"]}}</span>
                                    </figure>
                                    <p>{{$reviews[$i]['review_text']}}</p>
                                </div>
                            </div>
                            <!--end review-->
                        @endfor

                    </section>
                    <!--end reviews-->
                @endif--}}

        </div>
    <!--end right-->
</div>
<!--end modal-body-->
</div>
<!--end modal-content-->
</div>
<!--end modal-dialog-->