<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\models\User;

use App\models\Food;

use App\models\Comment;

use App\models\Customer;

use App\models\Ingredients;

use App\models\Inventory;

use App\models\Order;

use App\Models\Cart;

use App\Models\Preparationnotes;


class AdminController extends Controller
{
    public function user()
    {

        $data = user::all();
        return view("admin.users", compact("data"));
    }

    public function owneruser()
    {

        $data = user::all();
        return view("owner.ownerusers", compact("data"));
    }

    public function deleteuser($id)
    {

        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data = food::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function foodmenu()
    {

        $data = food::all();
        $ingredients =inventory::select('item_code','item_name','unit')->get();
        return view("admin.foodmenu", compact("data","ingredients"));
    }

    public function ownerfoodmenu()
    {

        $data = food::all();
        return view("owner.ownerfoodmenu", compact("data"));
    }

    public function updateview($id)
    {
        $data = food::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id)
    {

        $data = food::find($id);

        $image = $request->image;

        $imagename = time() . "." . $image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

    public function upload(Request $request)
    {

        $data = new food;


        $image = $request->image;

        $imagename = time() . "." . $image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->dish_type = $request->dish_type;

        $data->save();

        $food_id = food::max('id');


        $inv1 = new ingredients;

        $inv1->food_id = $food_id;
        $inv1->item_code = $request->Invitem1;
        $inv1->quantity = $request->amount1;
        $inv1->save();

        $inv2 = new ingredients;

        $inv2->food_id = $food_id;
        $inv2->item_code = $request->Invitem2;
        $inv2->quantity = $request->amount2;

        $inv2->save();

        $inv3 = new ingredients;

        $inv3->food_id = $food_id;
        $inv3->item_code = $request->Invitem3;
        $inv3->quantity = $request->amount3;

        $inv3->save();

        $inv4 = new ingredients;

        $inv4->food_id = $food_id;
        $inv4->item_code = $request->Invitem4;
        $inv4->quantity = $request->amount4;

        $inv4->save();

        $inv5 = new ingredients;

        $inv5->food_id = $food_id;
        $inv5->item_code = $request->Invitem5;
        $inv5->quantity = $request->amount5;

        $inv5->save();

        return redirect()->back();
    }

    public function addingredients(Request $request, $id)
    {

        $data = Ingredients::all();

        $data = Ingredients::where('food_id', $id)->get();
        return view("admin.addingredients", compact('data','id'));
    }

    public function uploadingredients(Request $request, $id)
    {
        $data = new Ingredients;
        $data->food_id = $request->id;
        $data->item_code = $request->item_code;
        $data->quantity = $request->quantity;
        $data->save();

        return redirect()->back();
    }

    public function adminorders()
    {
        $data = order::all();
        return view("admin.adminorders", compact("data"));
    }

    public function admininventory()
    {

        $data = inventory::all();
        
        return view("admin.admininventory", compact("data"));
    }

    public function ownerinventory()
    {

        $data = inventory::all();
        return view("owner.ownerinventory", compact("data"));
    }

    public function chome()
    {
 
        return view("cashier.chome");
    }

    public function corderplaced()
    {
 
        return view("cashier.corderplaced");
        // echo "<script>setTimeout(function(){ window.location.href = '/home2/0'; }, 3000);</script>";
        // return view("cashier.corderplaced");
    }

    public function reporthome()
    {

        return view("reporthome");
        // return "ok";

    }


    public function ownerreporthome()
    {

        return view("owner.ownerreporthome");
        // return "ok";

    }

    public function logout()
    {

        return view("owner.ownerreporthome");
        // return "ok";

    }

    public function markAsConfirmed($order_id){
        //DB::table('orders')->where(['order_id' => $order_id])->update(['status' => 1]);
        DB::table('orders')->where(['order_id' => $order_id])->update(['status' => 1]);
      
        return redirect()->back();


    }

    public function markAsServed($order_id){

      
        DB::table('orders')->where(['order_id' => $order_id])->update(['status' => 2]);
        //var_dump("status changed");

        // dd("changed");
        return redirect()->back();


    }


    
    public function viewcomments(){
        
        $data = comment::all();
        return view("admin.viewcomments", compact("data"));

    }

    public function showorders($order_id,$table_id){
        //show the order details to the kitchen admin

    //    $data= cart::select('*')->where('order_id', '=', $order_id)->get();
    //    $data2=$data->food_id;
    //    dd($data2);

       $data = cart::where('order_id', $order_id)->join('food', 'carts.food_id', '=', 'food.id')->get();
    //    $data = cart::where('order_id', $order_id)->join('food', 'carts.food_id', '=', 'food.id')->get();


       $data2 = preparationnotes::select('*')->where('order_id', '=', $table_id)->latest()->first();

       $data3 = order::select('*')->where('order_id', '=', $order_id)->first();

       

       
        
         return view("admin.showorders", compact('data','data2','data3','order_id'));

        // return view("admin.showorders");

        

    }

    public function updateinview($item_code)
    {
        // $data = inventory::find($item_code);
        $data= inventory::select('*')->where('item_code', '=', $item_code)->first();
        return view("inadmin.inupdateview", compact("data"));
    }


}
