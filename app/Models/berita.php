<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class berita extends Model
{
    use HasFactory;
    // use HasTrixRichText;
    protected $table = 'berita';
    protected $fillable = ['judul','isi','gambar','user_id'];

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id', 'id');
    }
}
