<x-admin-layout>
    
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 flex justify-end">
                <a href="{{ route('parishioners.create') }}" class="shadow bg-green-700 text-white rounded-md p-2">Add</a>
             </div>
       
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg p-4" >
                <table class="min-w-full divide-y divide-gray-200" id="datatable">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            id</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                First Name</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                               Last Name </th>
                            {{-- <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th> --}}
                            <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                           phone</th>



                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        
                    </tbody>
                </table>
            </div>

     

        </div>

    </div>
    <script type="text/javascript"> 

       $(document).ready(function(){ 



         // DataTable 

         $('#datatable').DataTable({ 

            processing: true, 

            serverSide: true, 

            ajax: "{{route('getparishioner')}}", 

            columns: [ 

               { data: 'id' }, 

               { 
                   data: 'first_name', 
                
               }, 

               { data: 'last_name' }, 

               {
                   data: 'phone',
                
               }

            ] 

         }); 

       }); 

   </script>



  </x-admin-layout>