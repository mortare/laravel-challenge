<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class Event_Controller extends Controller
{
    public function index()
    {
      $registers = Event::all();
      return view('admin.events.index',compact('registers'));
    }
    public function add()
    {
      return view('admin.events.add');
    }
    public function save(Request $req)
    {
      $data = $req->all();


    Event::create($data);

    return redirect()->route('admin.events');

    }

    public function edit($id)
    {
      $register = Event::find($id);
      return view('admin.events.edit',compact('register'));
    }

    public function update(Request $req , $id)
    {
      $data = $req->all();


    Event::find($id)->update($data);

    return redirect()->route('admin.events');

    }

    public function del($id)
    {
      Event::find($id)->delete();
      return redirect()->route('admin.events');
    }
}
