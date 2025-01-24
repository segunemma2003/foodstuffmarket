<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormBuilder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'fields' => 'array',
    ];

    public function responses()
    {
        return $this->hasMany(FormBuilderResponse::class,'form_builder_id');
    }
}
