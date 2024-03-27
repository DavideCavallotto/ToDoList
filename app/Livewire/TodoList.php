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
    public $editTodoId;
    public $editTodoName;

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

    public function delete($todoId) {
        Todo::find($todoId)->delete();
    }

    public function edit($todoId) {
        $this->editTodoId = $todoId;
        $this->editTodoName = Todo::find($todoId)->name;
    }

    public function update() {

        $validatedEditTodoName = $this->validate([
            'editTodoName' => 'required|min:5'
        ]);

        Todo::find($this->editTodoId)->update([
            'name' => $validatedEditTodoName['editTodoName']
        ]);

        $this->cancelEdit();
    }

    public function cancelEdit() {
        $this->reset('editTodoId', 'editTodoName');
    }

    public function toggle($todoId) {
        $todo = Todo::find($todoId);
        $todo->status = !$todo->status;
        $todo->save();
    }

    public function paginationView() {
        return 'custom-pagination-links-view';
    }

    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => Todo::where('name', 'like', "%{$this->search}%")->orderBy('created_at', 'desc')->paginate(5)
        ]);
       
    }
}
