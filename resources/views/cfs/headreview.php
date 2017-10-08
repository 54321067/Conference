<meta charset="utf-8">
		<link href="/semantic/dist/semantic.css" rel="stylesheet">
	
		<link href="/style.css" rel="stylesheet">
		<link rel="shortcut icon" href="/favicon.ico" />
		<script src="/jquery-3.1.0.min.js"></script>
		<script src="/semantic/dist/semantic.min.js"></script>
		<script src="/moment.js"></script>
		<script src="/script.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  		<script>
		  $( function() {
		    $( "#datepicker" ).datepicker({dateFormat: "dd-mm-yy"});
		  } );
		  function getSubmit() {
		        var x = document.getElementById("check");
		        if(x.checked == true){
		          $("#submit").prop('disabled', false);
		        }
  			}
  		</script>