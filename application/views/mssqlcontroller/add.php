<form action="" method="post">
	<table>
		<tr>
			<td>ID Barang</td>
			<td>:</td>
			<td><input type="text" name="idbarang" /></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama" /></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>:</td>
			<td>
				<select name="kategori">
					<?
					$data=$this->db->get('categori')->result();
					foreach($data as $data):
					?>
					<option value="<?=$data->id;?>"><?=$data->nama;?></option>
					<? endforeach; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type="text" name="harga" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" value="Submit" /></td>
		</tr>
	</table>
</form>