<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhistleBlowingSystem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nip_pelapor',
        'nama_pelapor',
        'no_telp',
        'nama_terlapor',
        'jabatan',
        'satuan_kerja',
        'perbuatan',
        'perkara',
        'status',
        'tracking_id',
    ];

    /**
     * Generate a unique tracking ID.
     *
     * @return string
     */
    public static function generateTrackingId(): string
    {
        $prefix = 'WBS';
        $randomString = strtoupper(substr(md5(uniqid()), 0, 8));
        $timestamp = now()->format('Ymd');
        
        return $prefix . '-' . $timestamp . '-' . $randomString;
    }
} 