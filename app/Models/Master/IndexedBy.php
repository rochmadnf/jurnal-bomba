<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexedBy extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'version', 'order', 'width'];
}
