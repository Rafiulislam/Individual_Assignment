	
<td>Subject Name</td>
<td>:</td>
<td>
	<select name = "sbjid" id = "sbjid">
	@foreach($subjects as $subject)
	<option value="{{$subject['id']}}">{{$subject['subjectname']}}</option>
	@endforeach
	</select>
</td>
<td></td>