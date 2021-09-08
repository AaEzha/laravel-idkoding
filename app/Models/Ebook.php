<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * getImageAttribute
     *
     * @param  mixed $image
     * @return void
     */
    public function getImageAttribute($image)
    {
        return 'https://master.idkoding.com/storage/ebooks/' . $image;
    }

    /**
     * getCreatedAtAttribute
     *
     * @param  mixed $date
     * @return void
     */

    public function subebooks()
    {
        return $this->hasMany(Subebook::class, 'id_ebook', 'id');
    }

    public function ebooksayas()
    {
        return $this->hasMany(Ebooksaya::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y');
    }
}
