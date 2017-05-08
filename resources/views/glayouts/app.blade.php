<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dawahmy" content="dawah">
    <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('glayouts.style')

    <title>Dawah.my - Inviting People to Goodness</title>

</head>

<body class="homepage">
<div class="page-wrapper">
    @include('glayouts.header')

    <div id="page-content">

        @yield('content')



    </div>
    <!--end page-content-->

    @include('glayouts.footer')


</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

@include('glayouts.script')

@yield('script')

<script>
    var root_url = '{{url('/')}}';
    var CSRF_TOKEN = "{{ csrf_token() }}";
    var optimizedDatabaseLoading = 1;
</script>

</body>

