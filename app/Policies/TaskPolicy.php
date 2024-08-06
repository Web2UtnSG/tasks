<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    

    public function update(User $user, Task $task): bool
    {         // $task->user->is($user);
        return $user->id === $task->user_id;
    }

   
    public function delete(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

   
}
