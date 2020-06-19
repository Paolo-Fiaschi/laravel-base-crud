<?php

namespace App\Http\Controllers;
use App\Omino;
use Illuminate\Http\Request;

class OminiController extends Controller
{
    public function index()
    {
        $omini = Omino::all();

        return view('home', compact('omini'));
    }
    public function showOmino($id)
    {
        $omino = Omino::findOrFail($id);
        return view('showOmino', compact('omino'));
    }
    public function delete($id)
    {
        $omino = Omino::findOrFail($id);
        $omino -> delete();
        return redirect()
                    -> route('home')
                    -> withSuccess('User delete succesfully');
    }
    public function create()
    {

        return view('create');
    }
    public function store(Request $request)
    {
        $validateData = $request -> validate([
            'firstname' => 'required|regex:/^[\pL\s\-]+$/u',
            'lastname' => 'required|regex:/^[\pL\s\-]+$/u',
            'phoneNumber' => 'required',
            'address' => 'required',
            'code' => 'required|numeric',
            'state' => 'required',
            'role' => 'required'
        ]);

        $omino = new Omino;

        $omino -> firstname = $validateData['firstname'];
        $omino -> lastname = $validateData['lastname'];
        $omino -> phoneNumber = $validateData['phoneNumber'];
        $omino -> address = $validateData['address'];
        $omino -> code = $validateData['code'];
        $omino -> state = $validateData['state'];
        $omino -> role = $validateData['role'];

        $omino -> save();

        return redirect()
                        -> route('home')
                        -> withSuccess($validateData['firstname']
                                    . ' '
                                    . 'created succesfully');
    }
    public function edit($id)
    {
        $omino = Omino::findOrFail($id);

        return view('edit', compact('omino'));
    }
    public function update(Request $request, $id)
    {
        $validateData = $request -> validate([
            'firstname' => 'required|regex:/^[\pL\s\-]+$/u',
            'lastname' => 'required|regex:/^[\pL\s\-]+$/u',
            'phoneNumber' => 'required',
            'address' => 'required',
            'code' => 'required|numeric',
            'state' => 'required',
            'role' => 'required'
        ]);
        $omino = Omino::findOrFail($id);

        $omino -> firstname = $validateData['firstname'];
        $omino -> lastname = $validateData['lastname'];
        $omino -> phoneNumber = $validateData['phoneNumber'];
        $omino -> address = $validateData['address'];
        $omino -> code = $validateData['code'];
        $omino -> state = $validateData['state'];
        $omino -> role = $validateData['role'];

        $omino -> save();

        return redirect()
                    -> route('home')
                    -> withSuccess('Update'
                                . ' '
                                . $validateData['firstname']
                                . ' '
                                . 'succesfully');


    }
}
