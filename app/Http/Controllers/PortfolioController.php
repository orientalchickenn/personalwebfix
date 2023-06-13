<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolio = portfolio::all();
        return view('portfolio.index', compact(['portfolio']));
    }
    public function create(Request $request){
        return view('portfolio.create');
    }
    public function store(Request $request){
        portfolio::create($request->all());
        return redirect()->route('portfolio');
    }
    public function edit($id){
        $portfolio = Portfolio::find($id);
        return view('portfolio.edit',compact(['portfolio']));
    }
    public function update($id, Request $request){

        $portfolio = Portfolio::find($id);
        $portfolio->name = $request->name;
        $portfolio->desc = $request->desc;
        $portfolio->update($request->except(['_token','submit']));
        return redirect('/portfolio');
    }
    public function destroy($id){
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect('/portfolio');
    }
}
