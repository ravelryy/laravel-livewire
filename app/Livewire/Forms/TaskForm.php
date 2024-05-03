<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
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

    public function createTask()
    {
        auth()->user()->tasks()->create($this->all());
        request()->session()->flash('success', __('Task created successfully'));
    }
}
