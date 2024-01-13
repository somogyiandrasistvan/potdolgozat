<?php

namespace App\Http\Controllers;

use App\Models\lessons;
use Illuminate\Http\Request;

class lessonsController extends Controller
{
    function listView() {
        return view("lessons.list", ["lessons" => lessons::all()]);
    }

    function editView($id) {
        return view("lessons.edit", ["pType" => lessons::find($id)]);
    }

    function newView() {
        return view("lessons.new");
    }

    function delView() {
        return view("lessons.delete", ["lessons" => lessons::all()]);
    }
    
    //API
    function list() {
        return response()->json(lessons::all());
    }

    function edit(Request $request, $id) {
        $pType = lessons::find($id);
        $pType->lesson_id = $request->lesson_id;
        $pType->status = $request->status;
        $pType->subject_id = $request->subject_id;
        $pType->user_id = $request->user_id;
        $pType->save();
        return redirect("/ptype");
    }
    
    function new(Request $request) {
        $pType = new lessons();
        $pType->lesson_id = $request->lesson_id;
        $pType->status = $request->status;
        $pType->subject_id = $request->subject_id;
        $pType->user_id = $request->user_id;
        $pType->save();
        return redirect("/ptype");
    }

    function del($id) {
        lessons::find($id)->delete();
        return redirect("/ptype");
    }
}
