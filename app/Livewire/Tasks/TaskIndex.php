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

    protected $rules = [
        'title' => 'required|min:5',
        'slug' => 'required|min:5',
        'description' => 'required',
        'deadline' => 'required',
    ];

    public function save()
    {
        $this->validate();
        auth()->user()->tasks()->create($this->only(['title', 'slug', 'description', 'status', 'priority', 'deadline']));

        $this->reset();
    }

    public function render()
    {
        return view('livewire.tasks.task-index')->layout('layouts.app');
    }
}
