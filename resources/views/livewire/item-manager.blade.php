<div class="container mx-auto">
    <div class="flex justify-end mb-4">
        <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Item</button>
    </div>

    @if($isOpen)
        @include('livewire.create-update-item')
    @endif

    @if (session()->has('message'))
        <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
            <p class="text-sm">{{ session('message') }}</p>
        </div>
    @endif

    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">STR</th>
            <th class="px-4 py-2">DEX</th>
            <th class="px-4 py-2">CON</th>
            <th class="px-4 py-2">INT</th>
            <th class="px-4 py-2">SAG</th>
            <th class="px-4 py-2">CHA</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td class="border px-4 py-2">{{ $item->id }}</td>
                <td class="border px-4 py-2">{{ $item->name }}</td>
                <td class="border px-4 py-2">{{ $item->STR }}</td>
                <td class="border px-4 py-2">{{ $item->DEX }}</td>
                <td class="border px-4 py-2">{{ $item->CON }}</td>
                <td class="border px-4 py-2">{{ $item->INT }}</td>
                <td class="border px-4 py-2">{{ $item->SAG }}</td>
                <td class="border px-4 py-2">{{ $item->CHA }}</td>
                <td class="border px-4 py-2">
                    <button wire:click="edit({{ $item->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                    <button wire:click="delete({{ $item->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
