<?php
namespace App\Database\Model;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model{

	protected $table="tbl_kategori";
	protected $primaryKey = "id";
	public $timestamps = false;

	public function game(){
		return $this->hasMany('App\Database\Model\Kategori','id_kategori');
	}

}