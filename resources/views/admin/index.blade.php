<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.admin')
	
<fieldset>
    <legend><b>User Statistics</b></legend><br/>
	<ul>
		<li>Total Approved User : {{$astd}}</li>
		<li>Total Rejected User : {{$rstd}}</li>
		<li>Total Pending User : {{$pstd}}</li>
	</ul>
</fieldset>
<fieldset>
    <legend><b>Moderator Statistics</b></legend><br/>
	<ul>
		<li>Total Approved Moderator : {{$atch}}</li>
		<li>Total Rejected Moderator : {{$rtch}}</li>
		<li>Total Pending Moderator : {{$ptch}}</li>
	</ul>
</fieldset>
	
	@include('reusable.footer')

</body>
</html>