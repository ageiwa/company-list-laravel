<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Field extends Model
{
    protected $fillable = ['company_id', 'field'];

    public function toCompany() {
        return $this->belongsTo(Company::class);
    }
}
