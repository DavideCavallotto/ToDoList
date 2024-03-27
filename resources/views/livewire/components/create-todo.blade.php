<div class="flex flex-col items-center gap-5 border-y-2 border-lime-200 my-5">
    <h2>Crea Nuovo Task</h2>
    <form action="">
        <div class="flex flex-col gap-2">
            <label for="name" class="text-[10px] font-semibold">
                Inserisci la descrizione del tuo task
            </label>
            <input wire:model='name' type="text" id="name" class="bg-gray-100 text-gray-900 rounded text-[9px] p-1 w-auto h-4 border-transparent focus:border-lime-400 focus:ring-0">
            
            @error('name')
                <span class="text-red-500 text-[6px] mt-3 block">{{ $message }}</span>
            @enderror
            
            <div>
                <button wire:click.prevent='create' type="submit" class=" text-gray-600 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-md text-[8px] px-2 py-[2px] text-center mb-2">
                    Crea
                </button>
        
                @if (session('success'))
                    <span class="text-green-500 text-[8px]">{{ session('success') }}</span>
                @endif

            </div>
        </div>
        
    </form>
  
</div>