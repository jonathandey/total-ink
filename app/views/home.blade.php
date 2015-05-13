@extends('layouts.master')

@section('content')
	<header>
		@if(count($errors))
		<div class="alert alert-danger"><strong>Please correct the following:</strong>
			<ul>
			<?php foreach($errors->all() as $error): ?>
			<li>{{ $error }}</li>
			<?php endforeach; ?>
			</ul>
		</div>
		@endif
		@if(Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
		@endif
		<h1>TotalInk.co.uk</h1>
		<p class="lead">A Reference API for looking up Ink Cartridge and Printer details.<br /> 
		We have an extensive and <em id="updated-at" data-toggle="tooltip" title="Last updated on 20/08/2013">up-to-date database</em> for you to reference, completely <strong>Free</strong>.</p>
	</header>
	<div id="main">
		<div id="register">
			<div class="page-header">
				<h3 class="interested">Apply for beta access</h3>
			</div>
			{{ Form::open(array('method' => 'post', 'url' => 'register')) }}
			{{ Form::text('email', Input::old('email'), array('class' => 'input-lg form-control', 'placeholder' => 'Email Address...')) }}
			{{ Form::submit('I\'m interested, sign me up!', array('class' => 'btn btn-lg btn-success pull-right')) }}
			{{ Form::close() }}
		</div>
	
		<div id="examples">
			<div class="page-header">
				<h3>The Documentation</h3>
			</div>
			<div class="panel panel-primary">
				<!-- Default panel contents -->
				<div class="panel-heading">Cartridge Lookup</div>
				<div class="panel-body">
					<h5>The Call</h5>
					http://totalink.co.uk/api/v1/{api_key}/printer/{model}/[{manufacturer}]
				</div>

				<!-- List group -->
				<ul class="list-group">
					<li class="list-group-item">
						<h5>The Method</h5>
						<span class="label label-primary label-request">GET</span>
					</li>
					<li class="list-group-item">
						<h5>Example Result</h5>
						<pre>{ "status" : "ok", 
"response" : [{ 
	"manufacturer" : "LEXMARK", 
	"model" : "Prevail Pro705", 
	"cartridge": "100 (14N0820E)", 
	"color": "Black", 
	"type": "InkJet"
}] }</pre>
					</li>
				</ul>
			</div>

			<div class="panel panel-primary">
				<!-- Default panel contents -->
				<div class="panel-heading">Reverse Lookup</div>
				<div class="panel-body">
					<h5>The Call</h5>
					http://totalink.co.uk/api/v1/{api_key}/cartridge/{model}
				</div>

				<!-- List group -->
				<ul class="list-group">
					<li class="list-group-item">
						<h5>The Method</h5>
						<span class="label label-primary label-request">GET</span>
					</li>
					<li class="list-group-item">
						<h5>Example Result</h5>
						<pre>{ "status" : "ok", 
"response" : [{ 
	"manufacturer" : "LEXMARK", 
	"model" : "Prevail Pro705",
	"cartridge": "100 (14N0820E)", 
	"color": "Black",
	"type" : "InkJet"
}] }</pre>
					</li>
				</ul>
			</div>
		</div>
		
		<div id="demo">
			<div class="page-header">
				<h3>Try it for yourself</h3>
			</div>
			<p>Enter a Printer Model Number to try it yourself...</p>
			
			{{ Form::open(array('method' => 'post', 'url' => 'demo')) }}
			{{ Form::text('model', Input::old('model'), array('class' => 'input-lg form-control', 'placeholder' => 'Model No.')) }}
			{{ Form::submit('Lookup', array('class' => 'btn btn-lg btn-primary pull-right')) }}
			{{ Form::close() }}
			
			@if(Session::has('demo'))
			<pre id="demo-response">{{ Str::limit(json_encode(Session::get('demo')), 5000) }}</pre>
			@endif
		</div>
		
		<div id="testimonials">
			<div class="page-header">
				<h3>What people have said...</h3>
			</div>
			<blockquote>
				<p>I think I know someone who'll want to use this. They're pretty tight though, so they won't want to pay.</p>
				<small>Steven Briscoe, <cite title="Source Title"><a href="http://stackpad.com" target="_blank" alt="Stackpad">Stackpad.com</a></cite></small>
			</blockquote>
		</div>
		
		<div id="social">
			<div class="page-header">
				<h3>Have your say</h3>
			</div>
			<p>Please let us know what you think or you have any recommendations. Discuss on <a href="https://news.ycombinator.com/item?id=7080782" alt="HN">Hacker News</a> or <a href="http://www.reddit.com/r/webdev/comments/1vio2m/ive_just_put_my_first_api_in_to_beta_its_built_to/" alt="Reddit">Reddit</a></p>
		</div>
		
	</div>
	<footer>
		Built with <i class="glyphicon glyphicon-heart"></i> by the <a href="mailto:greenhooddev@gmail.com" class="greenhood">Greenhood Team</a>. (<a href="http://twitter.com/jonathandey" target="_blank" class="greenhood">@jonathandey</a> &amp; <a href="http://twitter.com/stevenbriscoe" target="_blank" class="greenhood">@stevenbriscoe</a>) - <?= date("Y", time()) ?>.
	</footer>
@stop