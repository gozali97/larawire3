<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact')]

class Contact extends Component
{

    public function render()
    {
        sleep(1);
        return view('livewire.contact');
    }
}
