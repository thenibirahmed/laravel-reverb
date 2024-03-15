<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Realtime extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.realtime');
    }

    public function handleRealtimeNotification()
    {
        $this->alert('success', 'This is a success message');
    }
}
