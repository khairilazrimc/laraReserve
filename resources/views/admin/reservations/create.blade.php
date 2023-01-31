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
          <form method="POST" action="{{ route('admin.reservations.store') }}" enctype="multipart/form-data" >
            @csrf
            
            <label for="first_name" class="form-label inline-block mb-2 mt-5 text-gray-700">First Name</label>
            <input
              type="text"
              name="first_name"
              id="first_name"
              value="{{ old('first_name') }}"
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
            @error('first_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        
            <label for="last_name" class="form-label inline-block mb-2 mt-5 text-gray-700">Last Name</label>
            <input
              type="text"
              name="last_name"
              id="last_name"
              value="{{ old('last_name') }}"
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
            @error('last_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        
            <label for="email" class="form-label inline-block mb-2 mt-5 text-gray-700">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              value="{{ old('email') }}"
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        
            <label for="tel_number" class="form-label inline-block mb-2 mt-5 text-gray-700">Phone Number</label>
            <input
              type="text"
              name="tel_number"
              id="tel_number"
              value="{{ old('tel_number') }}"
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
            @error('tel_number') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        
            <label for="res_date" class="form-label inline-block mb-2 mt-5 text-gray-700">Reservation Date</label>
            <input
              type="datetime-local"
              name="res_date"
              id="res_date"
              value="{{ old('res_date') }}"
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
            @error('res_date') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        
            <label for="guest_number" class="form-label inline-block mb-2 mt-5 text-gray-700">Guest Number</label>
            <input
              type="number"
              name="guest_number"
              id="guest_number"
              value="{{ old('guest_number') }}"
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
            @error('guest_number') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
              
            <label for="table_id" class="form-label inline-block mb-2 mt-5 text-gray-700">Table</label>
            <select
              name="table_id" 
              id="table_id" 
              class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none">
              <option value=""></option>
              @foreach ($tables as $table)
                <option value="{{ $table->id }}" @selected(old('table_id') == $table->id)>{{ $table->name }}</option>
              @endforeach
            </select>
            @error('table_id') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
              
            <div class="flex justify-end gap-x-1">
              <a href="{{ route('admin.reservations.index') }}" class="px-4 py-2 mt-5 bg-white hover:bg-rose-300 border border-rose-300">Cancel</a>
              <button type="submit" class="px-4 py-2 bg-white hover:bg-emerald-300 mt-5 border border-emerald-300">Create Reservation</button>
            </div>
          </form>
        </div>        
      </div>
    </div>
  </div>
</x-admin-layout>
