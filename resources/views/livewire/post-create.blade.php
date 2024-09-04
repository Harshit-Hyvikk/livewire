<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <!-- Input Section -->
    <div class="mb-6">
        <label for="post" class="block text font-medium text-gray-700">Post1 Input</label>
        <input type="text" wire:model="post1"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
        {{-- <div class="mt-2 text-sm text-gray-500">
                <!-- Wire Model Options -->
                <p><strong>wire:model.live</strong> - For live search</p>
                <p><strong>wire:model.change</strong> - After clicking out of box</p>
                <p><strong>wire:model.debounce.[?]ms</strong> - After some ms send value to server</p>
                <p><strong>wire:model.throttle.[?]ms</strong> - After some ms send value to server</p>
                <p><strong>wire:model.blur</strong> - Focus on textbox</p>
            </div> --}}
    </div>

    <!-- Button Section -->
    <div class="flex items-center justify-start mb-6">
        <button type="button" wire:click="add"
            class = "inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
            Add
        </button>
    </div>

    <!-- Form Section -->
    <form wire:submit="add" class="space-y-4">
        <div class=" mb-4">
            <label for="post" class="block text font-medium text-gray-700">Post Input (Form)</label>
            <input type="text" wire:model="post"
                class="mt-1 mb-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
        </div>

        <div>
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                Add
            </button>
        </div>

        <div class="mt-4">
            <h3 class="text-lg font-semibold text-gray-900">
                Current value of post:
            </h3>
            <p class="text-gray-700">{{ $post }}</p>
        </div>
    </form>

    <!-- List Section -->
    <div class="mt-6">
        <ul class="list-disc list-inside text-gray-800">
            @foreach ($posts as $post)
                <li>{{ $post }}</li>
            @endforeach
        </ul>
    </div>
</div>
