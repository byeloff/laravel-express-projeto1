@extends('template')

@section('content')
	<h1>Blog admin</h1>

	<a href="{{ route('admin.posts.create') }}" class="btn btn-success">Create Post</a>

	<br />
	<br />

	<table class="table">
		<tr>
			<th>ID</th>
			<th>Título</th>
			<th>Action</th>
		</tr>
		@foreach($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>
					<a href="{{ route('admin.posts.edit', [$post->id]) }}" class="btn btn-default">Edit</a>
					<a href="{{ route('admin.posts.destroy', [$post->id]) }}" class="btn btn-danger">Destroy</a>
				</td>
			</tr>
		@endforeach

	</table>

	{!! $posts->render() !!}

@endsection
