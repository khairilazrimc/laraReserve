<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-2">
    <div class="mx-auto sm:px-6 lg:px-8">
        
      <div class="flex justify-end mt-5">
        <a href="{{ route('admin.menus.create') }}" class="px-4 py-2 bg-white hover:bg-gray-300">Create Menu</a>
      </div>
        
      <div class="bg-white overflow-hidden shadow-sm mt-5">
          <div class="p-6 text-gray-900">
            <table class="table-auto">
                <thead>
                  <tr>
                    <th class="p-3 text-left">Image</th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Description</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($menus as $menu)
                    <tr>
                      <td class="p-3"><img src="{{ Storage::url($menu->image) }}" class="w-32 h-16 rounded object-cover"></td>
                      <td class="p-3">{{ $menu->name }}</td>
                      <td class="p-3">{{ $menu->description }}</td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
</x-admin-layout>
