<x-layout>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
