<div class="block">
    <div class="container">
        <div class="center">
            <div class="section-title">
                <div class="center">
                    <h2>Recent Events</h2>
                    <h3 class="subtitle">Recent events that has been added</h3>
                </div>
            </div>
            <!--end section-title-->
        </div>
        <!--end center-->
        <div class="row">
            @foreach( $recent as $item)
                <div class="col-md-4 col-sm-4">
                    <div class="item" data-id="{{$item['id']}}">
                        <a href="detail/{{$item['id']}}">
                            <div class="description">
                                <figure>{{$item['additional_info']}}</figure>
                                <div class="label label-default">{{$item['category']}}</div>
                                <h3>{{$item['title']}}</h3>
                                <h4>{{$item['location']}}</h4>
                                <h4>RM{{$item['fee']}}</h4>
                                <h4>{{$item['email']}}</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="{{url('/').'/'.$item->gallery->first()['image']}}" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <!--<div class="rating-passive" data-rating="{{$item['rating']}}">
                                <span class="stars"></span>
                                <span class="reviews">6</span>
                            </div>-->
                            <div class="controls-more">
                                <ul>
                                    @if (Auth::check())
                                    <li><a href="/delete/{{$item['id']}}">Delete</a></li>
                                    @endif
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
                </div>
                <!--<end col-md-3-->
            @endforeach
        </div>
        <!--end row-->
        <div class="center">
            <a href="listing" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all events</a>
        </div>
        <!--end center-->
    </div>
    <!--end container-->
</div>
<!--end block-->