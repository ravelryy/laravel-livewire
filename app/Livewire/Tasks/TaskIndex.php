<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class TaskIndex extends Component
{
    public $title;
    public $slug;
    public $description;
    public $status;
    public $priority;
    public $deadline;

    public function save()
    {
        $this->validated();
        auth()->user()->tasks()->create($this->only(['title', 'slug', 'description', 'status', 'priority', 'deadline']));

        $this->reset();
    }

    public function render()
    {
        return view('livewire.tasks.task-index')->layout('layouts.app');
    }
}
