<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-2">
    <div class="mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-end mt-5">
        <a href="{{ route('admin.menus.create') }}" class="px-4 py-2 bg-white hover:bg-gray-300 border">Create Menu</a>
      </div>
        
      <div class="bg-white overflow-hidden shadow-sm mt-5">
        <div class="text-gray-900">
          <table class="table-auto">
            <thead>
              <tr class="border">
                <th class="p-3 text-left">Image</th>
                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Price</th>
                <th class="p-3 text-left">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($menus as $menu)
                <tr class="border">
                  <td class="p-3"><img src="{{ Storage::url($menu->image) }}" class="w-32 h-24 object-cover border"></td>
                  <td class="p-3">{{ $menu->name }}</td>
                  <td class="p-3">{{ $menu->price }}</td>
                  <td class="p-3 flex space-x-1">
                    <a href="{{ route('admin.menus.edit', $menu->id) }}" class="px-4 py-2 bg-white hover:bg-violet-300 border border-violet-300">Edit</a>
                    <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Please confirm to delete this data?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="px-4 py-2 bg-white hover:bg-red-300 border border-red-300">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
