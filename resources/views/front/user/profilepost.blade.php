<h2>User: {{ $user->id }} - {{ $user->email }}</h2>
<br/>
<h2>Posts:</h2>
@foreach($posts AS $post)
<p> {{ $post->id }}: {{ $post->content }}</p>
@endforeach