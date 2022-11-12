<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use PDF;

class DynamicPDFController extends Controller
{
    function index()
    {
     $order_data = $this->get_order_data();
     return view('reports.dynamic_pdf')->with('order_data', $order_data);
    }

    function get_order_data()
    {
     $order_data = DB::table('orders')
         ->get();

        //  $order_data = DB::table('orders')
        //  ->limit(10)
        //  ->get();
     return $order_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_order_data_to_html());
     return $pdf->stream();
    }

    function convert_order_data_to_html()
    {
     $order_data = $this->get_order_data();
     $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">order id</th>
    <th style="border: 1px solid; padding:12px;" width="30%">No of items</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Total</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Date</th>
    
   </tr>
     ';  
     foreach($order_data as $order)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$order->order_id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$order->no_of_items.'</td>
       <td style="border: 1px solid; padding:12px;">'.$order->total.'</td>
       <td style="border: 1px solid; padding:12px;">'.$order->created_at.'</td>
    
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}

