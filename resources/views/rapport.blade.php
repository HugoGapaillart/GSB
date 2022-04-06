<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Page Rapport') }}
    </h2>
</x-slot>

<div class="mt-10" style="margin-top: 20px; margin-left:20px">
  <button onclick="window.location.href='/newrapport'" style="border:none; border-radius:12px; background-color:rgb(27, 115, 230); width:8%; color: white" type="button" >Nouveau rapport</button>
</div>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden shadow-md sm:rounded-lg">
              <table class="min-w-full">
                  <thead class="bg-blue-500 dark:bg-gray-700 ">
                      <tr>
                          <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                              Numéro de rapport
                          </th>
                          <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                              Date du rappot
                          </th>
                          <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                              Bilan du rapport
                          </th>
                          <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400 text-center">
                              Motif 
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($rapports as $info)
                      <!-- Product 1 -->
                      <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                          <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                              {{ $info->RAP_NUM }}
                          </td>
                          <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                              {{ $info->RAP_DATE}}
                          </td>
                          <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                              {{ $info->RAP_BILAN}}
                          </td>
                          <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-center">
                              {{ $info->RAP_MOTIF}}
                          </td>
                      </tr>
                      @endforeach

                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>


</x-app-layout>