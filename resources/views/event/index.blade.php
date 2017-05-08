@extends('glayouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Events</li>
        </ol>
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section class="page-title">
                    <h1>Event</h1>
                </section>
                <!--end section-title-->

                <section>
                    <div class="search-results-controls clearfix">
                    {{--<div class="pull-left">
                        <a href="" class="circle-icon active"><i class="fa fa-th"></i></a>
                        <a href="" class="circle-icon"><i class="fa fa-bars"></i></a>
                    </div>
                    <!--end left-->
                    <div class="pull-right">
                        <div class="input-group inputs-underline min-width-150px">
                            <select class="form-control selectpicker" name="sort">
                                <option value="">Sort by</option>
                                <option value="1">Price</option>
                                <option value="2">Distance</option>
                                <option value="3">Title</option>
                            </select>
                        </div>
                    </div>--}}
                    <!--end right-->
                    </div>
                    <!--end search-results-controls-->
                </section>

                <section>
                    <div class="row">
                        @foreach( $events as $item)
                            <div class="col-md-4 col-sm-4">
                                <div class="item" data-id="1">
                                    <a href="detail/{{$item['id']}}">
                                        <div class="description">
                                            <figure>{{$item['additional_info']}}</figure>
                                            <div class="label label-default">{{$item['category']}}</div>
                                            <h3>{{$item['title']}}</h3>
                                            <h4>{{$item['location']}}</h4>
                                            <h4>RM{{$item['phone']}}</h4>
                                            <h4>{{$item['email']}}</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer">
                                            <img src="{{url('/').'/'.$item->gallery->first()['image']}}" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
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

                        @if(count($events) == 0)
                            <div class="col-md-4 col-sm-4">
                                Sorry No Result Found
                            </div>

                        @endif
                    </div>
                    <!--end row-->
                </section>
                @if(count($events) != 0)
                    <section>
                        @include('listing.nav')
                    </section>
                @endif
            </div>
            <!--end col-md-9-->

            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">

                </aside>
                <!--end sidebar-->
            </div>
            <!--end col-md-4-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
@endsection

