<x-layout>
    <a href="/events" class="btn btn-secondary">Back</a>
    <a href="/events/edit/{{$event->id}}" class="btn btn-info">Edit</a>
    <a href="/events/delete/{{$event->id}}" class="btn btn-danger">Delete</a>
    <div class="container" style="padding-top: 20px">
        <h2>Title: {{$event->title}}</h2>
        <h2>Notes: {{$event->notes}}</h2>
        <h2>Responsible user: <a href="/users/{{$user->id}}">{{$user->name}}</a></h2>
        <h2>Dates: From {{$event->dt_start}} till {{$event->dt_end}}</h2>
    </div>
</x-layout>
