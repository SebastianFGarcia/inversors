<?php

namespace App\Http\Controllers;

use App\Models\InvestorApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class InvestorApplicationController extends Controller
{
    public function store($id): RedirectResponse
    {
        InvestorApplication::create([
            'user_id'=> auth()->user()->id,
            'investment_id'=>$id,
        ]);
        return Redirect::route('investments');
    }

    public function myInvestor(): InertiaResponse
    {
        $user_id = auth()->user()->id;
        $investments = InvestorApplication::where('user_id',$user_id)->get();
        $investments->load('investment.entrepreneurship');

        return Inertia::render('InvestorApplication/List',[
            'investments'=>$investments
        ]);
    }
}
