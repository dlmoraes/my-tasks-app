<?php

namespace App\Livewire;

use App\CompanyEnum;
use App\Models\Service;
use App\Models\Task;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class CreateTaskForm extends Component
{
    public Service $service;
    public $title = '';
    public $description = '';
    public $companies = [];
    public $serviceId;

    public function save()
    {

        /*$this->serviceId = $this->service->id;

        // Test
        $authUserId = 1;

        $this->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'companies' => 'required|array|min:1',
        ]);

        $companies = [];

        foreach ($this->companies as $company) {
            error_log($company);
            $companies[] = CompanyEnum::from($company)->value;
        }

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'companies' => $companies,
            'service_id' => $this->serviceId,
            'user_id' => $authUserId,
        ]);*/

        return Redirect::route('task.index')->info('Já salvei a sua tarefa!');
    }

    public function render()
    {
        return view('livewire.create-task-form');
    }
}
