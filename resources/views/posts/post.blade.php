@extends('template_blog')

@section('title')
	Postagem
@stop

@section('content')
	<div class="panel">
		<div class="panel-heading">
			<a href="{{ url('posts') }}" class="btn btn-primary">Voltar</a>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<h2>{{ $post['titulo'] }}</h2>
			<p>{{ $post['texto'] }}</p>
		</div>
	</div>
@stop