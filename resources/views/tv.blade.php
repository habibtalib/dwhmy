@extends('glayouts.app')

@section('content')
    @include('glayouts.hero')
    @include('glayouts.recent')
@endsection

@section('script')
    <script>
        var _latitude = 3.191172;
        var _longitude = 101.693352;
        var element = "map-homepage";
        var markerTarget = "infobox"; // use "sidebar", "infobox" or "modal" - defines the action after click on marker
        var sidebarResultTarget = "sidebar"; // use "sidebar", "modal" or "new_page" - defines the action after click on marker
        var showMarkerLabels = true;
        heroMap(_latitude,_longitude, element, markerTarget, sidebarResultTarget, showMarkerLabels);
    </script>

@endsection