<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Field;

class Company extends Model
{
    protected $fillable = ['name', 'inn', 'info', 'gen_director', 'address', 'tel'];

    public function toField() {
        return $this->hasMany(Field::class);
    }
}
