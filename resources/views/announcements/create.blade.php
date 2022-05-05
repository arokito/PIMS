<x-admin-layout>
    

    <div class="py-3 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <!-- component -->
          

          <div class="flex flex-col p-2">
            
                <form method="POST" action="{{ route('announcements.store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="grid grid-cols-6 gap-6">
                  <div class="col-span-6" >
                    <label for="name" class="block text-sm font-medium text-gray-700"> Title</label>
                    <div class="mt-1">
                      <input type="text" id="title" name="title" placeholder="Title" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                  </div>
                  <div class="col-span-6" >
                        <label for="file_url" class="block text-sm font-medium text-gray-700"> File or Image</label>
                        <div class="mt-1">
                          <input type="file" id="file_url" name="file_url" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                  </div>
            
                  </div>

                  <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-emerald-400 hover:bg-emerald-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      <svg   class="h-5 w-5" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="w-5 inline-block " viewBox="0 0 16 16">
                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                      </svg>
                       <span>Save</span>
                    </button>
                  </div>
                </form>
              
             
              
        </div>
         

    
     
        </div>
        

            </div>
       
    </div>
</x-admin-layout>