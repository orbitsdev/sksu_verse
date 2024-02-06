<div>
    <x-main-layout>

        <div class="p-4 flex justify-center items-center">



            <button class="mx-2" wire:click="increments"> INCREMENT</button>
                <p class="text-2xl font-bold">

                    {{$counter}}
                </p>
            <button class="mx-2" wire:click="decrement"> Decrement</button>
        </div>
    </x-main-layout>
</div>
