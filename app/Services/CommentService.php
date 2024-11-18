<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class CommentService
{
    function commentsByTaskId(int $taskId)
    {
        return DB::table('comments')
            ->join('users', 'tasks.user_id', '=', 'users.id')
            ->select('comments.id', 'comments.message', 'comments.created_at', 'users.name as created_by')
            ->where('comments.task_id', $taskId)
            ->get();
    }
}
