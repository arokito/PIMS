<?php

namespace App\Http\Controllers;

use App\Models\Parishioner;
use Illuminate\Http\Request;

class ParishionerController extends Controller
{
    public function index(){

        $parishioners= Parishioner::all();
        return view('parishioners.index',compact('parishioners'));
    }


     public function create(){

        return view('parishioners.create');
     }
     public function randomNumber()
     {
        $code = random_int(100000,999999);
        return $code;
     }


     public function store(Request  $request){

        $value ="unspecified";
        $user_id =auth()->user()->id;

        $request->validate([
            'first_name'=>'required', 
            'last_name'=>'required',
            'phone'=>'required',

     

        ]);
    
       $parishioner = new Parishioner;
       
       $parishioner->first_name = $request->input('first_name');
       $parishioner->last_name = $request->input('middle_name');
       $parishioner->last_name = $request->input('last_name');
       $parishioner->phone = $request->input('phone');
       $parishioner->email = $request->input('email');
       $parishioner->pay_number = $this->randomNumber();
       $parishioner->ubatizo_place = $request->input('ubatizo_place');
       $parishioner->ubatizo_date = $request->input('ubatizo_date');
       $parishioner->komunio_place = $request->input('komunio_place');
       $parishioner->komunio_date = $request->input('komunio_date');
       $parishioner->ndoa = ($request->input('ndoa') ? $request->input('ndoa') : 0);
       $parishioner->status = ($request->input('status') ? $request->input('status') : 0);
       $parishioner->gender =($request->input('gender') ? $request->input('gender') : $value);
       $parishioner->user_id=$user_id;
       $parishioner->family_id=$request->input('family_id');
      
       $parishioner->save();

        
       return to_route('parishioners.index')->with('message','family created');

        

    }
    public function edit(Parishioner $parishioner){
       
        return view('parishioners.edit',compact('parishioner'));
    }

    public function update(Request $request ,$id){

        $user_id =auth()->user()->id;

        $parishioner=Parishioner::find($id);
        $request->validate([
            'first_name'=>'required', 
            'last_name'=>'required',
            'phone'=>'required',


        ]);
    
       $parishioner->first_name = $request->input('first_name');
       $parishioner->last_name = $request->input('last_name');
       $parishioner->phone = $request->input('phone');
       $parishioner->email = $request->input('email');
       $parishioner->ubatizo_place = $request->input('ubatizo_place');
       $parishioner->ubatizo_date = $request->input('ubatizo_date');
       $parishioner->komunio_place = $request->input('komunio_place');
       $parishioner->komunio_date = $request->input('komunio_date');
       $parishioner->ndoa = $request->input('ndoa');
       $parishioner->status = $request->input('status');
       $parishioner->user_id=$user_id;

       $parishioner->save();


       return to_route('parishioners.index')->with('message','parishioner created');

       
      
    }

    public function destroy(Parishioner $parishioner){

        $parishioner->delete();
        return back()->with('message','parishioner deleted');
    }

    public function getParishioner(Request $request){

        $draw = $request->get('draw'); 

        $start = $request->get("start"); 

        $rowperpage = $request->get("length"); // Rows display per page 

 

        $columnIndex_arr = $request->get('order'); 

        $columnName_arr = $request->get('columns'); 

        $order_arr = $request->get('order'); 

        $search_arr = $request->get('search'); 

 

        $columnIndex = $columnIndex_arr[0]['column']; // Column index 

        $columnName = $columnName_arr[$columnIndex]['data']; // Column name 

        $columnSortOrder = $order_arr[0]['dir']; // asc or desc 

        $searchValue = $search_arr['value']; // Search value 

 

        // Total records 

        $totalRecords = Parishioner::select('count(*) as allcount')->count(); 

        $totalRecordswithFilter = Parishioner::select('count(*) as allcount')->where('first_name', 'like', '%' .$searchValue . '%')->count(); 

 

        // Fetch records 

        $records = Parishioner::orderBy($columnName,$columnSortOrder) 

            ->where('Parishioners.first_name', 'like', '%' .$searchValue . '%') 

            ->select('Parishioners.*') 

            ->skip($start) 

            ->take($rowperpage) 

            ->get(); 

 

        $data_arr = array(); 

        $sno = $start+1; 

        foreach($records as $record){ 

            $id = $record->id; 

            $f_name = $record->first_name; 

            $l_name = $record->last_name; 
            $phone =$record->phone;
            $status =$record->status;

 

            $data_arr[] = array( 

                "id" => $id, 

                "first_name" => $f_name, 

                "last_name" => $l_name,
                "phone" =>$phone,
                "status"=>$status

            ); 

        } 

 

        $response = array( 

            "draw" => intval($draw), 

            "iTotalRecords" => $totalRecords, 

            "iTotalDisplayRecords" => $totalRecordswithFilter, 

            "aaData" => $data_arr 

        );  

 
        return response()->json($response, 200);
        // echo json_encode($response); 

        // exit; 

    } 


}
