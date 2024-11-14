<?php

namespace App\Livewire;

use App\Services\TaskService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskBoard extends Component
{

    public $tasks = [];
    public $taskSelectedId;
    public $taskSelected;
    public $modal = false;

    public function mount()
    {
        if (Auth::check()) {
            $authUser = Auth::user();
        } else {
            return redirect()->route('home');
        }

        $this->tasks = (new TaskService())->myTasks($authUser->id);
    }

    public function setSTaskSelected($taskId)
    {
        $this->taskSelectedId = $taskId;
        $this->taskSelected = (new TaskService())->byId($taskId);
        $this->modal = true;
    }

    public function render()
    {
        return view('livewire.task-board');
    }
}
