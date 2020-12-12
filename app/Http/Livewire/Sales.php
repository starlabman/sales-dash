<?php

namespace App\Http\Livewire;

use App\Service\Stats;
use Livewire\Component;

class Sales extends Component
{
    public $newOrders;

    public $salesAmount;

    public $satisfactions;

    protected $listeners = ['fetchStats' => 'refresh'];

    public function mount()
    {
        $this->assignStats();
    }

    public function refresh()
    {
       $this->assignStats();
    }

    public function render()
    {
        return view('livewire.sales');
    }

    public function assignStats()
    {
        $this ->fill([
            'newOrders' => Stats::newOrders(),
            'salesAmount' => Stats::salesAmount(),
            'satisfactions' => Stats::satisfactions(),
        ]);
    }

    
}
