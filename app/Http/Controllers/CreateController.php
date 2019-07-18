<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CreateController extends Controller
{
    public function index()
    {
        return view('create');

    }

    public function Create()
    {
        $attributes=request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        DB::Table('companies')->insert(['name'=>$attributes['name'],'description' => $attributes['description']]);

        return back();

    }

    public function CreateEmployers()
    {
       
        $attributes=request()->validate([
            'company_id' =>'required',
            'emp_name' => 'required'

        ]);
       
        DB::Table('employess')->insert(['name'=>$attributes['emp_name'],'company_id' => $attributes['company_id']]);

        return back();
    }

}
