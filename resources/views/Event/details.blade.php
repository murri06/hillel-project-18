<x-layout>
    <a href="/events" class="btn btn-secondary">Back</a>
    <div class="container" style="padding-top: 20px">
        <h2>Title: {{$event->title}}</h2>
        <h2>Notes: {{$event->notes}}</h2>
        <h2>Responsible user: <a href="/users/{{$user->id}}">{{$user->name}}</a></h2>
        <h2>Dates: {{$event->dt_start}} - {{$event->dt_end}}</h2>
    </div>
</x-layout>
