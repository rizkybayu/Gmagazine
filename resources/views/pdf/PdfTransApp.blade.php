<style>
	.demo {
		border:1px solid #C0C0C0;
		border-collapse:collapse;
		padding:5px;
	}
	.demo th {
		border:1px solid #C0C0C0;
		padding:5px;
		background:#F0F0F0;
	}
	.demo td {
		border:1px solid #C0C0C0;
		padding:5px;
	}
</style>
<table class="demo">
	<caption>Export PDF</caption>
	<tr>
		<th>No</th>
		<th>Nama Pembeli</th>
		<th>Email</th>
		<th>Tanggal Beli</th>
		<th>Jumlah Beli</th>
		<th>No Hp</th>
		<th>Yang Di Pesan</th>
		<th>Total</th>
		<th>Status</th>
	</tr>
	<?php $a=1;?>
       @foreach($list_approved as $game)
	<tr>
		<td><?php echo $a; ?></td>
		<td>{{$game->nama_pembeli}}</td>
		<td>{{$game->email}}</td>
		<td>{{$game->tgl_beli}}</td>
		<td>{{$game->jumlah_beli}}</td>
		<td>{{$game->no_hp}}</td>
		<td>{{$game->game ? $game->game->nama_game : '' }}</td>
		<td><?php echo 'Rp. ' . number_format( $game['jumlah_beli'] * $game['game']['harga'], 0 , '' , '.' )?></td>
		<td>Approved</td>
	</tr>
	 <?php $a++;?>
	@endforeach
</table>