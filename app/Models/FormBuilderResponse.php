<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormBuilderResponse extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    protected $casts = [
        'data' => 'array',
    ];

    public function form()
    {
        return $this->belongsTo(FormBuilder::class, 'form_builder_id');
    }
}
