<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetupSdm extends Model
{
    use HasFactory;
    protected $table = 'setup_sdm';
    protected $guarded = ['id'];
}
