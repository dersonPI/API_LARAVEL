<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;

class MasterController extends Controller
{
 

//empty case '/'
  public function getFogueteIndex(){
           // logic when empty
    return response()->json(['message' => ' REST Back-end Challenge 20201209 Running',],201);       
 }//end getFogueteIndex


    public ?array $space_restult_array = NULL ;
    public ?array $foguetes = NULL;
    public function getAllFoguete() {
        // logic to get all Foguete goes here
        //query the database
        //
        
        $foguetes = Space::latest()->paginate();     
        // paginated query with limit of the last 100 results
    
         
        
       try {
        foreach ($foguetes as $kf) {
          $this->space_restult_array[] =  array(
                                               'id' => $kf->id,
                                               'imported_t' => $kf->imported_t,
                                               'status' => $kf->status,
                                               'data' =>json_decode($kf->data),
                                               );        
         }     
        
        if (empty($this->space_restult_array)) {
            return response()->json(['message' => 'No Rocket found',],404);
          # code...
        }else{
          return response($this->space_restult_array, 200);
        }
        


       } catch (\Exception $e) {
         //return if wrong
       return response($e->getMessage(), 500);
       }

     
    }
  
  
  
      public function createFoguete(Request $request) {
        // logic to create a Foguete 
        $foguete = new Space;
        $foguete->data =  is_null($request->data) ? $foguete->data : $request->data;
        $foguete->status= $request->status  ;

        ///verify if the status error
        if ( $foguete->status == 'draft'  || $foguete->status == 'trash' || $foguete->status == 'published' ) {
          try {
            $foguete->save();          
            return response()->json([
              "message" => "Rocket created successfully",
          ], 201);
          }catch (\Exception $e) {
            return response()->json([
              "message" => "Rocket create failed",  
              "error" => "Check all mandatory fields",
              ] , 500);
          }
  
        }else{
          return response()->json([
            "message" => "Rocket create failed",  
            "error" => "status must be draft, trash or published",
            ] , 500);
        }
      

       
      

      }//end of createFoguete
  

      public function getFoguete($id) {
        // logic to get a Foguete specific
        if (Space::where('id', $id)->exists()) {
            $foguete = Space::where('id', $id)->first();     
         return response()->json([
                "message" => "Rocket found",
                "id" => $foguete->id,
                "status" => $foguete->status,
                "imported_t" => $foguete->imported_t,
                "data" => json_decode($foguete->data)
            ], 200);
          # code...
        }else{
          return response()->json([
                "message" => "Rocket not found",
            ], 404);
        }
      }//end getFoguete



  
      public function updateFoguete(Request $request, $id) {
        // logic to update a Foguete 

        if (Space::where('id', $id)->exists()) {        
            $foguete = Space::where('id', $id)->first();
            $foguete->data =  is_null($request->data) ? $foguete->data : $request->data;
            $foguete->status= is_null($request->status) ?  $foguete->status : $request->status;
           
            try {
              $foguete->save();
              return response()->json([
                "message" => "Rocket updated successfully",
            ], 200);
            } catch (\Exception $e) {
              return response()->json([
                "message" => "Rocket updated failed",
                "error" => "Values accepted in draft, trash and published status;"
                ] , 500);
            }
        }else{
          return response()->json([
                "message" => "Rocket not found",
            ], 404);
        }
      }//end updateFoguete
  


      public function deleteFoguete ($id) {
        // logic to delete a Foguete 
        if (Space::where('id', $id)->exists()) {
            $foguete = Space::where('id', $id)->first();
            $foguete->delete();

            return response()->json([
                "message" => "Rocket deleted successfully",
            ], 200);
          # code...
        }else{
          return response()->json([
                "message" => "Rocket not found",
            ], 404);
        }
      }//end deleteFoguete



}
