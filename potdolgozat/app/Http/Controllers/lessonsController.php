<?php

namespace App\Http\Controllers;

use App\Models\lessons;
use Illuminate\Http\Request;

class lessonsController extends Controller
{
    public function index()
    {
        $lessons = response()->json(lessons::all());
        return $lessons;
    }

    public function show($id)
    {
        $lessons = response()->json(lessons::find($id));
        return $lessons;
    }

    public function destroy($id)
    {
        lessons::find($id)->delete();
        return redirect('/lessons/list');
    }

    public function store(Request $request)
    {
        $lessons = new lessons();
        $lessons->title = $request->title;
        $lessons->description = $request->description;
        $lessons->end_date = $request->end_date;
        $lessons->user_id = $request->user_id;
        $lessons->status = $request->status;
        $lessons->save();
        return redirect('/lessons/list');
    }

    public function update(Request $request, $id)
    {
        $lessons = lessons::find($id);
        $lessons->title = $request->title;
        $lessons->description = $request->description;
        $lessons->end_date = $request->end_date;
        $lessons->user_id = $request->user_id;
        $lessons->status = $request->status;
        $lessons->save();
        return redirect('/lessons/list');
    }

    public function listView()
    {
        $lessons = lessons::all();
        return view('lessons.list', ['lessons' => $lessons]);
    }

    public function newView()
    {
        $users = lessons::all();
        return view('lessons.new', ['users' => $users]);
    }

    public function editView($id)
    {
        $users = lessons::all();
        $lessons = lessons::find($id);
        return view('lessons.edit', ['users' => $users, 'lessons' => $lessons]);
    }
}
