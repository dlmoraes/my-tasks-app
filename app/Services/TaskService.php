<?php

namespace App\Services;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class TaskService
{

    function myTasks(int $authUserId)
    {
        return Task::join('services', 'tasks.service_id', '=', 'services.id')
            ->select('tasks.*', 'services.name as service_name')
            ->where('tasks.user_id', $authUserId)
            ->orWhereExists(function (Builder $query) use ($authUserId) {
                $query->select(DB::raw(1))
                    ->from('services as s1')
                    ->where('s1.user_id', $authUserId)
                    ->whereColumn('s1.id', 'tasks.service_id');
            })
            ->get();
    }

    function byId(int $taskId)
    {
        return Task::find($taskId);
    }
}
