<x-layout>
    <a href="/users" class="btn btn-secondary">Back</a>
    <a href="/users/edit/{{$user->id}}" class="btn btn-info">Edit User</a>
    <a href="/users/delete/{{$user->id}}" class="btn btn-danger">Delete User</a>
    <div class="container" style="padding-top: 20px">
        <h2>Name: {{$user->name}}</h2>
        <h2>Email: {{$user->email}}</h2>
        <h2>Events:<br> @foreach($events as $event)
                <a href="/events/{{$event->id}}">{{$event->title}}</a><br>
            @endforeach</h2>
    </div>
</x-layout>
