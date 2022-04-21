<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";

	protected $fillable = ["kategori"];

	public function transaksi()
	{
		return $this->hasMany('App\Transaksi');
	}

	public function transaksiCount1()
	{
		return $this->transaksi()
		->selectRaw('kategori_id , SUM(nominal) as total')
		->where('jenis','Pemasukan')
		->groupBy('kategori_id');
	}

	public function transaksiCount2()
	{
		return $this->transaksi()
		->selectRaw('kategori_id , SUM(nominal) as total')
		->where('jenis','Pengeluaran')
		->groupBy('kategori_id');
	}

	

}
