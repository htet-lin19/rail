<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RailController extends Controller
{

    public function index()
    {
        $lists = DB::table('way')->get();
        return view("rail", ["lists" => $lists]);
    }

    public function add()
    {
        return view("create");
    }

    public function create(Request $req)
    {
        DB::table('way')->insert([
            'name' => $req->input("name"),
            'code' => $req->input("code"),
            'type' => $req->input("type")
        ]);

        return redirect('/rail');
    }

    public function edit($id)
    {
        $result = DB::table("way")
            ->where("id", "=", $id)
            ->first();
        return view("edit", compact("result"));
    }

    public function update(Request $req)
    {
        DB::table('way')
            ->where('id', $req->id)
            ->update(['name' => $req->name, 'code' => $req->code, 'type' => $req->type]);
        return redirect('/rail');
    }

    public function delete($id)
    {
        DB::table('way')
            ->where('id', '=', $id)->delete();
        return redirect('/rail');
    }
}
