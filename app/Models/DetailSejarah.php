<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSejarah extends Model
{
    use HasFactory;
    protected $table = 'detail_sejarah';
    protected $guarded = ['id'];
}
