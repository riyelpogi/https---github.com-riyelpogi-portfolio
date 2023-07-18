<?php

namespace App\Http\Livewire;

use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{
    public $message;
    public $rules = [
        'message' => ['required', 'min:1']
    ];
    public function storeMessage()
    {
        $this->validate();
        ModelsMessage::create([
            'message' => $this->message
        ]);
        $this->reset();
    }


    public function render()
    {
        return view('livewire.message');
    }
}
