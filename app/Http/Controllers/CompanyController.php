<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Company;
use App\Models\Field;
use Illuminate\Support\Facades\Schema;

class CompanyController extends Controller
{
    public function index() {
        return view('index', [
            'companies' => Company::get(),
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

        $company = Company::latest()->first();
        $collumns = ['Компания', 'Название', 'ИНН', 'Общая информация', 'Генеральный директор', 'Адрес', 'Телефон'];

        foreach ($collumns as $collumn) {
            Field::create([
                'company_id' => $company->id,
                'field' => $collumn
            ]);
        }
        
        $response = 
        '<div class="company">
            <h2 class="company__name">'. $company->name .'</h2>
            <p class="company__info">'. $company->info .'</p>
            <a class="company__link" href="/'. $company->id .'">Подробнее</a>
        </div>';

        return $response;
    }
}
