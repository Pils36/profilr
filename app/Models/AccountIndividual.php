<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountIndividual extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = "tbl_account_individual";
}
