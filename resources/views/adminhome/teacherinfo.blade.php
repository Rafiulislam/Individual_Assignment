<!DOCTYPE html>
<html>
<head>
	<title>Teachers Info</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.admin')
	
	<fieldset>
    <legend><b>Teachers Info</b></legend>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Teachers Info</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>Status</td><td>Action</td>
		</tr>
		@foreach($teachers as $teacher)
		<tr>
			<td>{{$teacher['id']}}</td>
			<td>{{$teacher['name']}}</td>
			<td>{{$teacher['status']}}</td>
			<td>
				@if($teacher['status'] == "a")
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$teacher['id']}}" />
						<input type="hidden" name="status" value="p" />
						<input type="submit" name="submit" value="Pending">
					</form>
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$teacher['id']}}" />
						<input type="hidden" name="status" value="r" />
						<input type="submit" name="submit" value="Reject">
					</form>
				@endif
				@if($teacher['status'] == "p")
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$teacher['id']}}" />
						<input type="hidden" name="status" value="a" />
						<input type="submit" name="submit" value="Approve">
					</form>
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$teacher['id']}}" />
						<input type="hidden" name="status" value="r" />
						<input type="submit" name="submit" value="Reject">
					</form>
				@endif
				@if($teacher['status'] == "r")
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$teacher['id']}}" />
						<input type="hidden" name="status" value="a" />
						<input type="submit" name="submit" value="Approve">
					</form>
					<form method="post" >
						{{@csrf_field()}}
						<input type="hidden" name="id" value="{{$teacher['id']}}" />
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