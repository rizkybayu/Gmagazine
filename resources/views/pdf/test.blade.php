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
	<thead>
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Tanggal Buat</th>
		<th>Kategori</th>
	</tr>
	</thead>
	<tbody>
	<?php $a=1;?>
       @foreach($list_game as $game)
	<tr>
		<td><?php echo $a; ?></td>
		<td>{{$game->Judul}}</td>
		<td>{{$game->tgl_buat}}</td>
		<td>{{$game->kategori}}</td>
	</tr>
	 <?php $a++;?>
	@endforeach
	</tbody>
</table>