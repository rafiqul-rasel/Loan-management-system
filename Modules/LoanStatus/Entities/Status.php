<?php

namespace Modules\LoanStatus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $table='statuses';

    protected static function newFactory()
    {
        return \Modules\LoanStatus\Database\factories\StatusFactory::new();
    }
}
