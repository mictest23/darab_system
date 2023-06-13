<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;


    protected $fillable = [
        'docket_number',
        'date_filed',
        'cabinet',
        'nature',
        'petitioners',
        'lessor',
        'lessee',
        'location',
        'date_alhc',
        'area',
        'crops',
        'counsel',
        'name',
        'file_path'
    ];



    public function scopeSearch($query, $term){
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('docket_number', 'like', $term);
        });
    }
}
