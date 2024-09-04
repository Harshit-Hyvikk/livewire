{{-- <div>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Error:</strong>
            <span class="block sm:inline">{{ $error }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 5.652a.5.5 0 00-.707 0L10 9.293 6.354 5.647a.5.5 0 10-.708.707l3.646 3.646-3.646 3.646a.5.5 0 00.708.707l3.646-3.646 3.646 3.646a.5.5 0 00.707-.707L10.707 10l3.641-3.641a.5.5 0 000-.707z" />
                </svg>
            </span>
        </div>
</div> --}}


<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Posts') }}
    </h2>
</x-slot>

<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-4">
    {{-- <h2 class="text-2xl font-bold text-gray-800 mb-4">Posts</h2> --}}


    <table class="w-full table-auto border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 text-left text-gray-700">Title</th>
                <th class="px-4 py-2 text-left text-gray-700">Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr class="border-b hover:bg-gray-50" wire:key="{{ $post->id }}">
                    <td class="px-4 py-2 text-gray-800">{{ $post->name }}</td>
                    <td class="px-4 py-2 text-gray-600">
                        {{ \Illuminate\Support\Str::words($post->Description, 8) }}
                        {{-- Use limit(45) for 45 characters --}}
                        {{-- Use words(8) for 8 words --}}
                    </td>
                    <td>
                        <button type="button" wire:confirm="Are you sure you want to delete this post?"
                            wire:click="Delete({{ $post->id }})"
                            class="inline-flex items-center gap-3 px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
