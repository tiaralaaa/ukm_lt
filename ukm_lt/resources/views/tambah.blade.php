<!DOCTYPE html>
<html>
<head>
	<title>Logical Thinking Student Club</title>
</head>
<body>
 
	<h2><a>Logical Thinking Student Club</a></h2>
	<h3>Data Member</h3>
 
	<a href="/member"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/member/store" method="post">
		{{ csrf_field() }}
        <table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="nama" required="required"> </td>					
			</tr>	
			<tr>
				<td>Place of Birth</td>
				<td><input type="text" name="tpt_lahir" required="required"></td>					
			</tr>	
            <tr>
				<td>Date of Birth</td>
				<td><input type="text" name="tggl_lahir" required="required"></td>					
			</tr>
            <tr>
				<td>Gender</td>
				<td><input type="text" name="jenis_kelamin" required="required"></td>					
			</tr>		
			<tr>
				<td>Department</td>
				<td><input type="text" name="dept" required="required"></td>					
			</tr>	
            <tr>
				<td>Faculty</td>
				<td><input type="text" name="fak" required="required"></td>					
			</tr>
			<tr>
				<td>Batch</td>
				<td><input type="text" name="angktn" required="required"></td>				
			</tr>
            <tr>
				<td>Adress</td>
				<td><input type="text" name="alamat" required="required"></td>					
			</tr>
            <tr>	
                <td></td>
                <td><input type="submit" value="Simpan Data"></td>	
            </tr>	
		</table>
	</form>
 
</body>
</html>












