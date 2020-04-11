<!DOCTYPE html>
<html>
<head>
	<title>Assign Teacher To Subject</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<script type="text/javascript" src="/script/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="/script/jquery-ui.js"></script>
	<script type="text/javascript" src="/script/assignteacher.js"></script>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.admin')
	<fieldset>
    <legend><b>Assign Teacher</b></legend>
	<div>{{session('sucmsg')}}</div><br/>
	@foreach($errors->all() as $message)
			{{$message}} <br/>
	@endforeach
	<form method="POST">
		{{@csrf_field()}}
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0" id="tbl">
			<tr>
				<td>Class</td>
				<td>:</td>
				<td>
					<select name = "cls" id = "cls">
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
			<tr id="allsubjects" name="allsubjects"></tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr id="allteachers" name="allteachers"></tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
		<input type="reset">
	</form>
</fieldset>
	@include('reusable.footer')

</body>
</html>