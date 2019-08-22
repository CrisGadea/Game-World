@extends("layouts.app")

@section("content")
	<div class="container"><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1>Users</h1>
		<ul>
			@foreach($users as $user)
				<li>
					<h2>{{$user->name}}</h2>
					<div class= "well">
						@foreach($user->posts as $post)
							<strong>{{$post->title}}</strong>
						@endforeach
					</div>
				</li>
			@endforeach
		</ul>
	</div></div></div>
@endsection