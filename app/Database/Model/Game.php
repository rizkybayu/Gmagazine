<?php
namespace App\Database\Model;
use Illuminate\Database\Eloquent\Model;

class Game extends Model{

	protected $table="tbl_game";
	protected $primaryKey = "id";
	public $timestamps = false;

	public function dataKategori(){
		return $this->belongsTo('App\Database\Model\Kategori','id_kategori');
	}
}