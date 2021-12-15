<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class OrderModel
{
    public function getAll()
    {
        return DB::table('events')
            ->select('id', 'name', 'adresse', 'duration', 'day', )
            ->orderBy('name')
            ->get();
    }
}