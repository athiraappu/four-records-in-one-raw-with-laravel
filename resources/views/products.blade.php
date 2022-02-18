@extends('layout')
   
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
          <!-- <td>Name</td> -->
         <!--  <td>Description</td>
          <td>Price</td> -->
        </tr>
    </thead>
     <tbody>
	     @foreach($products as $key => $product)	    

	         @if($key%4 == 0)
	         	<tr>
	          @endif
	         	 <td>
	         	 <h4>{{$key.$product['name']}}</h4>
	         	 <h5>{{$key.$product['description']}}</h5>
	         	 <h6>{{$key.$product['price']}}</h6>
	         	</td>      

	        @if(($key+1)%4 ==0 || count($products)-1 == $key)	       
			   </tr>
			@endif
	     @endforeach     
     </tbody>
 </table>

    
@endsection