<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
