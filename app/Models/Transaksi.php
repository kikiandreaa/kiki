<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $guarded = '[]';
    protected $fillable = [
        'transaksi_id',
        'transaksi_id_barang',
        'transaksi_id_pembeli',
        'transaksi_tanggal',
        'transaksi_keterangan'
    ];
    public function barang() :BelongsTo
    {
        return $this->BelongsTo(Barang::class, 'transaksi_id_barang');    
    }
    public function pembeli() :BelongsTo
    {
        return $this->BelongsTo(Pembeli::class, 'transaksi_id_pembeli');    
    }
    public function pembayaran() :HasMany
    {
        return $this->hasMany(Pembayaran::class, 'pembayaran_id_transaksi', 'pembayaran_id');    
    }
}
