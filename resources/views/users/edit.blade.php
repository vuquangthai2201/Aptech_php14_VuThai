

<form action="{{route('users.update',$user->id)}}" method="POST">
{{csrf_field()}}
<input type="hidden" name="_method" value="put">
<input type="text" name="name" value="{{$user->name}}">
<button type="submit">update</button>
</form>
