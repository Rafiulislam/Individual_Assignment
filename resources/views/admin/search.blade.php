<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<script type="text/javascript" src="/script/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="/script/jquery-ui.js"></script>
	<script type="text/javascript" src="/script/search.js"></script>
</head>
<body>
	@include('reusable.header')
	@include('reusable.sidebar.admin')
	
	<fieldset>
		<legend><b>Search By Name</b></legend><br/>
			<table>
				<tr>
					<td>User Name</td>
					<td>:</td>
					<td><input id="search" name="search" type="text"></td>
					<td></td>
				</tr>
			</table>
			<hr/>
		<div id="result"></div>
	</fieldset>
	
	
	@include('reusable.footer')


</body>
</html>







