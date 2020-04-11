<!DOCTYPE html>
<html>
<head>
	<title>Send Notice To Student</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.teacher')
	<fieldset>
    <legend><b>Send Notice To Student</b></legend>
	<div>{{session('sucmsg')}}</div><br/>
	@foreach($errors->all() as $message)
			{{$message}} <br/>
	@endforeach
	<form method="POST">
		{{@csrf_field()}}
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Class</td>
				<td>:</td>
				<td>
					<select name = "cls">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					</select>
				</td>
				<td></td>
			</tr>

			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Subject</td>
				<td>:</td>
				<td><input name="sub" type="text" value="{{old('sub')}}"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Reason</td>
				<td>:</td>
				<td><input name="reason" type="text"></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Message</td>
				<td>:</td>
				<td><input name="message" type="text"></td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Send">
		<input type="reset">
	</form>
</fieldset>
	@include('reusable.footer')

</body>
</html>