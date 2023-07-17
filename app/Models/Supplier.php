<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'tb_supplier';
    protected $primaryKey = 'supplier_id';
    protected $guarded = '[]';
    protected $fillable = [
        'supplier_id',
        'supplier_nama',
        'supplier_alamat',
        'supplier_hp'
    ];
    public function barang() :HasMany
    {
        return $this->hasMany(barang::class, 'barang_id_supplier', 'supplier_id');    
    }
}
