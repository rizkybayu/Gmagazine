<?php
namespace App\Database\Model;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model{

	protected $table="tbl_admin";
	protected $primaryKey = "id";
	public $timestamps = false;

}