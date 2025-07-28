<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
      public function getAllTasks(Request  $request){
        try {
            $tasks = Task::select('description', 'title', 'is_done')->get();
            return response()->json([
                'success' => true,
                'data' => $tasks,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao buscar as tarefas.',
                'error' => $e->getMessage()
            ], 500);
        }

    }
}
