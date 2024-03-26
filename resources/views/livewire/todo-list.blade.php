<div class="container mx-auto">
    @include('livewire.components.create-todo')

    @include('livewire.components.search-todo')

    @foreach ($todos as $todo)
        @include('livewire.components.todo-card')
    @endforeach

    <div class="my-2 flex justify-center">
        {{ $todos->links('pagination-links')}}
    </div>
</div>