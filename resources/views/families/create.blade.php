<x-admin-layout>
    

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <!-- component -->
          <div class="flex  p-2">
              <a href="{{ route('families.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-slate-100 rounded-md ">family index</a>
          </div>

          <div class="flex flex-col p-2">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('families.store') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="sm:col-span-6" >
                    <label for="name" class="block text-sm font-medium text-gray-700"> Jina la Familia</label>
                    {{-- <div class="form-group">
                      <input class="form-control" name="name" value="{{ old('name') }}">
                      
                      @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
                  </div> --}}
                    <div class="mt-1">
                      <input type="text" id="name" name="name" value="{{ old('name') }}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>

                    @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    <div class="sm:col-span-6">
                        <label for="zone_id"
                            class="block text-sm font-medium text-gray-700">Jumuiya</label>
                        <select id="community_id" name="community_id" autocomplete="community_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach (App\Models\Community::all() as $community)
                                <option value="{{ $community->id }}">{{ $community->name }}</option>
                            @endforeach
                        </select>
                    </div>
            
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