@section('container')
	<script>

		$( document ).ready(function() {
		    $( "#target" ).submit(function(event) {
		    	event.preventDefault();
		    	var data = $('#input').val();
		    	$.ajax({
		    		type: "POST",
		    		url: "/",
		    		data: { url: data}
		    	})
		    	.done(function( msg ) {
		    		//alert( "Data send: " + msg );
		    		$('#target').fadeOut("slow",function(){
		    			//$('result').add("div").addClass('resultMsg');
		    			$('#result').addClass('well');
		    			$('#result').append(msg);
		    		});
		    	});
		      	
		    });
		});
		
	</script>
	{{ Form::open(array('URL' => '/','class' => 'form-horizontal', 'id' => 'target')) }}
	{{ Form::url('url','',array(
		'id' => 'input',
		'placeholder' => 'Your long URL goes here..',
		'class' => 'form-control',
		'required')
		) 
	}}
	{{ Form::close() }}
	<div id="result">
		
	</div>
	
@endsection