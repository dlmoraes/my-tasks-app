<?php

namespace App\Models;

use App\CompanyEnum;
use App\TaskStatus;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "title",
        "description",
        "companies",
        "status",
        "ends_at",
        "closed_on",
        "is_accepted",
        "user_id",
        "service_id",
    ];

    public function casts()
    {
        return [
            "companies" => "array",
            "ends_at" => "datetime",
            "closed_on" => "datetime",
            "status" => TaskStatus::class,
        ];
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
