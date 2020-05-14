<!DOCTYPE html>
<html>
<head>
	<title>Logical Thinking Student Club</title>
</head>
<body>
 
	<h2><a>Logical Thinking Student Club</a></h2>
	<h3>Edit Member</h3>
 
	<a href="/member"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($member as $p)
	<form action="/member/update" method="post">
		{{ csrf_field() }}
        <table>
            <input type="hidden" name="id" value="{{ $p->member_id }}"> <br/>
			<tr>
				<td>Name</td>
				<td><input type="text" required="required" name="nama" value="{{ $p->member_nama }}"></td>					
			</tr>	
			<tr>
				<td>Place of Birth</td>
				<td> <input type="text" required="required" name="tpt_lahir" value="{{ $p->member_tpt_lahir }}"></td>					
			</tr>	
            <tr>
				<td>Date of Birth</td>
				<td> <input type="text" required="required" name="tggl_lahir" value="{{ $p->member_tggl_lahir }}"></td>					
			</tr>	
            <tr>
				<td>Gender</td>
				<td> <input type="text" required="required" name="jenis_kelamin" value="{{ $p->member_jenis_kelamin }}"></td>					
			</tr>	
			<tr>
				<td>Department</td>
				<td><input type="text" required="required" name="dept" value="{{ $p->member_dept }}"></td>					
			</tr>	
            <tr>
				<td>Faculty</td>
				<td><input type="text" required="required" name="fak" value="{{ $p->member_fak }}"></td>					
			</tr>
			<tr>
				<td>Angkatan</td>
				<td><input type="text" required="required" name="angktn" value="{{ $p->member_angktn }}"></td>				
			</tr>
            <tr>
				<td>Adress</td>
				<td><input type="text" required="required" name="alamat" value="{{ $p->member_alamat }}"></td>				
			</tr>
            <tr>	
                <td></td>
                <td><input type="submit" value="Simpan Data"></td>	
            </tr>	
		</table>
		<input type="hidden" name="id" value="{{ $p->member_id }}"> <br/>
	</form>
	@endforeach
		
 
</body>
</html>