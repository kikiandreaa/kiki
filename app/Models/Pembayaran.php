<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'tb_pembayaran';
    protected $primaryKey = 'pembayaran_id';
    protected $guarded = '[]';
    protected $fillable = [
        'pembayaran_id',
        'pembayaran_id_transaksi',
        'pembayaran_tanggal',
        'pembayaran_total'
    ];
    public function transaksi() :BelongsTo
    {
        return $this->belongsTo(Transaksi::class, 'pembayaran_id_transaksi');    
    }
}
