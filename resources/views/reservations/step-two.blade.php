<x-guest-layout>

  <div class="container w-full px-5 py-6 mx-auto">
    <div class="grid lg:grid-cols-4 gap-y-6">

        <div class="flex-1 min-w-4xl mx-auto bg-white shadow-xl">
          <div class="flex flex-col md:flex-row">
            <div class="h-32 md:h-auto md:w-1/2">
              <img class="object-cover w-full h-full" src="https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790_960_720.jpg">
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
              <div class="w-full">
                <h3 class="mb-4 text-xl font-bold text-blue-600">
                  Make Reservation
                </h3>
                <div class="w-full bg-gray-200 rounded-full flex justify-end">
                  <div class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">Step 2</div>
                </div>
                <form method="POST" action="{{ route('reservations.store.step.two') }}">
                  @csrf
                  
                  <label for="table_id" class="form-label inline-block mb-2 mt-5 text-gray-700">Table</label>
                  <select
                    name="table_id" 
                    id="table_id" 
                    class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none">
                    <option value=""></option>
                    @foreach ($tables as $table)
                      <option value="{{ $table->id }}" @selected($reservation->table_id == $table->id)>{{ $table->name }} ({{ $table->guest_number }} Pax)</option>
                    @endforeach
                  </select>
                  @error('table_id') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

                  <div class="flex justify-between mt-4">
                    <a href="{{ route('reservations.step.one') }}" class="px-6 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-transform bg-blue-600 rounded">Previous</a>
                    <button class="px-6 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-transform bg-blue-600 rounded">Make Reservation</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

</x-guest-layout>