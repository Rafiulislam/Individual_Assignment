<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
	@include('Stusable.header')
	@include('Stusable.sidebar.student')
	<fieldset>
    <legend><b>Change Password</b></legend>
	<div>{{session('sucmsg')}}</div><br/>
	@foreach($errors->all() as $message)
			{{$message}} <br/>
	@endforeach
	<form method="POST">
		{{@csrf_field()}}
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" ></td>
				<td></td>
			</tr>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="cpassword" type="password"></td>
				<td></td>
			</tr>	
		</table>
		<hr/>
		<input type="submit" name="submit" value="Send">
		<input type="reset">
	</form>
</fieldset>
	@include('Stusable.footer')

</body>
</html>