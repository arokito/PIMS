<x-admin-layout>


    <div class="py-3 w-full">
       
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end p-2">
                <a href="{{ route('parishioners.create') }}" class="px-4 py-2 bg-emerald-400 hover:bg-emerald-300 rounded-md text-white">
               
                    <svg   class=" w-5 inline-block " xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                      </svg>
                    Add</a>
            </div>
                <div class="flex flex-col p-2">
                
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 ">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            
                          

                                <table class="min-w-full divide-y divide-gray-200"  id="datatable">
                                    <thead class="bg-gray-50">
                                        <tr>
                                      
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email</th>
                                                <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Phone</th>
                                         
                                            <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($parishioners as $p)
                                        <tr>
                                            <td>{{ $p->first_name }} {{ $p->last_name }}</td>
                                            <td>{{ $p->email }}</td>
                                            <td>{{   $p->phone}}</td>

                                            <td>
                                                <div class="flex justify-end">
                                                    <div class="flex space-x-2">
                                                    <a href="{{ route('parishioners.edit', $p->id) }}" class="text-blue-500 p-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                          </svg>
                                                    </a>
                                                    <form class="text-red-500 p-3" method="POST" action="{{ route('parishioners.destroy', $p->id) }}" onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">
    
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                    </div>
                                                </div>
                                            </td>


                                        </tr>
                                        
                                            
                                        @endforeach
                                        
                                    </tbody>
                                </table>

                                </div>

                           </div>
                           
                        </div>
                    </div>
                

            </div>
        </div>
    


   {{-- @include('inc.scripts') --}}
   {{-- <script type="text/javascript"> 

    $(document).ready(function(){ 



      // DataTable 

      $('#datatable').DataTable({ 

         processing: true, 

         serverSide: true, 

         ajax: "{{route('getparishioner')}}", 

         columns: [ 

            { data: 'id' }, 

            { 
                data: 'first_name'
             
            }, 

            { data: 'last_name' }, 

            {
                data: 'phone'
             
            },
            {
                 data: null,
                 orderable: true,
                 render: function (data, type, row, meta) {
                     return `
                     <div class="flex justify-end">
                         <div class="flex space-x-2">
                            
                                 <a href="/admin/users/ ` + row['id'] + `" class="text-blue-500 p-3 ">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                             <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                             <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                           </svg>
                                     </a>
                            

                             <form class="text-red-500 p-3" method="POST" action="/admin/users/` + row['id'] + `" onsubmit="return confirm('Are you sure?');">
                                         @csrf
                                         @method('DELETE')
                                         <button type="submit">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                 <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                 <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                               </svg>
                                         </button>
                                      </form>
                         </div>
                     </div>
                     `;
                 }
             }


         ] 

      }); 

    }); 

</script> --}}



  </x-admin-layout>