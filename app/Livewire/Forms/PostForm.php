<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:10'])]
    public $title = '';
    #[Rule(['required'])]
    public $body = '';

    public function store()
    {
        $post = Auth::user()->posts()->create($this->validate());

        flash('Berhasil membuat post', 'success');

        $this->reset();
        return $post;
    }
}
