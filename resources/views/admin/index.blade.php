<x-admin-layout>

  

    
    

    <div class="px-10 py-4 flex flex-row flex-wrap">
        <!-- User card -->
        <div class="p-3">
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                  <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                    Users
                  </h6>
                  <span class="text-xl font-semibold">{{ \App\Models\User::all()->count() }}</span>
                
                </div>
                <div>
                  <span>
                    <svg class="w-12 h-12 text-gray-300 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                  </span>
                </div>
              </div>
        </div>

          

        {{-- parshioner card --}}
        <div class="p-3">
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
            <div>
                <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                Parishioner
                </h6>
                <span class="text-xl font-semibold">{{ \App\Models\Parishioner::all()->count() }}</span>
            
            </div>
            <div>
                <span>
                <svg class="w-12 h-12 text-gray-300 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                </span>
            </div>
            </div>
        </div>
         

 

      


                


                   
               

                  

                    
    
    </div>
    

</x-admin-layout>