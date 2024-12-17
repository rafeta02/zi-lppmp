<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aduan extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'aduans';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const HAL_SELECT = [
        'Pelayanan' => 'Pelayanan',
        'Pengaduan' => 'Pengaduan',
    ];

    protected $fillable = [
        'name',
        'email',
        'hal',
        'title',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
