<x-guest-layout>

  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
       
        <div class=" gap-y-8 grid-cols-1 ">
            <div>
                <p class="text-6xl ... flex flex-wrap justify-center p-5">Welcome</p>
            </div>
            <div>
                <div class="flex flex-wrap justify-center">
                    <div class="w-6/12 sm:w-4/12 px-6 ">
                      <img src="{{ asset('build/images/yakobo mkuu.jpeg') }}" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none" />
                    </div>
                  </div>
            </div>
          
            
          </div>
          <iframe src="{{ URL::asset('storage/uploads/'.$file->file_path}}"width="400" height="400"></iframe>
      
    </div>

</x-guest-layout>




 <!-- State cards -->
 <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">
  <!-- Value card -->
  <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
    <div>
      <h6
        class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
      >
        Value
      </h6>
      <span class="text-xl font-semibold">$30,000</span>
      <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
        +4.4%
      </span>
    </div>
    <div>
      <span>
        <svg
          class="w-12 h-12 text-gray-300 dark:text-primary-dark"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </span>
    </div>
  </div>

  <!-- Users card -->
  <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
    <div>
      <h6
        class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
      >
        Users
      </h6>
      <span class="text-xl font-semibold">50,021</span>
      <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
        +2.6%
      </span>
    </div>
    <div>
      <span>
        <svg
          class="w-12 h-12 text-gray-300 dark:text-primary-dark"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
          />
        </svg>
      </span>
    </div>
  </div>

  <!-- Orders card -->
  <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
    <div>
      <h6
        class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
      >
        Orders
      </h6>
      <span class="text-xl font-semibold">45,021</span>
      <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
        +3.1%
      </span>
    </div>
    <div>
      <span>
        <svg
          class="w-12 h-12 text-gray-300 dark:text-primary-dark"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
          />
        </svg>
      </span>
    </div>
  </div>

  <!-- Tickets card -->
  <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
    <div>
      <h6
        class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
      >
        Tickets
      </h6>
      <span class="text-xl font-semibold">20,516</span>
      <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
        +3.1%
      </span>
    </div>
    <div>
      <span>
        <svg
          class="w-12 h-12 text-gray-300 dark:text-primary-dark"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"
          />
        </svg>
      </span>
    </div>
  </div>
</div>

<!-- Charts -->


<!-- Two grid columns -->