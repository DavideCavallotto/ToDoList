<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;

    public $name;

    public $search;

    public function create() {
        // 1 procedere con la validazione
        $validated = $this->validate([
            'name' => 'required|min:5'
        ]);
        // 2 creazione 
        Todo::create($validated);
        // 3 reset dell'input
        $this->reset('name');
        // 4 messaggio di completamento
        session()->flash('success', 'Task creato con successo.');
    }

    public function paginationView() {
        return 'custom-pagination-links-view';
    }

    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => Todo::where('name', 'like', "%{$this->search}%")->paginate(5)
        ]);
       
    }
}
