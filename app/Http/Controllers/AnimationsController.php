<?php

namespace App\Http\Controllers;

use App\Models\Animation;
use App\Models\Company;
use App\Http\Requests\CreateAnimationRequest;
use Illuminate\Http\Request;

class AnimationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //從Model拿資料
        $animations = Animation::all();
        //送到view
        return view('animations.index')->with('animations',$animations);
    }

    public function spring_season()
    {   
        //get data from model
        $animations = Animation::Season(3,5)->get();
        //take date to view
        return view('animations.index')->with('animations',$animations);
    }
    public function summer_season()
    {   
        //get data from model
        $animations = Animation::Season(6,8)->get();
        //take date to view
        return view('animations.index')->with('animations',$animations);
    }
    public function fall_season()
    {   
        //get data from model
        $animations = Animation::Season(9,11)->get();
        //take date to view
        return view('animations.index')->with('animations',$animations);
    }
    public function winter_season()
    {   
        //get data from model
        $animations = Animation::SeasonSP(12,2)->get();
        //take date to view
        return view('animations.index')->with('animations',$animations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::orderBy('companies.id','asc')->pluck('companies.name','companies.id');
        return view('animations.create', ['companies'=>$companies, 'companySelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAnimationRequest $request)
    {
        $name = $request->input('name');
        $cp_id = $request->input('cp_id');
        $type = $request->input('type');
        $orign = $request->input('orign');
        $dir = $request->input('dir');
        $ep_num = $request->input('ep_num');
        $play_time = $request->input('play_time');

        $animation = Animation::create([
            'name'=>$name,
            'cp_id'=>$cp_id,
            'type'=>$type,
            'orign'=>$orign,
            'dir'=>$dir,
            'ep_num'=>$ep_num,
            'play_time'=>$play_time
        ]);
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
        return view('animations.show')->with('animation',$animation);
        //return Animation::findOrFail($id)->toArray();
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
        $animation = Animation::findOrFail($id);
        $companies = Company::orderBy('companies.id','asc')->pluck('companies.name','companies.id');
        $selected_tags = $animation->company->id;
        return view('animations.edit',['animation' =>$animation,'companies'=>$companies,'companySelected' => $selected_tags]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateAnimationRequest $request, $id)
    {
        $animation = Animation::findOrFail($id);

        $animation -> name = $request->input('name');
        $animation -> cp_id = $request->input('cp_id');
        $animation -> type = $request->input('type');
        $animation -> orign = $request->input('orign');
        $animation -> dir = $request->input('dir');
        $animation -> ep_num = $request->input('ep_num');
        $animation -> play_time = $request->input('play_time');
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
        $animation-> delete();
        return redirect('animations');
        
    }
}
