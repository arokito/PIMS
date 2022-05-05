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
          {{-- <iframe src="{{ URL::asset('storage/uploads/'.$file->file_path}}"width="400" height="400"></iframe> --}}
      
    </div>

</x-guest-layout>




 <!-- State cards -->
 

<!-- Charts -->


<!-- Two grid columns -->