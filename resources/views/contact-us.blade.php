@extends('glayouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Contact-Us</li>
        </ol>
        <section class="page-title">
            <h1 class="pull-left">Contact</h1>
            <!--<div class="pull-right featured-contact">
                <i class="icon_comment_alt"></i>
                <h4>24/7 Support</h4>
                <h3>228-341-8068</h3>
            </div>-->
        </section>
        <!--end section-title-->
    </div>
    <!--end container-->
    <section>
        <div class="map height-400px" id="map-contact"></div>
        <!--end map-->
    </section>
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <h3>Contact Information</h3>
                    <div class="box">
                        <address>
                            <strong>Location</strong>
                            <figure>IDT Centre, Wangsa Maju</figure>
                            <br>
                            <strong>Phone Number</strong>
                            <figure></figure>
                            <br>
                            <strong>Email</strong>
                            <figure><a href="#">admin@dawah.my</a></figure>
                        </address>
                    </div>
                </div>
                <!--end col-md-3-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection

@section('script')
    <script>
        var _latitude = 3.158356;
        var _longitude = 101.696604;
        var element = "map-contact";
        simpleMap(_latitude,_longitude, element);
    </script>
@endsection
