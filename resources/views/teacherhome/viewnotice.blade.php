<!DOCTYPE html>
<html>
<head>
	<title>View Notice</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.teacher')
	{{@csrf_field()}}
	<fieldset>
    <legend><b>View Notice</b></legend><br/>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">View Notice</td></tr>
		<tr>
			<td>ID</td><td>Teacher ID</td><td>Subject</td><td>Notice</td>
		<tr/>

		@foreach($data as $row)

		<tr>
			<td>{{$row['id']}}</td>
			<td>{{$row['teacherid']}}</td>
			<td>{{$row['subject']}}</td>
			<td>{{$row['notice']}}</td>
		<tr/>

		@endforeach

	</table>
	</fieldset>
	
	
	@include('reusable.footer')

	
</body>
</html>