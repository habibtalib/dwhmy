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
                <div class="col-md-9 col-sm-9">
                    <h3>Form</h3>
                    <form class="form inputs-underline" id="form-hero" method="POST" action="/">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <!--end row-->
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary icon shadow">Send Message<i class="fa fa-caret-right"></i></button>
                        </div>
                        <!--end form-group-->
                    </form>
                </div>
                <!--end col-md-9-->
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
