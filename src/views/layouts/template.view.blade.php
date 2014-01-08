@extends('layouts.master')


{{-- meta --}}
@section('meta')
<meta name="robots" content="index, follow">
{{-- other meta --}}
@stop


{{-- styles --}}
@section('styles')
{{ HTML::style('public/css/secondary.css') }}
@stop


{{-- scripts --}}
@section('scripts')
{{ HTML::script('public/js/secondary.js') }}
@stop


{{-- navbar.prepend --}}
@section('navbar.prepend')
{{-- if need todo... --}}
@stop


{{-- navbar.append --}}
@section('navbar.append')
{{-- if need todo... --}}
@stop


{{-- main.prepend --}}
@section('main.prepend')
{{-- maybe, need dump form errors --}}
<div class="row">
	 @stop


	 {{-- content --}}
	 @section('content')
	 <div class="col-md-8">
			<p>CONTENT</p>
	 </div>
	 @stop


	 {{-- sidebar --}}
	 @section('sidebar')
	 <div class="col-md-4">
			<p>SIDEBAR</p>
			{{-- maybe, include sidebar's modules --}}
	 </div>
	 @stop


	 {{-- main.append --}}
	 @section('main.append')
</div>
@stop


{{-- footer.prepend --}}
@section('footer.prepend')
{{-- if need todo... --}}
@stop


{{-- footer.append --}}
@section('footer.append')
{{-- if need todo... --}}
@stop