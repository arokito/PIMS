<x-admin-layout>
    

    <div class="py-12 w-full ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <!-- component -->
          <div class="flex  p-2 ">
              <a href="" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-slate-100 rounded-md ">back</a>
          </div>

          <div class="flex flex-col p-2">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="" id="myForm" onsubmit="return submitForm()">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="cat_id"
                            class="block text-sm font-medium text-gray-700 p-2">Kanda</label>
                        <select id="cat_id" name="cat_id" autocomplete="cat_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="" disabled selected>chagua aina ya mchango</option>
                            @foreach (App\Models\PaymentMethod::all() as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
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

    <script type="text/javascript">

        function submitForm() {
            var selectedOption = $('#cat_id').val();
            var url = "";
            if(selectedOption == 1) {
                url = '{{ route('pay_cash')}}';
            } else if (selectedOption == 2) {
                url = '{{ route('pay_mpesa')}}';
            }
         
    
            $('#myForm').attr('action', url);
            $('form#myForm').submit();
            return false;
        }
    </script>
</x-admin-layout>