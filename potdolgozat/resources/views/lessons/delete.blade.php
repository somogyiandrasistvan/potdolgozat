<h1>Törlés</h1>
@foreach ($lessons as $lesson)
    <form action="/api/ptype/{{$lesson->lesson_id}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="{{$lesson->status}}"/>
    </form>
@endforeach

<a href="{{url('/ptype/')}}">Vissza</a>