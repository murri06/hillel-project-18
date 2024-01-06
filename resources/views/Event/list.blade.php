<x-layout>
    <a href="/events/create" class="btn btn-primary">Create new</a>
    <table class="table table-striped">
        <tr>
            <th>Title</th>
            <th>Notes</th>
            <th>Start date</th>
            <th>End date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                <td>{{$event->notes}}</td>
                <td>{{$event->dt_start}}</td>
                <td>{{$event->dt_end}}</td>
                <td><a href="/events/edit/{{$event->id}}"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="/events/delete/{{$event->id}}"><i class="bi bi-trash3"></i></a></td>
            </tr>
        @endforeach
    </table>
</x-layout>
