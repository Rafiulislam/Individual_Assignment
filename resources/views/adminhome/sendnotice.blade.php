<!DOCTYPE html>
<html>
<head>
	<title>Send Notice To Teacher</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.admin')
	<fieldset>
    <legend><b>Send Notice To Teacher</b></legend>
	<div>{{session('sucmsg')}}</div><br/>
	@foreach($errors->all() as $message)
			{{$message}} <br/>
	@endforeach
	<form method="POST">
		{{@csrf_field()}}
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Teacher</td>
				<td>:</td>
				<td>
					<select name = "teacherid">
					@foreach($teachers as $teacher)
					<option value="{{$teacher['id']}}">{{$teacher['name']}} ({{$teacher['id']}})</option>
					@endforeach
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
				<td>Message</td>
				<td>:</td>
				<td> <textarea name="message" value="{{old('message')}}"></textarea></td>
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