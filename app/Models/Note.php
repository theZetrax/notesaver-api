<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    public function getCreatedDate()
    {

        return date('M-d-y', strtotime($this->created_at));
    }
}
