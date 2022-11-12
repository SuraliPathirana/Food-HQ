<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\Food;

use App\Models\Comment;

use App\Models\Customer;

use App\Models\Cart;

use App\Models\Order;

use App\Models\Inventory;

use App\Models\Ingredients;

use App\Models\Preparationnotes;


use Session;

class HomeController extends Controller
{

    public function index($table_id)
    {
        $data = food::all();
        return view("home", compact("data", "table_id"));
    }

    public function gettable()
    {

        
        // return view("home2", compact("data", "table_id"));
        return view("gettable");
    }

    public function callhome(Request $request){
        $table_id=$request->table_id;
        $data = food::all();
        return view("home2", compact("data", "table_id"));
        //home2($data2);
    }

    public function home2($table_id)
    {

        $data = food::all();
        return view("home2", compact("data", "table_id"));
    }


    public function menu(Request $request, $table_id)
    {

        $data = food::all();
        // $data=new food;
        // $data tablenumber=$request->tablenumber;

        // if(isset($_POST['save_select'])){
        //     $tablenumber=$_POST['tablenumber'];
        // }

        //$tablenumber=$_POST['tablenumber'];
        // echo($tablenumber);
        // die("done");


        // $table_id=1;
        $count = cart::where('table_id', $table_id)->whereNull('ordered')->count();
        return view('menu', compact('data', 'count', 'table_id'));

        // return view("menu",compact('data','count'));
        //return view("menu",$tablenumber,compact("data"));

    }

    public function orders(Request $request)
    {

        $data = food::all();
        $data->tablenumber = $request->tablenumber;
        return view("orders", compact("data"));
    }

    public function adminhome(){
        return view('admin.adminhome');
    }

    

    public function redirects()
    {

        $data = food::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == 1)
        {
            return redirect('/adminhome');

            // $user_id=Auth::id();
            // $count=cart::where('user_id',$user_id)->count();
            // return view('home',compact('data','count'));
        }

        else if ($usertype == 2)
        {
            return view('inadmin.inadminhome');

            // $user_id=Auth::id();
            // $count=cart::where('user_id',$user_id)->count();
            // return view('home',compact('data','count'));
        }

        else if ($usertype == 0)
        {
            return view('owner.ownerhome');

            // $user_id=Auth::id();
            // $count=cart::where('user_id',$user_id)->count();
            // return view('home',compact('data','count'));
        }

        else if ($usertype == 3)
        {
             return view('gettable');
            

            // $user_id=Auth::id();
            // $count=cart::where('user_id',$user_id)->count();
            // return view('home',compact('data','count'));
        }

        else if($usertype==4){
            return view('gettable');
        }

        // else{

        //     //$user_id=Auth::id();
        //     $table_id=1;
        //     $count=cart::where('table_id',$table_id)->count();
        //    return view('home',compact('data','count'));
        //     // return view('menu',compact('data','count'));




        // }
    }

    // public function cart(){
    //     return view('cart');
    // }



    public function addcart(Request $request, $table_id, $id,)
    {

        //todo:should change to get a unique order number instead of user id

        // $food=Food::find($id);
        // $oldCart=Session::has('cart')?Session::get('cart'):null;
        // $cart=new Cart($oldCart);
        // $cart->add($product,$product->id);


        // $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));
        // return redirect()->route('food.index');




        //if(Auth::id()){

        //$user_id=Auth::id();

        // $table_id=1;

        $foodid = $id;
        $quantity = $request->quantity;

        $cart = new cart;

        $cart->table_id = $table_id;

        $cart->food_id = $foodid;
        $cart->quantity = $quantity;

        $cart->save();


        return redirect()->back();  //returns back to the same place?????????

        //}



    }

    public function showcart(Request $request, $table_id)
    {

        // return view('showcart');
        // $count=cart::where('table_id',$table_id)->count();
        $count = cart::where('table_id', $table_id)->whereNull('ordered')->count();
        $data = cart::where('table_id', $table_id)->whereNull('ordered')->join('food', 'carts.food_id', '=', 'food.id')->get();
        $data2 = cart::select('*')->where('table_id', '=', $table_id)->whereNull('ordered')->get();
        $total = 0;

        // dd($data);

        foreach ($data as $d)
        {
            $total += $d->quantity * $d->price;
        }


        foreach ($data2 as $d2)
        {
            $total -= $d2->quantity * $d2->price;
        }



        return view('showcart', compact("table_id", "count", "total", "data", "data2"));
    }

 

    public function remove($table_id)
    {

        $data = cart::find($table_id);
        $data->delete();
        // dd($data);
        return  redirect()->back();
    }

    public function orderrejected(Request $request){

        return view("orderrejected");

    }

   

    public function getTableOverviewData(){
        //$data=order::select('*')->where('status','=',2)->where('served','=',1)->get();


        $data=order::select('*')->where('status','!=',2)->where('status','!=',4)->where('table_id','!=',0)->get();

        //get the 3 categories seperately

        //where confirmed =0 (order placed) get the table number and order id
        // $data1=order::select('*')->where('status','=',0)->get();

        //where confirmed=1(order confirmed) get the t n and order id
        // $data2=order::select('*')->where('status','=',1)->get();

        //where there are no orders where confirmed=0 ->get the table number
        // $data3=order::select('*')->wherenot('status','=',0)->orwherenot('status','=',1)->get();

        
       
        return response()->json($data);
    }

    public function tableDetails(){
        return view("admin.tabledetails");
    }

    public function orderconfirm(Request $request, $table_id)
    {


        $datap= new preparationnotes;

        $datap->order_id=$table_id;
        $datap->remarks=$request->prepcomment;

        $datap->save();

        

        //need order id,number of items and total 
        $count = cart::where('table_id', $table_id)->whereNull('ordered')->count();
        $data = cart::where('table_id', $table_id)->whereNull('ordered')->join('food', 'carts.food_id', '=', 'food.id')->get();
        $data2 = cart::select('*')->where('table_id', '=', $table_id)->whereNull('ordered')->get();

        // $count=cart::where('table_id',$table_id)->count();


        // $data=cart::where('table_id',$table_id)->join('food','carts.food_id','=','food.id')->get();
        // $data2=cart::select('*')->where('table_id','=',$table_id)->get();
        $total = 0;

        // dd($data);

        foreach ($data as $d)
        {
            $total += $d->quantity * $d->price;
        }


        foreach ($data2 as $d2)
        {
            $total -= $d2->quantity * $d2->price;
        }





        $insert = new order;
        $insert->no_of_items = $count;
        $insert->total = $total;
        $insert->table_id = $table_id;
        $insert->save();

        $orderid = order::max('order_id');





        $array = cart::select('*')->where('table_id', '=', $table_id)->whereNull('ordered')->get();




        foreach ($array as $key => $value)
        {

            $value->order_id = $orderid;
            $value->ordered = true;

            // $data=new order;

            // $data->table_id=$request->table_id;

            // $data->item_name=$item_name;

            // $data->price=$request->price[$key];

            // $data->quantity=$request->quantity[$key];


            // $data->value=$request->quantity[$key]*$request->price[$key];

            $value->save();
        }



        // return redirect()->back();



        //call check order

       $check=$this->checkOrder($orderid,$table_id);

       if($check==1){

        DB::table('orders')->where(['order_id' => $orderid])->update(['status' => 4]);

        return view("orderrejected");

       }

       else{

        $this->deductinventory($orderid);
        if($table_id==0){
             echo "<script>setTimeout(function(){ window.location.href = '/menu/0'; }, 2000);</script>";
            return view("cashier.corderplaced");
        }
        return view("orderconfirmed", compact("table_id","orderid"));

       }

        
    }

    // public function orderconfirmed(){
    //     return view("orderconfirmed");
    // }

    public function deductinventory($order_id)
    {

        $data = cart::select('*')->where('order_id', '=', $order_id)->get();

        foreach ($data as $key => $value)
        {   //for each item in the cart
            $foodid = $value->food_id;
            $amounts = ingredients::select('*')->where('food_id', '=', $foodid)->get();

            foreach ($amounts as $key => $value)
            {    //for each ingredient
                //inventory->itemcode=$value->item_code
                inventory::where('item_code', $value->item_code)->decrement('available_quantity', $value->quantity);
            }
        }

        // $count=cart::where('table_id',$table_id)->count();


        // $data=cart::where('table_id',$table_id)->join('food','carts.food_id','=','food.id')->get();
        // $data2=cart::select('*')->where('table_id','=',$table_id)->get();
        // $total=0;

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

        // foreach($data as $d){
        //     var_dump($d->{'SUM(I.quantity)*c.quantity'});

        // }


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
            // $flag=0;
           // $c=inventory::select('available_quantity')->where('item_code','=',$d->item_code)->get();
            foreach ($user as $object){
                $temp=$object->available_quantity;
                // var_dump($temp);

                if($temp<($d->{'SUM(I.quantity)*c.quantity'})){
                    //reject the order
                    // var_dump("rejected");
                    // $flag=1;
                    // return view("orderrejected");
                    return(1);
                }
            }
                
            
            // dd($user->item_name);

        }


            //order is accepted
            // if($flag==0){

            // }
            // return redirect()->back();

                return(0);



            // return view("orderconfirmed",compact("table_id"));


            
            
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




    public function feedback($order_id)
    {

        return view("feedback",compact("order_id"));
    }

    

    public function uploadcomment(Request $request,$order_id)
    {
        

        

        $data = new comment;


        // $order_id = $request->order_id;


        $data->order_id = $order_id;
        $data->food = $request->food_rating;
        $data->portion = $request->size_rating;
        $data->service = $request->staff_rating;
        $data->interior = $request->interior_rating;
        $data->other = $request->tcomment;

        $data->save();

      
        $cus = new customer;

        $cus->customer_name =$request->c_name;
        $cus->customer_contactNo = $request->c_contact_number;
        $cus->customer_email= $request->c_email;
        $cus->save();

        // echo "<script>setTimeout(function(){ window.location.href = "{{url('/home2/2')}}" }, 3000);</script>";
        // return view("thankyou");

        echo "<script>setTimeout(function(){ window.location.href = '/gettable'; }, 3000);</script>";
        return view('thankyou');
        // return view("thankyou");


        // href=

        // return view("thankyou");
    }

    public function uploadnotes(Request $request,$table_id){

       
        $data= new preparationnotes;

        $data->order_id=$table_id;
        $data->remarks=$request->prepcomment;

        return  redirect()->back();



    }

    public function thankyou(){
        return view("thankyou");
    }


    public function showprepcomments($table_id){

        $data = preparationnotes::select('*')->where('order_id', '=', $table_id)->latest()->first();
        // $data=$table_id->preperationnotes()->latest()->first();
        
       
        
        return view("tempory",compact("data"));

    }
}
