<!DOCTYPE html>
<html>
<head>
	<title>View Note</title>
</head>
<body>
	@include('Stusable.header')
	@include('Stusable.sidebar.student')
	{{@csrf_field()}}
	
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">View Note</td></tr>
		<tr>
			<td>Subject</td><td>File</td>
		<tr/>

		{{-- @foreach($data as $row)

		<tr>
			
			<td>{{$row['subject']}}</td>
			<td>{{$row['file']}}</td>
			
		<tr/>

		@endforeach --}}

	</table>
	
	
	
	@include('reusable.footer')

	
</body>
</html>