<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.teacher')
	{{@csrf_field()}}
	<fieldset>
    <legend><b>View Profile</b></legend><br/>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">View Profile</td>
			<td><a href="">Edit Profile</a></td>
		</tr>	

		<tr>
			<td>Change Password</td>
		<tr/>

		<tr>
			<td>Password :</td>
			<td>{{$row['password']}}</td>
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

			<td>date of Birth :</td>
			<td>{{$row['dob']}}</td>
		<tr/>

	    @endforeach


	</table>

	

	</fieldset>
	
	
	@include('reusable.footer')

	
</body>
</html>