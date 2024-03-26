<div wire:key='{{ $todo->id }}' class="flex justify-center p-2">
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex gap-5" >
        
        <div class="">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $todo->name }}</h5>
            <span class="text-xs text-gray-400">{{ date('d/m/Y', strtotime($todo->created_at)) }}</span>
        </div>
        
        
    </div>

</div>