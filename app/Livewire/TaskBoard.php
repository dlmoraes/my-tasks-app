<?php

namespace App\Livewire;

use Livewire\Component;

class TaskBoard extends Component
{

    public function teste()
    {
        error_log('ok');
        $this->dispatch('notify-created', [
            'type' => 'success',
            'msg' => 'Tudo certo! Criamos sua tarefa.'
        ]);
    }

    public function render()
    {


        return view('livewire.task-board');
    }
}
