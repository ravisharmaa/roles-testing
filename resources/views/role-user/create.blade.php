<form action="{{route('role-user.store',$user->id)}}" method="POST">
    {{ csrf_field() }}
@foreach ($roles as $role)
    <input type="checkbox" name="role[]" value="{{$role->name}}">{{$role->name}}   
@endforeach
    <input type="submit" value="Add Roles">
</form>