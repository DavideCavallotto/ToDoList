<div class="container mx-auto">

    @if (session('Errore'))
    <div class="p-4 m-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Errore</span> {{session('Errore')}}
    </div>
        
    @endif
    @include('livewire.components.create-todo')
    <div class="bg-[url('/public/images/pattern-todo.jpg')] bg-contain border-t-2 border-lime-200" >
    
        @include('livewire.components.search-todo')
    
        @foreach ($todos as $todo)
            @include('livewire.components.todo-card')
        @endforeach
    
        <div class="my-2 flex justify-center">
            {{ $todos->links('pagination-links')}}
        </div>

    </div>
</div>





