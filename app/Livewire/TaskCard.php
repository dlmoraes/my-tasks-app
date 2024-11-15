<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskCard extends Component
{

    public Task $task;
    public $modal = false;

    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function toggleModal()
    {
        $this->modal = !$this->modal;
    }

    public function render()
    {
        return view('livewire.task-card');
    }
}
