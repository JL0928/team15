<?php

namespace App\Http\Controllers;

use App\Models\Animation;
use App\Models\Company;
use App\Http\Requests\CreateCompanyRequest;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //從Model拿資料
        $companies = Company::all();
        //送到view
        return view('companies.index')->with('companies',$companies);
    }

    public function up10years()
    {
        $companies = Company::Years(now()->subYear(10))->get();
        return view('companies.index')->with('companies',$companies);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCompanyRequest $request)
    {
        $name = $request->input("name");
        $create = $request->input("create");
        $founder = $request->input("founder");
        $head = $request->input("head");
        $address = $request->input("address");

        Company::create([
            'name'=>$name,
            'create'=>$create,
            'founder'=>$founder,
            'head'=>$head,
            'address'=>$address
        ]);

        return redirect('companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        $animations = $company -> animations;
        return view('companies.show', ['company'=>$company, 'animations'=>$animations]);
       //return Company::findOrFail($id)->toArray();
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
        parent::edit($id);

        $company = Company::findOrFail($id);
        return view('companies.edit', ['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCompanyRequest $request, $id)
    {
        $company = Company::findOrFail($id);

        $company-> name = $request->input('name');
        $company-> create = $request->input('create');
        $company-> founder = $request->input('founder');
        $company-> head = $request->input('head');
        $company-> address = $request->input('address');
        $company->save();

        return redirect('companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect('companies');
    }
}
