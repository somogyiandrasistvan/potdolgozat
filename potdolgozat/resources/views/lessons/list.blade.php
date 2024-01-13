<h1>Listázás</h1>
@foreach ($lessons as $lesson)
    <form action="/ptype/edit/{{$lesson->lesson_id}}" method="GET">
        <input type="submit" value="{{$lesson->status}}"/>
    </form>
@endforeach

<a href="{{url('/ptype/new/')}}">Új típus</a><br>
<a href="{{url('/ptype/del/')}}">Elem törlése</a>