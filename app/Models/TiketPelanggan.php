<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiketPelanggan extends Model
{
    protected $table = 'tiket_pelanggan';

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'alamat',
        'email',
        'jenis_kelamin',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'tiket_pelanggan_event')
                    ->withPivot('jumlah')
                    ->withTimestamps();
    }
}