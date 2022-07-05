<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagsMaterial extends Model
{
    use HasFactory;
    protected $table ='tag_material';
    protected $fillable = [
        'material_id',
        'tag_id'
    ];
}
