<h1>
    Users
</h1>

<table>
    <tr>
        <th>Username</th>
        <th>Actions</th>
        <th>Role</th>
    </tr>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
            <td><a href="{{url("role/$user->id/create")}}">Add Role</a></td>
                @foreach($user->roles as $role)
                    <td>{{$role->name}}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>

</table>

