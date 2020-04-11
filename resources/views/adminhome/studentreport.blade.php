<!DOCTYPE html>
<html>
<head>
	<title>Generate Student Report</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.admin')
	<fieldset>
    <legend><b>Generate Student Report</b></legend>
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
				<td>Generate By</td>
				<td>:</td>
				<td>
					<select name = "generate">
					<option value="1">Highest Mark In FirstTerm</option>
					<option value="2">Highest Mark In SecondTerm</option>
					<option value="3">Highest Mark In FinalTerm</option>
					</select>
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
		<input type="reset">
	</form>	
</fieldset>
@if(!empty($students))
<fieldset>
    <legend><b>Students Report</b></legend><br/>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">{{ $term }}</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>Father Name</td><td>Total Mark</td>
		</tr>
		@foreach($students as $std)
		<tr>
			<td>{{$std['id']}}</td>
			<td>{{$std['name']}}</td>
			<td>{{$std['fathername']}}</td>
			<td>{{$mark}}</td>
		</tr>
		@endforeach
	</table>
</fieldset>
@endif
	@include('reusable.footer')

</body>
</html>