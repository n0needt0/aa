<!DOCTYPE html>
<html>
<head>
	<meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<meta HTTP-EQUIV="Expires" CONTENT="-1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="//demos.jquerymobile.com/1.4.5/css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="//demos.jquerymobile.com/1.4.5/_assets/css/jqm-demos.css">
	<script src="//demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="//demos.jquerymobile.com/1.4.5/_assets/js/index.js"></script>
	<script src="//demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true" id="page1">
      		<!-- notifications start -->
              @include('notifications')
            <!-- notifications end -->
            <!--  content start -->
              @yield('content')
            <!--  content end -->
</div>
</body>
</html>