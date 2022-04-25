<x-admin-layout>
    <div class="py-12 w-full">
       
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex flex-col">
                
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        
                        
                        
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 ">
             <div class="p-4 ">
                <a href="/download" class="shadow bg-blue-600 text-white rounded-md p-2">Download PDF</a>
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
                                                Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email</th>
                                            {{-- <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th> --}}
                                            <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
     <script type="text/javascript"> 

        $(document).ready(function(){ 

        // DataTable 

          $('#datatable').DataTable({ 

             processing: true, 

             serverSide: true, 

             ajax: "{{route('admin.getuser')}}", 

             columns: [ 

                { data: 'id' }, 

                { 
                    data: 'name' }, 
               

                { data: 'email' }, 

                {
                    data: null,
                    orderable: false,
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

    </script>
</x-admin-layout>