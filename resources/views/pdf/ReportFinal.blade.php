<style>
	.demo {
		border:1px solid #C0C0C0;
		border-collapse:collapse;
	}
	.demo th {
		border:1px solid #C0C0C0;
		background:#F0F0F0;
	}
	.demo td {
		border:1px solid #C0C0C0;
	}
</style>
<table class="demo">
	<caption>Report Akhir</caption>
	<tr>
		<th>No</th>
		<th>Nama Pembeli</th>
		<th width="10%">Email</th>
		<th>Tanggal Beli</th>
		<th>Jumlah Beli</th>
		<th>No Hp</th>
		<th>Yang Di Pesan</th>
		<th>Total</th>
		<th>Status</th>
	</tr>
	<?php $a=1; $tot = 0;?>
       @foreach($list_transaksi as $game)
	<tr>
		<td><?php echo $a; ?></td>
		<td>{{$game->nama_pembeli}}</td>
		<td>{{$game->email}}</td>
		<td>{{$game->tgl_beli}}</td>
		<td><center>{{$game->jumlah_beli}}</center></td>
		<td>{{$game->no_hp}}</td>
		<td>{{$game->game ? $game->game->nama_game : '' }}</td>
                                            <?php
                                                $totrans = $game['jumlah_beli'] * $game['game']['harga'];
                                                $tot = $tot + $totrans; 
                                            ?>
		<td><?php echo 'Rp. ' . number_format( $totrans, 0 , '' , '.' )?></td>
		<td class="center">
			@if($game->stt == "0")
            Pending
                @elseif($game->stt =="1")
                Approved
                @endif
        </td>
	</tr>
	 <?php $a++;?>
	@endforeach
                                        <tr>
                                            <td colspan="9"><b>TOTAL :</b>&nbsp;&nbsp;&nbsp;<?php echo 'Rp. ' . number_format( $tot , 0 , '' , '.' )?></td>
                                        </tr>
</table>