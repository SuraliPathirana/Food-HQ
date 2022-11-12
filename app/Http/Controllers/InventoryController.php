<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use App\models\Food;

use App\models\Inventory;

use App\models\Ingredients;

use App\models\Cart;


class InventoryController extends Controller
{


    public function inUser(){
        return view ('inadmin.inadminhome');
    }

    public function infoodmenu(){

        $data=food::all();
        $ingredients =inventory::select('item_code','item_name','unit')->get();
        return view("inadmin.infoodmenu",compact("data","ingredients"));
    }

    public function inventory(){

        $data=inventory::all();
        return view("inadmin.inventory",compact("data"));
    }

    public function lowstocks(){
        // $data=inventory::select('*')->where('available_quantity','<','min_limit')->get();
        $data=inventory::select('*')->whereRaw('available_quantity <= min_limit')->get();
        return view("inadmin.lowstocks",compact("data"));
    }

    

    public function uploadinventory(Request $request){

        $data=new inventory;

            $data->item_name=$request->item_name;
            $data->unit=$request->unit;
            $data->available_quantity=$request->available_quantity;
            $data->min_limit=$request->min_limit;
            // $data->stock_value=$request->stock_value;

            // $data->description=$request->description;

            $data->save();

            return redirect()->back();

        
    }

    public function tempory($table_id){
    
        return view("tempory",compact("table_id"));
    
    }
    

    public function deductinventory($order_id){

        $data=cart::select('*')->where('order_id','=',$order_id)->get();

        foreach($data as $key => $value){   //for each item in the cart
            $foodid=$value->food_id;
            $amounts=ingredients::select('*')->where('food_id','=',$foodid)->get();

            foreach($amounts as $key => $value){    //for each ingredient
                //inventory->itemcode=$value->item_code
                inventory::where('item_code',$value->item_code)->decrement('available_quantity',$value->quantity);
            }

        }

        //what is this part for?
        $count=cart::where('table_id',$table_id)->count();
        $data=cart::where('table_id',$table_id)->join('food','carts.food_id','=','food.id')->get();
        $data2=cart::select('*')->where('table_id','=',$table_id)->get();
        $total=0;

        return redirect()->back();

    }


    public function checkOrder($order_id,$table_id){



        //2022-09-21

        // $data=DB::select('select * from users');
        // dd($data);

        // $data=DB::select(DB::raw('SELECT item_code, SUM(I.quantity) FROM (SELECT * FROM carts WHERE ordered IS NULL) as C
        // INNER JOIN ingredients AS I ON C.food_id = I.food_id
        // GROUP BY item_code'));
        // dd($data);

        $data=DB::select(DB::raw('SELECT item_code, SUM(I.quantity)*c.quantity FROM (SELECT * FROM carts WHERE order_id=124) as C
        INNER JOIN ingredients AS I ON C.food_id = I.food_id
        GROUP BY item_code'));

        foreach($data as $d){
            var_dump($d->{'SUM(I.quantity)*c.quantity'});

        }


        // var_dump("************************");

        

    //    dd($data);

        //Traverse each ingredient seperately and check if the ingredients are enough

        foreach($data as $d){
            //$p=$d->item_code;
            //var_dump($p);


            // DB::select(DB::raw('DECLARE  { @LOCAL_VARIABLE[s] integer}'));
            // $c=DB::select(DB::raw('SELECT available_quantity FROM inventories WHERE item_code=$p'));
            // $c=DB::select('select available_quantity from inventories where item_code=$value->item_code');

           // $c=inventory::select('available_quantity')->where('item_code','=',8)->get();

            $user = DB::table('inventories')->where('item_code',$d->item_code)->get();
           // $c=inventory::select('available_quantity')->where('item_code','=',$d->item_code)->get();
            foreach ($user as $object){
                $temp=$object->available_quantity;
                var_dump($temp);

                if($temp<($d->{'SUM(I.quantity)*c.quantity'})){
                    //reject the order
                    // var_dump("rejected");
                    return view("orderrejected");
                }
            }
                
            
            // dd($user->item_name);

        }


            //order is accepted

            return view("orderconfirmed",compact("table_id"));


            
            
        //}

        


        

        
      
    
    //    $data=cart::whereNull('ordered')->join('ingredients','ingredients.food_id','=','ingredients.food_id')->groupBy('item_code')->select('item_code');
    //    ->sum(ingredients.quantity)
       //$data=cart::whereNull('ordered AS C')->join('ingredients','C.food_id','=','ingredients.food_id')->groupBy('item_code')->get();
       //$data=DB::raw("SELECT * FROM carts WHERE ordered IS NULL AS 'C'")->join('ingredients','C.food_id','=','ingredients.food_id')->groupBy('item_code')->;
    
    
       //    $data=DB::raw("SELECT item_code, SUM(I.quantity) FROM (SELECT * FROM carts WHERE ordered IS NULL) AS C
    //    INNER JOIN ingredients AS I ON C.food_id = I.food_id
    //    GROUP BY item_code");
       
    //     echo gettype($data);

    //     var_dump($data);




    //     foreach( $data->toArray() as $key => $value )
    // {
    //     echo $key;
    // }

    //     foreach ($data as $p) {
    //         // echo $p->item_code ;
    //         echo "1" ;
    //     }

    //      foreach($data as $key=>$value){
    //         // echo($value->item_code);
    //         echo "1";
          
    //      }



         //should get the sum of all ingredients


        



      // return view("tempory",compact("data"));



      


    }

}

