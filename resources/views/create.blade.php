@extends('glayouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="\listing">Post</a></li>
            <li class="active">Create</li>
        </ol>
        <!--end breadcrumb-->
        <section class="page-title center">
            <h1>New Class</h1>
        </section>
        <!--end page-title-->
        <section>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    @include('layouts.errors')
                    <form class="form inputs-underline" enctype="multipart/form-data" action="\submit" method="POST">
                        {{csrf_field()}}
                        <section>
                            <h3>Details</h3>
                            <div class="row">
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-9-->
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control selectpicker" name="category" id="category" required>
                                            <option value="1" >Event</option>
                                            <option value="2" >Class</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--col-md-3-->
                            </div>
                            <!--end row-->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                            </div>
                            <!--end form-group-->
                        </section>
                        </section>
                        <section>
                            <h3>Contact</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="address-autocomplete">Address</label>
                                        <input type="text" class="form-control" name="address" id="address-autocomplete" value="" required>
                                    </div>
                                    <!--end form-group-->
                                    <div class="map height-200px shadow" id="map-submit"></div>
                                    <!--end map-->
                                    <div class="form-group hidden">
                                        <input type="text" class="form-control" id="latitude" name="latitude" hidden="">
                                        <input type="text" class="form-control" id="longitude" name="longitude" hidden="">
                                    </div>
                                    <p class="note">Enter the exact address or drag the map marker to position</p>
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="fee">Fees</label>
                                        <input type="text" class="form-control" name="fee" id="fee" value="" placeholder="Fees">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="start_date">Date</label>
                                        <input type="text" class="form-control date-picker" name="start_date" placeholder="Start Date">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input type="text" class="form-control date-picker" name="end_date" placeholder="End Date">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="start_time">Time</label>
                                        <input type="text" class="form-control time-picker" name="start_time" id="start_time" value="" placeholder="Start">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input type="text" class="form-control time-picker" name="end_time" id="end_time" value="" placeholder="End">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                            </div>
                        </section>
                        <section>
                            <h3>Gallery</h3>
                            <div class="file-upload-previews"></div>
                            <div class="file-upload">
                                <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                                <span>Click or drag images here</span>
                            </div>
                        </section>
                        <hr>
                        <section class="center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded">Submit Listing</button>
                            </div>
                            <!--end form-group-->
                        </section>
                    </form>
                    <!--end form-->
                </div>
                <!--end col-md-6-->
            </div>
            <!--end row-->
        </section>
    </div>
    <!--end container-->

@endsection

@section('script')

    <script>
        var _latitude = '3.15910600';
        var _longitude = '101.89345200';
        var element = "map-submit";
        simpleMap(_latitude,_longitude, element, true);
    </script>
@endsection