<h1>Új</h1>
<form action="/api/ptype" method="POST">
    @csrf
    @method("POST")
    <input type="number" name="lesson_id" placeholder="lesson_id"/>
    <input type="text" name="status" placeholder="status"/>
    <input type="number" name="subject_id" placeholder="subject_id"/>
    <input type="number" name="user_id" placeholder="user_id"/>
    <input type="submit" value="Felvitel"/>
</form>

<a href="{{url('/ptype/')}}">Vissza</a>