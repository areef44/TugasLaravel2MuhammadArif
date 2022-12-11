<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';


    public function kategorie()
    {
        return $this->belongsTo(Kategorie::class, 'kategorie_id');
    }
}
