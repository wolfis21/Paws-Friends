<?php

namespace App\Http\Controllers\moduloServicios;

use App\Models\moduloServicios\Housing;
use App\Http\Controllers\Controller;
use App\Models\moduloServicios\Housings_has_comments;
use Illuminate\Http\Request;

class HousingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //todo funciones admin

    public function housingAdmin(){
        $housings = Housing::all();
        $housingsComments = Housings_has_comments::all();
        return view('moduloServicios.housings.admin.index')
        ->with('housings', $housings)
        ->with('housingsComments', $housingsComments);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createHousing(){
        $housing = new Housing();
        return view('moduloServicios.housings.admin.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeHousing(Request $request){
        $request->validate([
            'address' => 'required|string|min:3',
            'phone' => 'required|unique:housings|alpha_num|min_digits:3',
            'description_location' => 'required|string|min:6',
            'type_animals' => 'required',
            'food_offer' => 'required',
            'link_ref' => 'nullable',
            'img_ref' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $housing = $request->all();

        if ($image = $request->file('img_ref')) {
            $path = 'admin/images/housings';
            $imageName = date('YmdHis')."_".$image->getClientOriginalExtension();
            $image->move($path, $imageName );
            $housing['img_ref'] = "$imageName";
        }
        Housing::create($housing);
        return redirect()->route('housingAdmin');
    }
        /**
     * Display the specified resource.
     */
    public function showHousing(string $id){
        $housing = Housing::find($id);
        return view('moduloServicios.housings.admin.show')->with('housing', $housing);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function editHousing(string $id){
        $housing = Housing::find($id);
        return view('moduloServicios.housings.admin.edit')->with('housing', $housing);
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateHousing(Request $request, string $id){
        $request->validate([
            'address' => 'required|string|min:3',
            'phone' => 'required|unique:housings|alpha_num|min_digits:3',
            'description_location' => 'required|string|min:6',
            'type_animals' => 'required',
            'food_offer' => 'required',
            'link_ref' => 'nullable',
            'img_ref' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $housing = Housing::findOrFail($id);
        $housingReq = $request->all();
        if ($image = $request->file('img_ref')) {
            $path = 'admin/images/housings';
            $imageName = date('YmdHis')."_".$image->getClientOriginalExtension();
            $image->move($path, $imageName );
            $housingReq['img_ref'] = "$imageName";
        }else{
            unset($housingReq['img_ref']);
        }

        $housing->update($housingReq);
        return redirect()->route('housingAdmin');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroyHousing(string $id){
        $housing = Housing::find($id);
        $path = public_path().'/admin/images/housings/'.$housing->img_ref;
        unlink($path);
        $housing->delete();
        return redirect()->route('housingAdmin');
    }
    //todo funciones user
    public function housingUser()
    {
        return view('moduloServicios.housings.user.index');
    }
}
