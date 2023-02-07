<x-guest-layout>

  <div class="container w-full px-5 py-6 mx-auto">
    <div class="grid lg:grid-cols-4 gap-y-6">

      @foreach ($category->menus as $menu)
        <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
          <a href="{{ route('categories.show', $menu->id) }}" class="px-4 py-2 text-green-50">
            <img class="w-full h-48" src="{{ Storage::url($menu->image) }}"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                {{-- @foreach ($menu->categories() as $cat)
                  <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">
                    {{ $menu->categories->name }}
                  </span>
                  @endforeach --}}
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">{{ $menu->name }}</h4>
              <p class="leading-normal text-gray-700">{{ $menu->description }}</p>
            </div>
            <div class="flex items-center justify-between p-4">
              <span class="text-xl text-green-600">${{ $menu->price }}</span>
            </div>
          </a>
        </div>
      @endforeach

    </div>
  </div>

</x-guest-layout>