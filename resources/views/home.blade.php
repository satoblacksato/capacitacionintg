@extends('layouts.app')
@section('title','Bienvenido')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>LISTADO DE ARTÍCULOS</h2>
        <hr/>
        <article-list></article-list>
    </div>
</div>
@endsection
@push('jsCustom')
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function() {
    
		/*	Pusher.logToConsole = true;

			var pusher = new Pusher('baeda702f52ab10f3238', {
			      cluster: 'mt1',
			      forceTLS: true
			});

		    var channel = pusher.subscribe('eliberiocapint');
		    channel.bind('articles', function(data) {
		      console.log(JSON.stringify(data));
		    });*/

		    var channel = Echo.channel('eliberiocapint');
				channel.listen('.articles', function(data) {
  					console.log(JSON.stringify(data));

  					appVue.$message({
				            type: 'info',
				            message: data.message
				          }); 

				});
    });
</script>
@endpush

