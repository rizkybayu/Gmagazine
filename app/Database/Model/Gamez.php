<?php
namespace App\Database\Model;
use Illuminate\Database\Eloquent\Model;

class Gamez extends Model{

	protected $table="tbl_games";
	protected $primaryKey = "id";
	public $timestamps = false;

}