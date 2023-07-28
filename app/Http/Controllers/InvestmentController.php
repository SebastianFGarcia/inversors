<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\InvestorApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class InvestmentController extends Controller
{
    public function list(Request $request) : InertiaResponse
    {
        $userId = auth()->user()->id;
        $investments = Investment::whereDoesntHave('investor_applications', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->paginate(5);
        $investments->load('entrepreneurship');
        return Inertia::render('Investment/List',[
            'investments'=>$investments,
        ]);
    }

    public function create($id) : InertiaResponse
    {
        return Inertia::render('Investment/Create',['id'=>$id]);
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'money'=>'required|string',
            'terms'=>'required|string',
            'benefits'=>'required|string',
            'description'=>'required|string',
        ]);

        $investment = Investment::create([
            'money'=>$request->money,
            'description'=>$request->description,
            'benefits'=>$request->benefits,
            'terms'=>$request->terms,
            'entrepreneurship_id'=> $request->entrepreneurship_id,
        ]);
        return Redirect::route('entrepreneurships.show',$request->entrepreneurship_id);
    }
    public function edit($id) : InertiaResponse
    {
        $investment = Investment::findOrFail($id);
        return Inertia::render('Investment/Edit',['investment'=>$investment]);
    }

    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'money'=>'required|numeric',
            'terms'=>'required|string',
            'benefits'=>'required|string',
            'description'=>'required|string',
        ]);
        $investment = Investment::findOrFail($request->id);
        $investment->update([
            'money'=>$request->money,
            'description'=>$request->description,
            'benefits'=>$request->benefits,
            'terms'=>$request->terms,
        ]);
        return Redirect::route('entrepreneurships.show',$investment->entrepreneurship_id);
    }
}
