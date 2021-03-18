<?php

namespace App\Repositories;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }

    public function destroy(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}