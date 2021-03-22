<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => "required",
            'description' => "required",
            'image' => "required",
            'categorie' => "required",
        ]);

        $portfolio = Portfolio::create($data);
        $this->storeImage($portfolio);
        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find(intval($id));
        return view('admin.portfolio.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //dd($avant);
        $data = $request->validate([
            'titre' => "required",
            'description' => "required",
            'image' => "required",
            'categorie' => "required",
        ]);
        
        if($portfolio->image){
            $avant = $portfolio->image ;
            unlink('storage/'.$avant);
        }

        $portfolio->update($data);
        $this->storeImage($portfolio);
        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        if($portfolio->delete()){
            $avant = $portfolio->image ;
            unlink('storage/'.$avant);
        }
        return redirect()->route('portfolio.index');
    }

    private function storeImage(Portfolio $portfolio)
    {
       if ($portfolio->image) {
           $portfolio->update([
               'image' => $portfolio->image->store('portfolio','public')
           ]);
       }
    }
}
