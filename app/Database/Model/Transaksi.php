<?php
namespace App\Database\Model;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model{

	protected $table="tbl_transaksi";
	protected $primaryKey = "id";
	public $timestamps = false;

}