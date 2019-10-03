 <div class="container"> 
      
    @if (session('success'))
      	  <div class="alert alert-primary" role="alert">
        	  {{session('success')}}
          </div>
    @endif


 	@if (session('error'))
      	  <div class="alert alert-danger" role="alert">
        	  {{session('error')}}
          </div>
    @endif

    @if($errors->any())
    	<div class="alertFooter alertFooter-danger">
    		<ul>
    			@foreach($errors->all() as $error)
    				<li class="text-white">{{ $error }}</li>
    			@endforeach
    		</ul>    		
    	</div>
    @endif

</div>