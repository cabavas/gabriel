<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store (Request $bolinha){
        $bolinha->validate([
            'name'=> ["required","string","max:100"],
            'email'=> ["required","email","max:50","unique:leads,email"],
            'phone'=> ["required","string","max:20","unique:leads,phone"],
            'company'=> ["required","string","max:50"],
        ]);
        Lead::create($bolinha->all());
        return $this->index();
    }

    public function index (){
        $leads = Lead::all();
        return view("leads",compact("leads"));
    }
}
