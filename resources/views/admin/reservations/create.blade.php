<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="mx-auto sm:px-6 lg:px-8">
          
        <div class="flex mt-5">
            <a href="{{ route('admin.reservations.index') }}" class="px-4 py-2 bg-indigo-300 hover:bg-indigo-400">< Back</a>
          </div>
          
          <div class="flex bg-white overflow-hidden shadow-sm mt-5">
            <div class="p-5 mb-3 w-full">
              <form action="">
                <label for="name" class="form-label inline-block mb-2 mt-5 text-gray-700">Name</label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="
                    form-control
                    text-xl
                    block
                    w-full
                    px-3
                    py-1.5
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none
                  "
                />
            
                <label for="description" class="form-label inline-block mb-2 mt-5 text-gray-700"
                  >Description</label
                >
                <textarea
                  name="description"
                  id="description"
                  rows="3"
                  class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-xl
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none
                  "
                ></textarea>
            
                <label for="image" class="form-label inline-block mb-2 mt-5 text-gray-700">Image</label>
                <input 
                  type="file"
                  name="image"
                  id="image"
                  class="
                    form-control
                    block
                    w-full
                    px-2
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none">

                    <div class="flex justify-end">
                      <button type="submit" class="px-4 py-2 bg-fuchsia-300 hover:bg-fuchsia-400 mt-5">Create Reservation</button>
                    </div>
              </form>
            </div>
          
          </div>

          <div class="bg-white overflow-hidden shadow-sm mt-5">
              <div class="p-6 text-gray-900">
                <table class="table-auto">
                    <thead>
                      <tr>
                        <th>Categories</th>
                        <th>Artist</th>
                        <th>Year</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                        <td>Malcolm Lockyer</td>
                        <td>1961</td>
                      </tr>
                      <tr>
                        <td>Witchy Woman</td>
                        <td>The Eagles</td>
                        <td>1972</td>
                      </tr>
                      <tr>
                        <td>Shining Star</td>
                        <td>Earth, Wind, and Fire</td>
                        <td>1975</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</x-admin-layout>
