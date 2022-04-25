<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-5">
                    <a href="{{ route('parishioners.index') }}"
                        class="px-4 py-2 bg-green-500 hover:bg-green-700 text-slate-100 rounded-md">Back</a>
                </div>
                <div class="flex flex-col p-2 ">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('parishioners.update', $parishioner->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                  <div class="col-span-3 sm:col-span-3">
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                    <input type="text" name="first_name" id="first_name" value="{{ $parishioner->first_name }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('first_name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                  </div>
                    
                                  <div class="col-span-3 sm:col-span-3">
                                    <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle name</label>
                                    <input type="text" name="middle_name" id="middle_name" value="{{ $parishioner->middle_name }}" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                  </div>

                                  <div class="col-span-6 ">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                    <input type="text" name="last_name" id="last_name" value="{{ $parishioner->last_name }}" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('last_name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                  </div>
                                  <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                    <input type="tel" name="phone" id="phone" value="{{ $parishioner->phone }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('phone') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                  </div>
                    
                                  <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="ubatizo_place" class="block text-sm font-medium text-gray-700">Ubatizo place</label>
                                    <input type="text" name="ubatizo_place" id="ubatizo_place" value="{{ $parishioner->ubatizo_place }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                  </div>
                    
                                  <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="ubatizo_date" class="block text-sm font-medium text-gray-700">Ubatizo date</label>
                                    <input type="date" name="ubatizo_date" id="ubatizo_date" value="{{ $parishioner->ubatizo_date }}" autocomplete="ubatizo_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                  </div>
                    
                                  <div class="col-span-6 sm:col-span-3">
                                    <label for="komunio_place" class="block text-sm font-medium text-gray-700">Komunio place</label>
                                    <input type="text" name="komunio_place" id="komunio_place" value="{{ $parishioner->komunio_place }}" autocomplete="komunio_place" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                  </div>

                                  
                    
                                  <div class="col-span-6 sm:col-span-3">
                                    <label for="komunio_date" class="block text-sm font-medium text-gray-700">Komunio date</label>
                                    <input type="date" name="komunio_date" id="komunio_date" value="{{ $parishioner->komunio_date }}" autocomplete="komunio_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                  </div>
                    
                                  <div class="col-span-6 ">
                                    <label for="family" class="block text-sm font-medium text-gray-700">Family</label>
                                    <select id="family_id" name="family_id" autocomplete="family_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm select2">
                                      <option value="">--Select--</option>
                                      @foreach (App\Models\Family::all() as $family)
                                          <option value="{{ $family->id }} " @selected(old('family_id') == $family )>{{ $family->name }}</option>
                                      @endforeach

                                   </select>

                              
                                  </div>

                                  <div class="col-span-6 ">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email adress</label>
                                    <input type="email" name="email" id="email"  value="{{ $parishioner->email }}"
                                    autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
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
                                      

                                      <option value="">Select Gender</option>
                                      <option value="Male" @selected(old('gender') =="Male")>Male</option>
                                      <option value="Female" @selected(old('gender') =="Female")>Female</option>
                                      <option value="Unspecified" @selected(old('gender') =="Unspecified")>Unspecified</option>
                               
                        

                                    </select>
                                  </div>
                    
                                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="status" class="block text-sm font-medium text-gray-700">status</label>
                                    <select id="status" name="status" autocomplete="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                      <option value="1">active</option>
                                      <option value="0">Inactive</option>
                                     
                                    </select>
                                  </div>

                                
                                </div>



                            <div class="sm:col-span-6 pt-5">
                                <button type="submit"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                  
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
   
</x-admin-layout>