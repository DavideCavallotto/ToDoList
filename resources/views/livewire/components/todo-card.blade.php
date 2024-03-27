<div wire:key='{{ $todo->id }}' class="flex justify-center p-2">
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg drop-shadow-lg dark:bg-gray-800 dark:border-gray-700 flex justify-between items-center gap-5 min-w-[320px]" >
        
        <div>
            <div class="flex items-center gap-2">
                <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $todo->name }}</h5>
                
                @if ($todo->status === 0)
                <span><i wire:click='toggle({{$todo->id}})' class="fa-regular fa-circle-xmark text-red-500 cursor-pointer"></i></span>  
                
                @else
                <span><i wire:click='toggle({{$todo->id}})' class="fa-regular fa-circle-check text-green-500 cursor-pointer"></i></span>               

                @endif

            </div>
            <span class="text-[8px] text-gray-400">{{ date('d/m/Y', strtotime($todo->created_at)) }}</span>
        </div>

        <div class="flex flex-col gap-2">

            <button class="hover:bg-gray-100 active:bg-gray-300 border drop-shadow-sm rounded-md px-[2.5px] py-[2px] flex justify-center items-center">
                <i class="fa-regular fa-pen-to-square text-blue-600 text-xs"></i>
            </button>

            <button wire:click='delete({{ $todo->id }})' class="hover:bg-gray-100 active:bg-gray-300 border drop-shadow-sm rounded-md px-[2.5px] py-[2px] flex justify-center items-center">
                <i class="fa-regular fa-trash-can text-red-600 text-xs"></i>
            </button>

        </div>
        
        
    </div>

</div>