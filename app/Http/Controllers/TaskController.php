<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use  App\Http\Requests\TaskRequest;
use  App\Http\Requests\TaskUpdateIsDoneRequest;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
      public function createTask( TaskRequest $request){
        try {
            
            Task::create($request->validated());
            return response()->json(null, 200);

        } catch(\Exception $e) {
             return response()->json([
                'success' => false,
                'message' => 'Erro ao criar as tarefas.',
                'error' => $e->getMessage()
            ], 500);
        }
      }
      public function updateTask(TaskRequest $request, $taskid){
        try{
            $task = Task::findOrFail($taskid);
            $task->update($request->validated());
            Log::info($request->validated());
            return response()->json(null,200);
        }
        catch (\Exception $e) {
             return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar tarefa.',
                'error' => $e->getMessage()
            ], 500);
        
        }
        
      }
       public function updateTaskIsDone(TaskUpdateIsDoneRequest $request, $taskid){
        try{
            $task = Task::findOrFail($taskid);
            $task->update($request->validated());
            Log::info($request->validated());
            return response()->json(null,200);
        }
        catch (\Exception $e) {
             return response()->json([
                'success' => false,
                'message' => 'Erro ao atualizar tarefa.',
                'error' => $e->getMessage()
            ], 500);
        
        }
        
      }
      public function getAllTasks(){
        try {
            $tasks = Task::select('id','description', 'title', 'is_done')->orderBy('id','asc')->get();
            return response()->json( $tasks, 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao buscar as tarefas.',
                'error' => $e->getMessage()
            ], 500);
        }

}
        public function getOneTask($taskid){
        try {
           $task = Task::where('id', $taskid)->select('description', 'title', 'is_done')->first();
           return response()->json($task, 200);
        } catch (\Exception $e) {
             return response()->json([
                'success' => false,
                'message' => 'Erro ao buscar tarefa.',
                'error' => $e->getMessage()
            ], 500);
        
        }
    }
    public function deleteTask($taskid){
        try {
             $task = Task::find($taskid);
            
               if (!$task) {
            return response()->json(['message' => 'Tarefa não encontrada.'], 404);
        }
        Log::info($task);
        $task->delete();
        return response()->json(null,200);
        }  catch (\Exception $e) {
             return response()->json([
                'success' => false,
                'message' => 'Erro ao deletar tarefa.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

}
