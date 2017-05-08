@extends('glayouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="\">Home</a></li>
            <li><a href="/listing">Listing</a></li>
            <li class="active">Detail</li>
        </ol>

        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section class="page-title">
                    <div class="pull-left">
                        <h1>{{$item['title']}}</h1>
                        <h3>{{$item['location']}}</h3>
                        <!--<div class="rating-passive" data-rating="4">
                            <span class="stars"></span>
                            <span class="reviews">6</span>
                        </div>-->
                    </div>
                    <!--end page-title-->
                    @if (Auth::check())
                    <a href="/delete/{{$item['id']}}?back=1" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"></i>Delete</a>
                    <a href="/edit/{{$item['id']}}" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"></i>Edit</a>
                    @endif
                </section>

                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <section>
                            <div class="gallery detail">
                                <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1">
                                    @foreach($item->gallery as $picture)
                                        <div class="image">
                                            <div class="bg-transfer"><img src="{{url('/').'/'.$picture->image}}" alt=""></div>
                                        </div>
                                    @endforeach
                                </div>
                                <!--end owl-carousel-->
                            </div>
                            <!--end gallery-->
                        </section>

                        <section>
                            <section>
                                <h2>About this listing</h2>
                                {{$item->description}}
                            </section>
                        </section>


                        {{--@include('detail.reviews')--}}

                        {{--@include('detail.review-form')--}}
                    </div>
                    <!--end col-md-6-->
                    <div class="col-md-4 col-sm-12">
                        <section>
                            <div class="detail-sidebar">
                                <section class="shadow">
                                    <div class="map height-250px" id="map-detail"></div>
                                    <!--end map-->
                                    <div class="content">
                                        <address>
                                            <figure><i class="fa fa-map-marker"></i>{{$item->address}}</figure>
                                            <hr>
                                            <figure>Price : RM{{$item->phone}}</figure>
                                            <hr>
                                            <figure>Dimension : {{$item->email}}</figure>
                                        </address>
                                    </div>
                                </section>
                            </div>
                            <!--end detail-sidebar-->
                        </section>
                        {{--@include('detail.detail-sidebar')--}}
                        <section>
                            <h2>Social Share</h2>
                            <div class="social-share"></div>
                        </section>
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end col-md-9-->

            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">
                    @include('listing.search')
                    @include('listing.recent')
                </aside>
                <!--end sidebar-->
            </div>
            <!--end col-md-3-->
        </div>
    </div>
    <!--end container-->
@endsection

@section('script')
    <script>
        rating(".visitor-rating");
        var _latitude = '{{$item->latitude}}';
        var _longitude = '{{$item->longitude}}';
        var element = "map-detail";
        simpleMap(_latitude,_longitude, element);
    </script>

@endsection