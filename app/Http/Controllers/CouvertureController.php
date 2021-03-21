<?php

namespace App\Http\Controllers;

use App\Couverture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CouvertureController extends Controller
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
        $couvertures = Couverture::all();
        return view('admin.couverture.index',compact('couvertures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.couverture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($avant);
        $data = $request->validate([
            'animation' => "required",
            'petit_titre' => "required",
            'gros_titre' => "required",
            'url_boutton' => "required",
            'image' => "image|required"
        ]);

        $couverture =  Couverture::create($data);
        $this->storeImage($couverture);

        return redirect()->route('couverture.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($couverture)
    {
        $id = intval($couverture);
        $couverture = Couverture::find($id);
        return view('admin.couverture.show',compact('couverture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Couverture $couverture)
    {
        //dd($avant);
        $data = $request->validate([
            'animation' => "required",
            'petit_titre' => "required",
            'gros_titre' => "required",
            'url_boutton' => "required",
            'image' => "image|required"
        ]);

        if($couverture->image){
            $avant = $couverture->image ;
            unlink('storage/'.$avant);
        }

        $couverture->update($data);
        $this->storeImage($couverture);

        return redirect()->route('couverture.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Couverture $couverture)
    {
        $image = $couverture->image ;
        if($couverture->delete()){
            unlink('storage/'.$image);
        };
        return redirect()->route('couverture.index');
    }
    
    private function storeImage(Couverture $couverture)
    {
       if ($couverture->image) {
           $couverture->update([
               'image' => $couverture->image->store('couverture','public')
           ]);
       }
    }
}
