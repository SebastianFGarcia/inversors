<?php

namespace App\Http\Controllers;

use App\Models\Entrepreneurship;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class EntrepreneurshipController extends Controller
{
    public function list() : InertiaResponse
    {
        $entrepreneurships = Entrepreneurship::where('user_id', auth()->user()->id)->paginate();
        $entrepreneurships->load('user');
        return Inertia::render('Entrepreneurship/List',[
            'entrepreneurships'=>$entrepreneurships,
        ]);
    }

    
    public function create() : InertiaResponse
    {
        return Inertia::render('Entrepreneurship/Create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'=>'required|string',
            'description'=>'required|string',
            'objective'=>'required|string',
            'projection'=>'required|string',
            'team'=>'required|string',
        ]);

        $entrepreneurship = Entrepreneurship::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'objective'=>$request->objective,
            'projection'=>$request->projection,
            'team'=>$request->team,
            'user_id'=> auth()->user()->id,
        ]);
        return Redirect::route('entrepreneurships.show',$entrepreneurship->id);
    }
    
    public function edit($id) : InertiaResponse
    {
        $entrepreneurship = Entrepreneurship::find($id);
        return Inertia::render('Entrepreneurship/Edit',[
            'entrepreneurship'=>$entrepreneurship,
        ]);
    }
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name'=>'required|string',
            'description'=>'required|string',
            'objective'=>'required|string',
            'projection'=>'required|string',
            'team'=>'required|string',
        ]);
        $entrepreneurship = Entrepreneurship::findOrFail($request->id);
        $entrepreneurship->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'objective'=>$request->objective,
            'projection'=>$request->projection,
            'team'=>$request->team,
        ]);
        return Redirect::route('entrepreneurships.show',$entrepreneurship->id);
    }


    public function show($id) : InertiaResponse
    {
        $entrepreneurship = Entrepreneurship::find($id);
        $entrepreneurship->load('investments.investor_applications.user');

        return Inertia::render('Entrepreneurship/Show',[
            'entrepreneurship'=>$entrepreneurship,
        ]);
    }
}
