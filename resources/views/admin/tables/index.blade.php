<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-2">
    <div class="mx-auto sm:px-6 lg:px-8">
        
      <div class="flex justify-end mt-5">
        <a href="{{ route('admin.tables.create') }}" class="px-4 py-2 bg-white hover:bg-gray-300 border">Create Table</a>
      </div>
        
      <div class="bg-white overflow-hidden shadow-sm mt-5">
          <div class="text-gray-900">
            <table class="table-auto">
                <thead>
                  <tr class="border">
                    <th class="p-3 text-left">Image</th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Guest Number</th>
                    <th class="p-3 text-left">Location</th>
                    <th class="p-3 text-left">Status</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($tables as $table)
                    <tr class="border">
                      <td class="p-3"><img src="{{ Storage::url($table->image) }}" class="w-32 h-24 object-cover border"></td>
                      <td class="p-3">{{ $table->name }}</td>
                      <td class="p-3">{{ $table->guest_number }}</td>
                      <td class="p-3">{{ $table->location }}</td>
                      <td class="p-3">{{ $table->status }}</td>
                      <td class="p-3 flex space-x-1">
                        <a href="{{ route('admin.tables.edit', $table->id) }}" class="px-4 py-2 bg-white hover:bg-violet-300 border border-violet-300">Edit</a>
                        <form action="{{ route('admin.tables.destroy', $table->id) }}" method="POST" onsubmit="return confirm('Please confirm to delete this data?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="px-4 py-2 bg-white hover:bg-rose-300 border border-rose-300">Delete</button>
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
