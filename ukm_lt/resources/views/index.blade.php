<!DOCTYPE html>
<html>
<head>
	<title>Logical Thinking Student Club</title>
</head>
<body>
 
	<h2>Logical Thinking Student Club</h2>
	<h3>Data Member</h3>
 
	<a href="/member/tambah"> + Add New Member</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Place of Birth</th>
            <th>Date of Birth</th>
            <th>Gender</th>
			<th>Department</th>
			<th>Faculty</th>
            <th>Batch</th>
            <th>Adress</th>
			<th>Option</th>
		</tr>
		@foreach($member as $p)
		<tr>
			<td>{{ $p->member_nama }}</td>
			<td>{{ $p->member_tpt_lahir }}</td>
			<td>{{ $p->member_tggl_lahir }}</td>
			<td>{{ $p->member_jenis_kelamin }}</td>
            <td>{{ $p->member_dept }}</td>
            <td>{{ $p->member_fak }}</td>
            <td>{{ $p->member_angktn }}</td>
            <td>{{ $p->member_alamat }}</td>
			<td>
				<a href="/member/edit/{{ $p->member_id }}">Edit</a>
				|
				<a href="/member/hapus/{{ $p->member_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>