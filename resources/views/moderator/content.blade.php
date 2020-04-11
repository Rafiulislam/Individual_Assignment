<!DOCTYPE html>
<html>
<head>
	<title>View Notice</title>
</head>
<body>
	@include('Stusable.header')
	@include('Stusable.sidebar.student')
	{{@csrf_field()}}
	
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">View Notice</td></tr>
		<tr>
			<td>Reason</td><td>Subject</td><td>Notice</td>
		<tr/>

		{{-- @foreach($data as $row)

		<tr>
			
			<td>{{$row['reason']}}</td>
			<td>{{$row['subject']}}</td>
			<td>{{$row['notice']}}</td>
		<tr/>

		@endforeach --}}

	</table>
	
	
	
	@include('reusable.footer')

	
</body>
</html>