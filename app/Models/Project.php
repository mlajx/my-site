<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Ordered;

class Project extends Model
{
    use HasFactory, Ordered;
}
