<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Events\RealtimeNotification;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Realtime extends Component
{
    use LivewireAlert;

    public $message;

    public function render()
    {
        return view('livewire.realtime');
    }

    public function triggerEvent()
    {
        event(new RealtimeNotification($this->message));
        $this->message = '';
    }

    #[On('echo:my-channel,RealtimeNotification')]
    public function handleRealtimeNotification($messages)
    {
        $this->alert('success', $messages['message']);
    }
}
