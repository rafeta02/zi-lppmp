<?php

namespace App\Http\Controllers;

use App\Models\WhistleBlowingSystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;

class WhistleBlowingController extends Controller
{
    /**
     * Store a newly created WBS report in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'wbs_nip_pelapor' => 'required|string|max:255',
            'wbs_nama_pelapor' => 'required|string|max:255',
            'wbs_no_telp' => 'required|string|max:20',
            'wbs_nama_terlapor' => 'required|string|max:255',
            'wbs_jabatan' => 'required|string|max:255',
            'wbs_satuan_kerja' => 'required|string|max:255',
            'wbs_perbuatan' => 'required|string',
            'wbs_perkara' => 'required|string',
            'wbs_captcha' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create new WBS report
        $wbs = new WhistleBlowingSystem();
        $wbs->nip_pelapor = $request->wbs_nip_pelapor;
        $wbs->nama_pelapor = $request->wbs_nama_pelapor;
        $wbs->no_telp = $request->wbs_no_telp;
        $wbs->nama_terlapor = $request->wbs_nama_terlapor;
        $wbs->jabatan = $request->wbs_jabatan;
        $wbs->satuan_kerja = $request->wbs_satuan_kerja;
        $wbs->perbuatan = $request->wbs_perbuatan;
        $wbs->perkara = $request->wbs_perkara;
        $wbs->status = 'pending';
        $wbs->tracking_id = WhistleBlowingSystem::generateTrackingId();
        $wbs->save();

        Alert::success('Terima kasih!', 'Pengaduan/Whistle Blowing System (WBS) Anda telah berhasil dikirim. Kami akan segera menindaklanjuti laporan Anda dan memberikan tanggapan secepat mungkin');

        // Redirect with success message
        return redirect()
            ->route('pengaduan')
            ->with('success', 'Laporan Whistle Blowing System berhasil dikirim. ID Pelacakan Anda: ' . $wbs->tracking_id);
    }

    /**
     * Check the status of a WBS report using tracking ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tracking_id' => 'required|string|exists:whistle_blowing_systems,tracking_id',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $wbs = WhistleBlowingSystem::where('tracking_id', $request->tracking_id)->first();

        return view('front.status_wbs', compact('wbs'));
    }
} 