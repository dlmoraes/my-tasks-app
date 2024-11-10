<?php

namespace  App\Services;

use App\Models\Service;

class ServiceService
{

    public function getServices($search = null)
    {
        return Service::query()
            ->select('id', 'name')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->orderBy('name', 'asc')
            ->get();
    }
}
