<!DOCTYPE html>
<html>
<head>
	<title>Students Info</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.admin')
	
	<fieldset>
    <legend><b>Students Info</b></legend><br/>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Students Info</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>Status</td><td>Action</td>
		</tr>
		@foreach($students as $std)
		<tr>
			<td>{{$std['id']}}</td>
			<td>{{$std['name']}}</td>
			<td>{{$std['status']}}</td>
			<td>
				@if($std['status'] == "a")
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$std['id']}}" />
						<input type="hidden" name="status" value="p" />
						<input type="submit" name="submit" value="Pending">
					</form>
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$std['id']}}" />
						<input type="hidden" name="status" value="r" />
						<input type="submit" name="submit" value="Reject">
					</form>
				@endif
				@if($std['status'] == "p")
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$std['id']}}" />
						<input type="hidden" name="status" value="a" />
						<input type="submit" name="submit" value="Approve">
					</form>
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$std['id']}}" />
						<input type="hidden" name="status" value="r" />
						<input type="submit" name="submit" value="Reject">
					</form>
				@endif
				@if($std['status'] == "r")
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$std['id']}}" />
						<input type="hidden" name="status" value="a" />
						<input type="submit" name="submit" value="Approve">
					</form>
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$std['id']}}" />
						<input type="hidden" name="status" value="p" />
						<input type="submit" name="submit" value="Pending">
					</form>
				@endif
			</td>
		</tr>
		@endforeach
	</table>
	</fieldset>
	
	
	@include('reusable.footer')

	
</body>
</html>