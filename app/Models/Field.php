<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Comment;

class Field extends Model
{
    protected $fillable = ['company_id', 'field'];

    public function toCompany() {
        return $this->belongsTo(Company::class);
    }

    public function toComment() {
        return $this->hasMany(Comment::class);
    }
}
