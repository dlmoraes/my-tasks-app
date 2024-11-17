<?php

namespace App\Livewire;

use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class TaskBoard extends Component
{

    public $tasks = [];
    public $taskSelected;
    public $modal = false;

    public function toggleModal()
    {
        $this->modal = !$this->modal;
    }

    public function getGroupName($status)
    {
        return match ($status) {
            'open' => "Aberto",
            'closed' => "Finalizado",
            'canceled' => "Cancelado",
            'in-progress' => "Em Andamento",
        };
    }

    public function selectedTask(int $taskId)
    {
        if ($taskId) {
            $selected = (new TaskService())->byId($taskId);
            $this->taskSelected = $selected;
            $this->modal = true;
        }
    }

    public function mount()
    {
        if (Auth::check()) {
            $authUser = Auth::user();
        } else {
            return redirect()->route('home');
        }

        $this->tasks = (new TaskService())->myTasks($authUser->id);
    }

    public function render()
    {
        return view('livewire.task-board');
    }
}
