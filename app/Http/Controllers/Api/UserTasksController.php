<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserTasksController extends Controller
{
    public function index(User $user)
    {
  
        return TaskResource::collection($user->tasks);
    }
}
