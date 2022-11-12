

<!DOCTYPE html>
<html lang="en">

<head>

    @include("admin.admincss")
    
</head>

<body class="layout-template-1">



<div class="content">
        
        <table class="tableGG">
                <thead>
                    <tr>
    
                        <!-- <th class="column-center-align">s number</th> -->
                        <th class="column-center-align">Table number</th>
                        <th class="column-center-align">Confirmed</th>
                        <th class="column-center-align">Served</th>
                        <th class="column-center-align">Order ID</th>
                       
                    </tr>
                </thead>

              
     
                
    
                    {{-- @foreach($data as $data)
                    
                        
                        <td>{{$data->table_id}}</td>
                        <td>{{$data->confirmed}}</td>
                        <td>{{$data->served}}</td>
                        <td>{{$data->order_id}}</td>
                        
                    
                
                    @endforeach  --}}




                    @php
                    $no_of_tables = 12;
                    @endphp

                    @for ($tno = 1; $tno <= $no_of_tables ; $tno++)
                        
                        <tr>
                            <td>{{$tno}}</td>
                        </tr>
                    @endfor

                
    
    
    
               
    
    
    
    
            </table>




 
            
            

        

            
            
    
            

</body>

</html>