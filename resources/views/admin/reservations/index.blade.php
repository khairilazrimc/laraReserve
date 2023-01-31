<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-2">
    <div class="mx-auto sm:px-6 lg:px-8">
        
      <div class="flex justify-end mt-5">
        <a href="{{ route('admin.reservations.create') }}" class="px-4 py-2 bg-white hover:bg-gray-300 border">Create Reservation</a>
      </div>
        
      <div class="bg-white overflow-hidden shadow-sm mt-5">
          <div class="text-gray-900">
            <table class="table-auto">
                <thead>
                  <tr class="border">
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Contact</th>
                    <th class="p-3 text-left">Date</th>
                    <th class="p-3 text-left">Table</th>
                    <th class="p-3 text-left">Guest</th>
                    <th class="p-3 text-left">Action</th>
              </tr>
                </thead>
                <tbody>

                  @foreach ($reservations as $reservation)
                    <tr class="border">
                      <td class="p-3">{{ $reservation->first_name . " " . $reservation->last_name }}</td>
                      <td class="p-3">{{ $reservation->email }}<br>Phone: {{ $reservation->tel_number }}</td>
                      <td class="p-3">{{ $reservation->res_date }}</td>
                      <td class="p-3">{{ $reservation->table->name }}</td>
                      <td class="p-3">{{ $reservation->guest_number }}</td>
                      <td class="p-3 flex space-x-1">
                        <a href="{{ route('admin.reservations.edit', $reservation->id) }}" class="px-4 py-2 bg-white hover:bg-violet-300 border border-violet-300">Edit</a>
                        <form action="{{ route('admin.reservations.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('Please confirm to delete this data?');">
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
