<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        if( Auth::check() ){
            //$companies = Company::all();//retrieve all rows in the Company table
            $companies = Company::where('user_id', Auth::user()->id)->get();
            return view('companies.index', ['companies'=>$companies]);
        }
        return view('auth.login');
=======
        $companies = Company::all();//retrieve all rows in the Company table

        return view('companies.index', ['companies'=>$companies]);


>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('companies.create');
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        if(Auth::check()){
            $company = Company::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'user_id' => Auth::user()->id
            ]);
            if($company){
                return redirect()->route('companies.show', ['company'=> $company->id])
                ->with('success' , 'Company created successfully');
            }
        }
        
        return back()->withInput()->with('errors', 'Error creating new company');
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $company = Company::find($company->id);
        return view('companies.show',['company'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $company = Company::find($company->id);
        return view('companies.edit',['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
<<<<<<< HEAD
        
        $companyUpdate = Company::where('id', $company->id)
        ->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),

        ]);
        if ($companyUpdate ) {
            return redirect()->route('companies.show',['id'=>$company->id])->with('success', 'Company updated successfully.
                ');;
        }
        return back()->withInput();
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
<<<<<<< HEAD
        $findCompany = Company::find( $company->id);
        if($findCompany->delete()){
            
            //redirect
            return redirect()->route('companies.index')
            ->with('success' , 'Company deleted successfully.');
        }
        return back()->withInput()->with('error' , 'Company could not be deleted');
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }
}
