<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.admin')
	
<fieldset>
    <legend><b>Students Statistics</b></legend><br/>
	<ul>
		<li>Total Approved Students : {{$astd}}</li>
		<li>Total Rejected Students : {{$rstd}}</li>
		<li>Total Pending Students : {{$pstd}}</li>
	</ul>
</fieldset>
<fieldset>
    <legend><b>Teachers Statistics</b></legend><br/>
	<ul>
		<li>Total Approved Teachers : {{$atch}}</li>
		<li>Total Rejected Teachers : {{$rtch}}</li>
		<li>Total Pending Teachers : {{$ptch}}</li>
	</ul>
</fieldset>
	
	@include('reusable.footer')

</body>
</html>