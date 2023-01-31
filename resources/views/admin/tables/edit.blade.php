<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-2">
    <div class="mx-auto sm:px-6 lg:px-8">
      <div class="flex mt-5">
      </div>
      
      <div class="bg-white overflow-hidden shadow-sm mt-5">
        <div class="p-5 border w-full">
          <form method="POST" action="{{ route('admin.tables.update', $table->id) }}" enctype="multipart/form-data" >
            @csrf
            @method('PUT')

            <img src="{{ Storage::url($table->image) }}" class="w-32 h-32 object-cover align border">

            <label for="name" class="form-label inline-block mb-2 mt-5 text-gray-700">Name</label>
            <input
              type="text"
              name="name"
              id="name"
              value="{{ $table->name }}"
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        
            <label for="description" class="form-label inline-block mb-2 mt-5 text-gray-700">Guest Number</label>
            <input
              type="number"
              name="guest_number"
              id="guest_number"
              value="{{ $table->guest_number }}"
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
            @error('guest_number') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

            <label for="status" class="form-label inline-block mb-2 mt-5 text-gray-700">Status</label>
            <select
            name="status" 
            id="status" 
            class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none">
              <option value=""></option>
              @foreach (App\Enums\TableStatus::cases() as $status)
                <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>{{ $status->name }}</option>
              @endforeach
            </select>
            @error('status') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

            <label for="location" class="form-label inline-block mb-2 mt-5 text-gray-700">Location</label>
            <select
            name="location" 
            id="location" 
            class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none">
              <option value=""></option>
              @foreach (App\Enums\TableLocation::cases() as $location)
                <option value="{{ $location->value }}" @selected($table->location->value == $location->value)>{{ $location->name }}</option>
              @endforeach
            </select>
            @error('location') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

            <label for="image" class="form-label inline-block mb-2 mt-5 text-gray-700">Image</label>
            <input 
              type="file"
              name="image"
              id="image"
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none">
              
            <div class="flex justify-end gap-x-1">
              <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 mt-5 bg-white hover:bg-rose-300 border border-rose-300">Cancel</a>
              <button type="submit" class="px-4 py-2 bg-white hover:bg-emerald-300 mt-5 border border-emerald-300">Update Table</button>
            </div>
          </form>
        </div>        
      </div>
    </div>
  </div>
</x-admin-layout>
