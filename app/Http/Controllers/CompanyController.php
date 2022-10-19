<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index() {
        return view('index', [
            'companies' => Company::latest()->get(),
        ]);
    }

    public function detail(Company $company) {
        return view('detail', [
            'company' => $company
        ]);
    }

    public function createCompany(Request $request) {
        
        Company::create([
            'name' => $request->name,
            'inn' => $request->inn,
            'info' => $request->info,
            'gen_director' => $request->gen_director,
            'address' => $request->address,
            'tel' => $request->tel
        ]);

        // return $request;
    }
}
