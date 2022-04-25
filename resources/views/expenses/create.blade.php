<x-admin-layout>
    

    <div class="py-12 w-full ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <!-- component -->
          <div class="flex  p-2 ">
              <a href="{{ route('expenses.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-slate-100 rounded-md ">back</a>
          </div>

          <div class="flex flex-col p-2">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('expenses.store') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="sm:col-span-6" >
                    <label for="amount" class="block text-sm font-medium text-gray-700"> kiasi</label>
                    <div class="mt-1">
                      <input type="number" step=".01" id="amount" name="amount" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('amount') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror

                    
                  <div class="sm:col-span-6" >
                    <label for="description" class="block text-sm font-medium text-gray-700"> Maelezo</label>
                    <div class="mt-1">
                      <input type="text" id="description" name="description" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    @error('description') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror

                    
                    
            
                  <div class="sm:col-span-6 pt-5 p-2">
                    <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Create</button>
                  </div>
                </form>
              </div>
             
              
        </div>
         

    
     
        </div>
        

            </div>
       
    </div>
</x-admin-layout>