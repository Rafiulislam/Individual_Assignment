	
<td>Teacher Name</td>
<td>:</td>
<td>
	<select name = "teachername">
	@foreach($teachers as $teacher)
	<option value="{{$teacher['name']}} ({{$teacher['id']}})">{{$teacher['name']}} ({{$teacher['id']}})</option>
	@endforeach
	</select>
</td>
<td>
	@if($teachername != "")
		Assigned To : {{ $teachername }}
	@endif
</td>