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
                <div class="w-full bg-gray-200 rounded-full">
                  <div class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">Step 1</div>
                </div>
                <form method="POST" action="{{ route('reservations.store.step.one') }}">
                  @csrf
                  <label for="first_name" class="form-label inline-block mb-2 mt-5 text-gray-700">First Name</label>
                  <input
                    type="text"
                    name="first_name"
                    id="first_name"
                    value="{{ $reservation->first_name ?? '' }}"
                    class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
                  @error('first_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                              
                  <label for="last_name" class="form-label inline-block mb-2 mt-5 text-gray-700">Last Name</label>
                  <input
                    type="text"
                    name="last_name"
                    id="last_name"
                    value="{{$reservation->last_name ?? '' }}"
                    class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
                  @error('last_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                              
                  <label for="email" class="form-label inline-block mb-2 mt-5 text-gray-700">Email</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ $reservation->email ?? '' }}"
                    class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
                  @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                              
                  <label for="tel_number" class="form-label inline-block mb-2 mt-5 text-gray-700">Phone Number</label>
                  <input
                    type="text"
                    name="tel_number"
                    id="tel_number"
                    value="{{ $reservation->tel_number ?? '' }}"
                    class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
                  @error('tel_number') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                              
                  <label for="res_date" class="form-label inline-block mb-2 mt-5 text-gray-700">Reservation Date</label>
                  <input
                    type="datetime-local"
                    name="res_date"
                    id="res_date"
                    min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                    max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                    value="{{ $reservation->res_date ?? '' }}"
                    class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
                  @error('res_date') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

                  <label for="guest_number" class="form-label inline-block mb-2 mt-5 text-gray-700">Guest Number</label>
                  <input
                    type="number"
                    name="guest_number"
                    id="guest_number"
                    value="{{ $reservation->guest_number }}"
                    class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
                  @error('guest_number') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                
                  <div class="flex justify-end mt-4">
                    <button class="px-6 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-transform bg-blue-600 rounded">Next</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

</x-guest-layout>