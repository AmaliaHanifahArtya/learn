<div class="p-4">
    <textarea wire:model="body" rows="3" placeholder="Post something..."
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
    <div class="mt-2 flex justify-end">
        <button wire:click="createPost" class="bg-blue-600 px-4 py-2 text-white hover:bg-blue-400 rounded-md">Post</button>
    </div>
</div>
