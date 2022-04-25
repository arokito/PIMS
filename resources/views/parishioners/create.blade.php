<x-admin-layout>
    

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <!-- component -->
          

          <div class="flex flex-col p-2">
             
            <div class="space-y-8 divide-y divide-gray-200  mt-10">

              <div class="flex  px-4 py-5">
                <a href="{{ route('expenses.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-slate-100 rounded-md ">back</a>
            </div>
                <form method="POST" action="{{ route('parishioners.store') }}" enctype="multipart/form-data">
                    @csrf
                 {{-- <div class="sm:col-span-6" >
                    <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name</label>
                    <div class="mt-1">
                      <input type="text" step=".01" id="first_name" name="first_name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                  </div>
                    @error('first_name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                   
                    <div class="sm:col-span-6" >
                        <label for="middle_name" class="block text-sm font-medium text-gray-700">  middle Name</label>
                        <div class="mt-1">
                          <input type="text" step=".01" id="middle_name" name="middle_name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>   
                        @error('middle_name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror

                        <div class="sm:col-span-6" >
                            <label for="last_name" class="block text-sm font-medium text-gray-700"> Last name</label>
                            <div class="mt-1">
                              <input type="text" step=".01" id="last_name" name="last_name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('last_name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                            <div class="sm:col-span-6" >
                                <label for="phone" class="block text-sm font-medium text-gray-700"> Phone</label>
                                <div class="mt-1">
                                  <input type="tel"  id="phone" name="phone" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                            </div>
                                @error('phone') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror 
                                
                                
                                <div class="sm:col-span-6" >
                                    <label for="email" class="block text-sm font-medium text-gray-700"> Email</label>
                                    <div class="mt-1">
                                      <input type="email"  id="email" name="email" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>

                                </div>
                                    @error('email') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror 

                                    
                                   
                                 <div class="sm:col-span-6" >
                                        <label for="ubatizo_place" class="block text-sm font-medium text-gray-700"> sehemu ya ubatizo</label>
                                        <div class="mt-1">
                                          <input type="text"  id="ubatizo_place" name="ubatizo_place" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>
                                 </div>  
                                        @error('ubatizo_place') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror 

                                         
                                    <div class="sm:col-span-6" >
                                        <label for="ubatizo_date" class="block text-sm font-medium text-gray-700"> tarehe ya ubatizo</label>
                                        <div class="mt-1">
                                          <input type="date"  id="ubatizo_date" name="ubatizo_date" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>

                                        
                                        @error('ubatizo_date') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    

                                         
                                    <div class="sm:col-span-6" >
                                        <label for="komunio_place" class="block text-sm font-medium text-gray-700"> sehemu ya komunio</label>
                                        <div class="mt-1">
                                          <input type="text"  id="komunio_place" name="komunio_place" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                        </div>

                                    </div> 
                                        @error('ubatizo_place') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror

                                        <div class="sm:col-span-6" >
                                            <label for="komunio_date" class="block text-sm font-medium text-gray-700"> sehemu ya komunio</label>
                                            <div class="mt-1">
                                              <input type="text"  id="komunio_date" name="komunio_date" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            </div>

                                        </div>
                                            @error('komunio_date') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror

                  
                                            <div class="sm:col-span-6" >
                                                <label for="ndoa" class="block text-sm font-medium text-gray-700"> ndoa</label>
                                                <div class="mt-1">
                                                  <input type="text"  id="ndoa" name="ndoa" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                </div>

                                            </div>
                                                @error('ndoa') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror

                                                <div class="sm:col-span-6" >
                                                    <label for="status" class="block text-sm font-medium text-gray-700"> status</label>
                                                    <div class="mt-1">
                                                      <input type="text"  id="status" name="" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                    </div>
                                                </div>
                                                    @error('ndoa') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror --}}

                                                 
                                                      <div class="px-4 py-5 bg-white sm:p-6">
                                                        <div class="grid grid-cols-6 gap-6">
                                                          <div class="col-span-3 sm:col-span-3">
                                                            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                                            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            @error('first_name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                                          </div>
                                            
                                                          <div class="col-span-3 sm:col-span-3">
                                                            <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle name</label>
                                                            <input type="text" name="middle_name" id="middle_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                          </div>

                                                          <div class="col-span-6 ">
                                                            <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                                            <input type="text" name="last_name" id="last_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            @error('last_name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                                          </div>
                                                          <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                                            <input type="tel" name="phone" id="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            @error('phone') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                                          </div>
                                            
                                                          <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                            <label for="ubatizo_place" class="block text-sm font-medium text-gray-700">Ubatizo place</label>
                                                            <input type="text" name="ubatizo_place" id="ubatizo_place" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                          </div>
                                            
                                                          <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                            <label for="ubatizo_date" class="block text-sm font-medium text-gray-700">Ubatizo date</label>
                                                            <input type="date" name="ubatizo_date" id="ubatizo_date" autocomplete="ubatizo_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                          </div>
                                            
                                                          <div class="col-span-6 sm:col-span-3">
                                                            <label for="komunio_place" class="block text-sm font-medium text-gray-700">Komunio place</label>
                                                            <input type="text" name="komunio_place" id="komunio_place" autocomplete="komunio_place" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                          </div>

                                                          
                                            
                                                          <div class="col-span-6 sm:col-span-3">
                                                            <label for="komunio_date" class="block text-sm font-medium text-gray-700">Komunio date</label>
                                                            <input type="date" name="komunio_date" id="komunio_date" autocomplete="komunio_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                          </div>
                                            
                                                          <div class="col-span-6 ">
                                                            <label for="family" class="block text-sm font-medium text-gray-700">Family</label>
                                                            <select id="family_id" name="family_id" autocomplete="family_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md ">
                                                              <option value="">--Select--</option>
                                                              @foreach (App\Models\Family::all() as $family)
                                                                  <option value="{{ $family->id }}">{{ $family->name }}</option>
                                                              @endforeach
                     
                                                           </select>

                                                      
                                                          </div>

                                                          <div class="col-span-6 ">
                                                            <label for="email" class="block text-sm font-medium text-gray-700">Email adress</label>
                                                            <input type="email" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                          </div>
                                            
                                            
                                                          <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                            <label for="ndoa" class="block text-sm font-medium text-gray-700">Ndoa</label>
                                                            <select id="ndoa" name="ndoa" autocomplete="ndoa" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                              <option value="1">ndio</option>
                                                              <option value="0">hapana</option>

                                                           

                                                             
                                                            </select>
                                                          </div>
                                            
                                                          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                                                            <select id="gender" name="gender" autocomplete="gender" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                              <option >Male</option>
                                                              <option>Female</option>
                                                              <option>Unspecified</option>
                                                            </select>
                                                          </div>
                                            
                                                          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                            <label for="status" class="block text-sm font-medium text-gray-700">status</label>
                                                            <select id="status" name="status" autocomplete="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                              <option value="1">active</option>
                                                              <option value="0">Inactive</option>
                                                             
                                                            </select>
                                                          </div>

                                                          <div class="sm:col-span-6 pt-5 p-1">
                                                            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-slate-100  rounded-md">Create</button>
                                                          </div>
                                                        </div>

                                                     
                                                      </div>
                                                     


                                                    

                                                   
                                          
                                          
                                          


                                                     
                                                                         
                    
                    
            
               
                </form>
              </div>
             
              
        </div>
         

    
     
        </div>
        

            </div>
       
    </div>
</x-admin-layout>