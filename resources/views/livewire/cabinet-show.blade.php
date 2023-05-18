<div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4">
    @foreach ($cabinet as $cabinets)
        <div class="bg-white shadow-lg rounded-lg p-4">
            <div class="grid grid-cols-2 gap-3">
                <a href=""><p class="text-sm text-black px-2 bg-blue-200">update</p></a>
                <a href=""><p class="text-sm text-black px-2 bg-red-200">delete</p></a>
            </div>
            
          <h2 class="text-xl font-bold text-gray-800">Cab {{ ucwords($cabinets->cab_number) }}</h2>
          <div>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row1}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row1) }}</h1>
            </button>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row2}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row2) }}</h1>
            </button>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row3}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row3) }}</h1>
            </button>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row4}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row4) }}</h1>
            </button>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row5}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row5) }}</h1>
            </button>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row6}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row6) }}</h1>
            </button>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row7}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row7) }}</h1>
            </button>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row8}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row8) }}</h1>
            </button>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row9}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row9) }}</h1>
            </button>

            <button class="w-full bg-gray-100 hover:bg-gray-300 mb-1" wire:click="viewSpecific({{ $cabinets->cab_number }},'{{$cabinets->row10}}', {{$cabinets->id}})">
                <h1 class="text-lg">{{  ucwords($cabinets->row10) }}</h1>
            </button>
          </div>
        </div>
    @endforeach
    </div>

</div>
