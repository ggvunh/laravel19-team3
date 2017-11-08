<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\promotionRequest;
use App\Promotion;
class PromotionController extends Controller
{
    public function get()
    {
      $promotions = Promotion::orderBy('id','DESC')->get();
        return view('admins.promotions.index', compact('promotions'));
    }
    /**
     * Show the form for creating a new resource.
     */
    
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
    public function edit($id)
    {
      $promotion = Promotion::find($id);
      return view('admins.promotions.edit', compact('promotion'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Promotion $promotion, promotionRequest $request)
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
      // $promotion = Promotion::find($id)->toArray();
      $promotion = Promotion::find($id);
      if($promotion)
      {
        $promotion->delete();
      }
      return redirect('admins/promotions/index');
    }
}