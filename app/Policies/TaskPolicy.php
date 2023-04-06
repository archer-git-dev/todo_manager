<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class TaskPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function authTask(?User $user, Task $task)
    {
        if ($user->role === "admin" || Auth::id() == $task->user_id ) {
            return Response::allow();
        }
        return Response::deny();
    }
}
