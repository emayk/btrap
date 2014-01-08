
<!-- views/layouts/master.blade.php -->
<!doctype html>
<html class="no-js">
 <head>
 <meta charset="utf-8">
 <title>@yield('title', 'default title')</title>

 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta name="viewport" content="width=device-width">
	@yield('meta')


<!-- stylesheets -->
{{ HTML::style(asset('packages/emayk/btrap/libs/bs3/css/bootstrap.min.css')) }}
{{ HTML::style(asset('packages/emayk/btrap/libs/fa403/css/font-awesome.min.css')) }}
@yield('styles')
{{ HTML::style(asset('packages/emayk/btrap/css/app.css')) }}


<!--{{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js') }}-->
{{ HTML::script(asset('packages/emayk/btrap/libs/modernizr271/modernizr.min.js')) }}
 <script>
 var URL = {
	 'base' : '{{ URL::to('/') }}',
 'current' : '{{ URL::current() }}',
 'full' : '{{ URL::full() }}'
 };
 </script>
 </head>
 <body>



@yield('navbar.prepend')
@include('btrap::app.navbar')
@yield('navbar.append')


	<div id="main">
 <div class="container">

@yield('main.prepend')

	<div id="content">
	@yield('content')
			</div><!-- ./ #content -->

 <div id="sidebar">
	@yield('sidebar')
			</div><!-- ./ #sidebar -->

@yield('main.append')

		</div>
 </div><!-- ./ #main -->


@yield('footer.prepend')
@include('btrap::app.footer')
@yield('footer.append')


		<!-- scripts -->
{{ HTML::script(asset('packages/emayk/btrap/libs/jquery203/jquery.203.min.js')) }}
{{ HTML::script(asset('packages/emayk/btrap/libs/bs3/js/bootstrap.min.js')) }}
@yield('scripts')
{{ HTML::script(asset('packages/emayk/btrap/js/app.js')) }}


 <script>
// var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
// (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
//g.src='//www.google-analytics.com/ga.js';
//s.parentNode.insertBefore(g,s)}(document,'script'));
 </script>

 </body>
</html>
