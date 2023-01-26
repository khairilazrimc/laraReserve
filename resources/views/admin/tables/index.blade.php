<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="p-6 text-gray-900">
                  <table class="table-auto">
                      <thead>
                        <tr>
                          <th>Tables</th>
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
  