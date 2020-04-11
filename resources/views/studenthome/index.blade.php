<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>

</STYLE>
<body>
	@include('Stusable.header')
	@include('Stusable.sidebar.student')
	{{@csrf_field()}}
	
    
	<table border="1" cellpadding="5" cellspacing="0" align="center">
		
			
		</tr>

		@foreach($data as $row)	

		<tr>
			<td>Your ID :</td>
			<td>{{$row['id']}}</td>
		<tr/>

		<tr>
			<td>Name :</td>
			<td>{{$row['name']}}</td>
			
				
		<tr/>

		<tr>
			<td>Your Type:</td>
			<td style="color:Darkblue">{{$row['type']}}</td>
			
				
		<tr/>


		<tr>
			<td>Email :</td>
			<td>{{$row['email']}}</td>
		<tr/>

		<tr>

			<td>Father Name :</td>
			<td>{{$row['fathername']}}</td>
		<tr/>

		<tr>

			<td>Mother Name :</td>
			<td>{{$row['mothername']}}</td>
		<tr/>

		<tr>

			<td>Address :</td>
			<td>{{$row['address']}}</td>
		<tr/>

		<tr>

			<td>Gender :</td>
			<td>{{$row['gender']}}</td>
		<tr/>

		<tr>

			<td>date of Birth :</td>
			<td>{{$row['dob']}}</td>
		<tr/>
		
	    @endforeach


	</table>

	

	
	
	
	@include('reusable.footer')

	
</body>
</html>