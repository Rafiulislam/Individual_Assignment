<!DOCTYPE html>
<html>
<head>
	<title>Give Student Result</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.teacher')
	<div>{{session('sucmsg')}}</div><br/>
	@foreach($errors->all() as $message)
			{{$message}} <br/>
	@endforeach
	<form method="POST">
	{{@csrf_field()}}
	<fieldset>
    <legend><b>Give Student Result</b></legend><br/>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Give Student Result</td>
		</tr>	

		<tr>
			<td>Class :</td>
			<td><input type="text" name="cls"></td>
		<tr/>
		<tr>
			<td>Subject :</td>
			<td><input type="text" name="subject"></td>
		<tr/>

		<tr>
			<td>Student ID :</td>
			<td><input type="text" name="studentid"></td>
		<tr/>

		<tr>
			<td>First Term Result :</td>
			<td><input type="text" name="firstterm"></td>
		<tr/>

		<tr>
			<td>Second Term Result :</td>
			<td><input type="text" name="secondterm"></td>
		<tr/>

		<tr>

			<td>Final Term Result :</td>
			<td><input type="text" name="finalterm"></td>
		<tr/>


	</table>
	<hr>
	<input type="submit" name="submit" value="Submit">

	</fieldset>
	
	</form>
	@include('reusable.footer')

	
</body>
</html>