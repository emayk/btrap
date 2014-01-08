@extends('btrap::layouts.master')


{{-- meta --}}
@section('meta')
	<meta name="robots" content="index, follow">
{{-- other meta --}}
@stop


{{-- styles --}}
@section('styles')
{{-- HTML::style('public/css/secondary.css') --}}
@stop


{{-- scripts --}}
@section('scripts')
{{-- HTML::script('public/js/secondary.js') --}}
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
		 {{ $time }}
		 <h1>h1. Bootstrap heading <small>Secondary text</small></h1>
		 <h2>h2. Bootstrap heading <small>Secondary text</small></h2>
		 <h3>h3. Bootstrap heading <small>Secondary text</small></h3>
		 <h4>h4. Bootstrap heading <small>Secondary text</small></h4>
		 <h5>h5. Bootstrap heading <small>Secondary text</small></h5>
		 <h6>h6. Bootstrap heading <small>Secondary text</small></h6>
		 <address>
				<strong>Twitter, Inc.</strong><br>
				795 Folsom Ave, Suite 600<br>
				San Francisco, CA 94107<br>
				<abbr title="Phone">P:</abbr> (123) 456-7890
		 </address>

		 <address>
				<strong>Full Name</strong><br>
				<a href="mailto:#">first.last@example.com</a>
		 </address>
		 <blockquote>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
		 </blockquote>

		 <blockquote>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
		 </blockquote>




		 <!-- Standard button -->
		 <button type="button" class="btn btn-default">Default</button>

		 <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
		 <button type="button" class="btn btn-primary">Primary</button>

		 <!-- Indicates a successful or positive action -->
		 <button type="button" class="btn btn-success">Success</button>

		 <!-- Contextual button for informational alert messages -->
		 <button type="button" class="btn btn-info">Info</button>

		 <!-- Indicates caution should be taken with this action -->
		 <button type="button" class="btn btn-warning">Warning</button>

		 <!-- Indicates a dangerous or potentially negative action -->
		 <button type="button" class="btn btn-danger">Danger</button>

		 <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
		 <button type="button" class="btn btn-link">Link</button>

		 <form role="form">
				<div class="form-group">
					 <label for="exampleInputEmail1">Email address</label>
					 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Password</label>
					 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					 <label for="exampleInputFile">File input</label>
					 <input type="file" id="exampleInputFile">
					 <p class="help-block">Example block-level help text here.</p>
				</div>
				<div class="checkbox">
					 <label>
							<input type="checkbox"> Check me out
					 </label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
		 </form>

		 <button type="button" class="btn btn-default btn-lg">
				<span class="glyphicon glyphicon-star"></span> Star

		 </button>


		 <a href="#">
				<span class="glyphicon glyphicon-volume-off"></span>
		 </a>Off

		 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
				<li role="presentation" class="dropdown-header">Dropdown header</li>
<!--				...-->
				<li role="presentation" class="divider"></li>
				<li role="presentation" class="dropdown-header">Dropdown header</li>
<!--				...-->
		 </ul>


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