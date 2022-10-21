<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Field;

class Comment extends Model
{
    protected $fillable = ['field_id', 'text_com'];

    public function toUser() {
        return $this->belongsTo(User::class);
    }

    public function toField() {
        return $this->belongsTo(Field::class);
    }
}
