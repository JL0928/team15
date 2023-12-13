<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animation;
use App\Models\Company;

class AnimationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animations = Animation::all();
        return view('animations.index')->with('animations' , $animations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = company::orderBy('companies.id','asc')->pluck('companies.name','companies.id');
        return view('animations.create',['companies' =>$companies,'companySelected'=> null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $type = $request->input('type');
        $orign = $request->input('orign');   
        $dir = $request->input('dir'); 
        $ep_num = $request->input('ep_num');
        $cp_id = $request->input('cp_id');
        $play_time = $request->input('play_time');

    $animation = Animation::create([
        'name' => $name,
        'type' => $type,
        'orign' => $orign,
        'dir' => $dir,
        'ep_num' => $ep_num,
        'cp_id' => $cp_id,
        'play_time' => $play_time]);
        
        return redirect('animations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animation = Animation::findOrFail($id);
        return view('animations.show')->with('animation' , $animation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animation = Animation::findOrFail($id);
        $companies = company::orderBy('companies.id','asc')->pluck('companies.name','companies.id');
        $selected_tags = $animation->company->id;
        return view('animations.edit',['animation' =>$animation, 'companies'=>$companies,'companySelected'=>$selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animation = Animation::findOrFail($id);
        $animation->name = $request->input('name');
        $animation->type = $request->input('type');
        $animation->orign = $request->input('orign');
        $animation->dir = $request->input('dir');
        $animation->ep_num = $request->input('ep_num');
        $animation->cp_id = $request->input('cp_id');
        $animation->play_time = $request->input('play_time');
        $animation->save();

        return redirect('animations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
        {
        $animation = Animation::findOrFail($id);
        $animation->delete();
        return redirect('animations');
        }    
}
