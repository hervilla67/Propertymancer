<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;

    protected $table = 'admins';
    const UPDATED_AT = 'admin_updated_at';
    const CREATED_AT = 'admin_created_at';
}
