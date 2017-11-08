<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Requests\PromotionRequest;
=======
use App\Http\Requests\promotionRequest;
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
use App\Promotion;

class PromotionController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     
     */
    // public function index()
    // {
    //     return redirect('admins/promotions/index');
    // }


=======
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
    public function get()
    {
      $promotions = Promotion::orderBy('id','DESC')->get();
        return view('admins.promotions.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     */
<<<<<<< HEAD
    public function view()
    {
       $promotions = Promotion::all();
        return view('admins.promotions.index', compact('promotions'));
    }
=======
    
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130

    public function create()
    {
        return view('admins.promotions.create');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function save(PromotionRequest $request)
    {   
      $data = $request->all();
<<<<<<< HEAD
=======

>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
      $promotion = Promotion::create($data);
      return redirect('admins/promotions/index');
    }

    /**
     * Display the specified resource.
     
     */
    public function show($id)
    {
        $promotion = Promotion::find($id);
        return view('admins.promotions.show', compact(['promotion']));
    }

    /**
     * Show the form for editing the specified resource.
     
     */
<<<<<<< HEAD
    public function edit(Promotion $promotion)
    {
        return view('admins.promotions.edit', compact('promotion'));
=======
    public function edit($id)
    {
    	$promotion = Promotion::find($id);
    	return view('admins.promotions.edit', compact('promotion'));
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Promotion $promotion, CheckPromotionRequest $request)
=======
    public function update(Promotion $promotion, promotionRequest $request)
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
    {
        $data = $request->all();
        $promotion->update($data);
        return redirect('admins/promotions/index');
    }

    /**
     * Remove the specified resource from storage.
     
     */
    public function delete($id)
    {
<<<<<<< HEAD
      Promotion::find($id)->delete();
      return redirect()->route('admins.promotions.index');
=======
      // $promotion = Promotion::find($id)->toArray();
      $promotion = Promotion::find($id);
      if($promotion)
      {

      	$promotion->delete();
      }
      return redirect('admins/promotions/index');
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
    }
}
