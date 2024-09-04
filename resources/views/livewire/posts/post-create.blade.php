<div>
    <form wire:submit="storePost" class="max-w-lg mx-auto bg-white p-6 shadow-md rounded-lg">
        <!-- Name Field -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input type="text" id="name" name="name"
                class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="{{ old('name') }}" wire:model="name">
            @error('name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description Field -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea id="description" name="description" rows="5"
                class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                wire:model="description">{{ old('description') }}</textarea>
            <small>Characters:
                <span x-text="$wire.description.length">0</span>
            </small>
            <small>Words:
                <span x-text="$wire.description.split(' ').length - 1">0</span>
            </small>
            @error('description')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-between">
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
        </div>


    </form>

    <h2 class=" mt-5"> alpine.js example </h2>


    <div x-data="{ count: 0 }">
        <span x-text="count"></span>
        <div>
            <x-danger-button x-on:click="count++" type="button">++++</x-danger-button>
        </div>
    </div>


    <div class="mt-5">
        Current Name: <span x-text="$wire.name.toUpperCase()"></span>
    </div>
    <div class="mt-5">
        <button x-on:click="$wire.storePost() ">reset</button>
    </div>

    <div class="mt-5">
        Current description: <span x-text="$wire.description"></span>
    </div>




</div>
