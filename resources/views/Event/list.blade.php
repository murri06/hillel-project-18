<x-layout>
    <table class="table table-striped">
        <tr>
            <th>Title</th>
            <th>Notes</th>
            <th>Start date</th>
            <th>End date</th>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                <td>{{$event->notes}}</td>
                <td>{{$event->dt_start}}</td>
                <td>{{$event->dt_end}}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
