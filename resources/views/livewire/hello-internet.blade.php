<div class="max-w-md mx-auto p-6 bg-white shadow-md rounded-lg text-center">
    <!-- Greeting -->
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Hello Internet!</h1>

    <!-- Count Display -->
    <h2 class="text-4xl font-semibold text-gray-700 mb-4">{{ $count }}</h2>

    <!-- Increment & Decrement Buttons -->
    <div class="space-x-4 mb-6">
        <button wire:click="increment"
            class="inline-flex items-center gap-3 px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
            Increment
        </button>
        <button wire:click="decrement"
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
            Decrement
        </button>
    </div>

    <!-- Current Time Display -->
    <h2 class="text-lg text-gray-600 mb-4">The current time is {{ now()->toTimeString() }}</h2>

    <!-- Refresh Button -->
    <button wire:click="$refresh"
        class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
        Refresh
    </button>
