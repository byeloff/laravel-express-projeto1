@extends('template_blog')

@section('title')
	Todos os posts do blog
@stop

@section('content')
	<div class="jumbotron">
		<h1>Bem vindo ao meu blog</h1>
	</div>

	<div class="row">
		@foreach ($posts as $post)
			<div class="col-lg-4">
				<h2>{{ $post['titulo'] }}</h2>
				<p>{{ $post['resumo'] }}</p>
				<p><a class="btn btn-primary" href="{{ url('post/'.$post['id']) }}" role="button">Ver post &raquo;</a></p>
			</div>
		@endforeach
	</div>
@stop