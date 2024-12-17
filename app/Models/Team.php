<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'teams';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const KEY_SELECT = [
        'ketua'   => 'Ketua',
        'anggota' => 'Anggota',
    ];

    protected $fillable = [
        'name',
        'position',
        'task',
        'description',
        'email',
        'phone',
        'key',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
