
@foreach($users as $key=>$user)
<div>{{$key+1}} - This is {{$user->name}}

<!-- <a href="http://localhost/aptech-php-14-namnh/php/11-2018-10-02/public/users/{{$user->id}}"><button>Xem</button></a> -->
<!-- <form action="http://localhost/aptech-php-14-namnh/php/11-2018-10-02/public/users/{{$user->id}}" method="GET">
<button>Xem</button>
</form> -->
<!-- <form action="{{asset('/users')}}/{{$user->id}}" method="GET">
<button>Xem</button>
</form> -->
<form action="{{route('users.show',$user->id)}}" method="GET">
<button>Xem</button>
</form>





<form action="{{route('users.destroy',$user->id)}}" method="POST">
{{csrf_field()}}
<input type="hidden" name="_method" value="delete">
<button>xoa</button>
</form>


<form action="{{route('users.edit',$user->id)}}" method="GET">
<button>sua</button>
</form>
</div>

@endforeach
