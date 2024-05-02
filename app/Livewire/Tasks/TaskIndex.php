<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

class TaskIndex extends Component
{
    public TaskForm $form;
    public function save()
    {
        $this->validate();
        auth()->user()->tasks()->create($this->form->all());

        $this->reset();
    }

    public function render()
    {
        return view('livewire.tasks.task-index')->layout('layouts.app');
    }
}
