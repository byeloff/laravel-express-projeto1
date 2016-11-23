@extends('template')

@section('content')

	<h1>Create new post</h1>

	@if($errors->any())

		<ul class="alert">
			@foreach($errors->all() as $erro)
				<li>{{ $erro }}</li>
			@endforeach
		</ul>

	@endif

	{!! Form::open(['route'=>'admin.posts.store', 'method' => 'post']) !!}

		@include('admin.posts._form')

		<div class="form-group">
			{!! Form::label('tags', 'Tags:', ['class' => 'control-label']) !!}
			{!! Form::textarea('tags', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection
