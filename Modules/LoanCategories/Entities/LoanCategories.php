<?php

namespace Modules\LoanCategories\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoanCategories extends Model
{
    protected $table="locancategories";
    use HasFactory;

    protected $fillable = [];


}
