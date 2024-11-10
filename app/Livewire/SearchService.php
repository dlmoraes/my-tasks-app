<?php

namespace App\Livewire;

use App\Services\ServiceService;
use Livewire\Component;

class SearchService extends Component
{
    public $search = '';
    public $services = [];

    public function loadServices()
    {
        if (strlen($this->search) > 2) {
            sleep(1);
            $this->services = (new ServiceService())->getServices($this->search);
        }
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->services = [];
    }

    public function render()
    {
        return view('livewire.search-service');
    }
}
