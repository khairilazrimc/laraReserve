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
              <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data" >
                @csrf
                
                <label for="name" class="form-label inline-block mb-2 text-gray-700">Name</label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"/>
            
                <label for="description" class="form-label inline-block mb-2 mt-5 text-gray-700">Description</label>
                <textarea
                  name="description"
                  id="description"
                  rows="3"
                  class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none"></textarea>
            
                <label for="image" class="form-label inline-block mb-2 mt-5 text-gray-700">Image</label>
                <input 
                  type="file"
                  name="image"
                  id="image"
                  class="form-control block w-full px-3 py-1.5 font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none">

                  <div class="flex justify-end gap-x-1">
                    <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 mt-5 bg-white hover:bg-rose-300 border border-rose-300">Cancel</a>
                    <button type="submit" class="px-4 py-2 bg-white hover:bg-emerald-300 mt-5 border border-emerald-300">Create Category</button>
                  </div>
              </form>
            </div>        
          </div>
      </div>
  </div>
</x-admin-layout>
