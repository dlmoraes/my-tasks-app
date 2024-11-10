<?php

namespace App\Livewire;

use App\CompanyEnum;
use App\Models\Service;
use App\Models\Task;
use Illuminate\Support\Facades\Log;
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

        $this->serviceId = $this->service->id;

        if (!$this->service->exists()) {
            $this->dispatch('notify-created', [
                'type' => 'error',
                'msg' => 'Cara, não encontramos o serviço, tente fazer do início.',
            ]);

            return redirect()->route('home');
        }


        // Test
        $authUserId = 1;

        $this->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'companies' => 'required|array|min:1',
            'serviceId' => 'required'
        ]);

        $companies = array_keys($this->companies);

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'companies' => $companies,
            'service_id' => $this->serviceId,
            'user_id' => $authUserId,
        ]);

        $this->dispatch('notify-created', [
            'type' => 'success',
            'msg' => 'Tudo certo! Criamos sua tarefa.',
        ]);

        return redirect()->route('task.index');
    }

    public function render()
    {
        return view('livewire.create-task-form');
    }
}
