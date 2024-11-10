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

    protected $attributes = [
        "companies" => [],
    ];

    public function getCompaniesAttribute($value)
    {
        return array_map(fn($company) => CompanyEnum::from($company), json_decode($value, true));
    }

    public function setStatusesAttribute($value)
    {
        $this->attributes['companies'] = json_encode($value);
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
