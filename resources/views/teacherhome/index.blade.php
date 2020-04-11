<!DOCTYPE html>
<html>
<head>
	<title>Teacher Home</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.teacher')

<fieldset>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">My Subjects</td></tr>
		<tr>
			<td>ID</td><td>Subject Name</td><td>Class</td><td>Teacher Name</td>
		</tr>

		@foreach($data as $row)

		<tr>
			<td>{{$row['id']}}</td>
			<td>{{$row['subjectname']}}</td>
			<td>{{$row['class']}}</td>
			<td>{{$row['teachername']}}</td>
		<tr/>

		@endforeach
		
	</table>


</fieldset>
	
	@include('reusable.footer')

</body>
</html>