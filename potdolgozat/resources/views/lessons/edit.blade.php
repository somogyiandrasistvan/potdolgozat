<h1>Szerkesztés</h1>
<form action="/api/ptype/{{$pType->lesson_id}}" method="POST">
    @method("PUT")
    @csrf
    <input type="number" name="lesson_id" value="{{$pType->lesson_id}}" placeholder="lesson_id"/>
    <input type="text" name="status" value="{{$pType->status}}" placeholder="status"/>
    <input type="number" name="subject_id" value="{{$pType->subject_id}}" placeholder="subject_id"/>
    <input type="number" name="user_id" value="{{$pType->user_id}}" placeholder="user_id"/>
    <input type="submit" value="Módosít"/>
</form>

<a href="{{url('/ptype/')}}">Vissza</a>