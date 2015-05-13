<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="ink cartridge api, ink cartridge database, print database, printer api">
	<title>Printer &amp; Ink Cartridge API | TotalInk</title>

	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::script('js/libs/respond.min.js') }}
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-43314626-1', 'totalink.co.uk');
		ga('send', 'pageview');
  </script>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
{{ HTML::script('js/libs/jquery.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/main.js') }}
</body>
</html>