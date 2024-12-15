<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mri extends Model
{
    use HasFactory;
    protected $fillable = ['client_id','patient_name' ,'mri_result','mri_result_ar'];
}
