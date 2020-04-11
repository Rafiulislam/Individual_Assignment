<fieldset>
    <legend><b>Users Info</b></legend><br/>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Users Info</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>Status</td><td>Type</td>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user['id']}}</td>
			<td>{{$user['name']}}</td>
			<td>{{$user['status']}}</td>
			<td>{{$user['type']}}</td>
		</tr>
		@endforeach
	</table>
	</fieldset>