<!Doctype html>
<html>
	<head>
	<title>Create Movie</title>

		<meta charset="utf-8">
		<link href="{{asset('semantic/semantic.min.css')}}" rel="stylesheet">
		<script src="{{asset('jquery-3.1.0.min.js')}}"></script>
		<script src="{{asset('semantic/semantic.min.js')}}"></script>
		<script src="{{asset('moment.js')}}"></script>
		<script src="{{asset('script.js')}}"></script>

	</head>
	<body bgcolor="">
<h1>Create Movie</h1>

<form action="{{ url('/movies') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>Movie Name:</label>
	<input type="text" name="MovieName">
	<label>Movie Description:</label>
	<textarea name="MovieDescription"></textarea>
	<label>MovieAddress:</label>
	<textarea name="MovieAddress"></textarea>
	<label>MovieImage:</label>
	<textarea name="MovieImage"></textarea>

	<button type="submit">Submit</button>
</form>
</body>
</html>