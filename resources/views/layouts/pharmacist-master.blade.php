<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Pharmacist area</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/design.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/MainContent.css') }}">
	@yield('styles')
</head>
<body>
    @include('includes_pharmacist.pharmacist-header')
    @include('includes_pharmacist.pharmacist-navigation')
    @include('section-header')
    <div class="main-content">
        @yield('content')
    </div>
    
    @include('footer')

    <script type="text/javascript">
    	var baseUrl="{{ URL::to('/') }}";
    </script>
    @yield('scripts')
    </body>
</html>