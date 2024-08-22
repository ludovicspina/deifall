<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-lg">
            <form class="p-6" wire:submit.prevent="store">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" wire:model="name" class="w-full p-2 border rounded" id="name">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea wire:model="description" class="w-full p-2 border rounded" id="description"></textarea>
                </div>
                <div class="mb-4 grid grid-cols-3 gap-4">
                    <div>
                        <label for="STR" class="block text-gray-700">STR</label>
                        <input type="number" wire:model="STR" class="w-full p-2 border rounded" id="STR">
                        @error('STR') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="DEX" class="block text-gray-700">DEX</label>
                        <input type="number" wire:model="DEX" class="w-full p-2 border rounded" id="DEX">
                        @error('DEX') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="CON" class="block text-gray-700">CON</label>
                        <input type="number" wire:model="CON" class="w-full p-2 border rounded" id="CON">
                        @error('CON') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-4 grid grid-cols-3 gap-4">
                    <div>
                        <label for="INT" class="block text-gray-700">INT</label>
                        <input type="number" wire:model="INT" class="w-full p-2 border rounded" id="INT">
                        @error('INT') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="SAG" class="block text-gray-700">SAG</label>
                        <input type="number" wire:model="SAG" class="w-full p-2 border rounded" id="SAG">
                        @error('SAG') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="CHA" class="block text-gray-700">CHA</label>
                        <input type="number" wire:model="CHA" class="w-full p-2 border rounded" id="CHA">
                        @error('CHA') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="button" wire:click="closeModal()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">Cancel</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
