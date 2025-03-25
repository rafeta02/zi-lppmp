@extends('layouts.front')

@section('title', 'Status Pengaduan WBS | LPPMP UNS')

@section('content')
<div class="stg-container">
    <!-- Section: Page Title -->
    <section class="backlight-bottom">
        <div class="stg-row stg-bottom-gap-l">
            <div class="stg-col-10 stg-offset-1 align-center">
                <h1 class="bringer-page-title" data-appear="fade-up" data-unload="fade-up">Status Whistle Blowing System</h1>
                <p class="bringer-large-text" data-appear="fade-up" data-delay="100" data-unload="fade-up">
                    Lacak status laporan Whistle Blowing System Anda menggunakan ID Pelacakan yang telah diberikan.
                </p>
            </div>
        </div>
    </section>

    <!-- Section: Status Tracking Form -->
    <section class="backlight-bottom">
        <div class="stg-row stg-bottom-gap-l">
            <div class="stg-col-8 stg-offset-2" data-unload="fade-up">
                <div class="bringer-block">
                    @if(!isset($wbs))
                        <form method="GET" action="{{ route('wbs-status') }}" class="bringer-contact-form">
                            <div class="bringer-form-content">
                                <!-- Error Response -->
                                <div class="bringer-contact-form__response" style="{{ $errors->any() ? 'display: block;' : '' }}">
                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                
                                <h3 class="form-section-title">Masukkan ID Pelacakan</h3>
                                <label for="tracking_id">ID Pelacakan (Tracking ID)</label>
                                <input type="text" id="tracking_id" name="tracking_id" placeholder="Contoh: WBS-20230101-ABCDEF12" value="{{ old('tracking_id', '') }}" required>
                                
                                <button type="submit">Cek Status</button>
                            </div>
                        </form>
                    @else
                        <div class="wbs-status-details">
                            <h3 class="form-section-title">Detail Laporan</h3>
                            
                            <div class="status-header">
                                <div class="status-badge status-{{ $wbs->status }}">
                                    {{ $wbs->status === 'pending' ? 'Menunggu Proses' : 
                                       ($wbs->status === 'in_review' ? 'Sedang Ditinjau' : 
                                       ($wbs->status === 'resolved' ? 'Selesai' : 'Ditolak')) }}
                                </div>
                                <div class="tracking-id">
                                    ID Pelacakan: <strong>{{ $wbs->tracking_id }}</strong>
                                </div>
                            </div>

                            <div class="status-timeline">
                                <div class="timeline-item {{ $wbs->status !== 'rejected' ? 'active' : '' }}">
                                    <div class="timeline-point"></div>
                                    <div class="timeline-content">
                                        <h4>Laporan Diterima</h4>
                                        <p>{{ $wbs->created_at->format('d F Y, H:i') }}</p>
                                    </div>
                                </div>
                                
                                <div class="timeline-item {{ in_array($wbs->status, ['in_review', 'resolved']) ? 'active' : '' }}">
                                    <div class="timeline-point"></div>
                                    <div class="timeline-content">
                                        <h4>Dalam Proses Peninjauan</h4>
                                        @if($wbs->status === 'in_review')
                                            <p>Laporan Anda sedang dalam proses peninjauan oleh tim kami</p>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="timeline-item {{ $wbs->status === 'resolved' ? 'active' : '' }}">
                                    <div class="timeline-point"></div>
                                    <div class="timeline-content">
                                        <h4>Selesai</h4>
                                        @if($wbs->status === 'resolved')
                                            <p>Laporan Anda telah selesai diproses</p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="wbs-detail-grid">
                                <div class="detail-section">
                                    <h4>Informasi Laporan</h4>
                                    <div class="detail-row">
                                        <span class="detail-label">Tanggal Laporan:</span>
                                        <span class="detail-value">{{ $wbs->created_at->format('d F Y') }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="detail-label">Terakhir Diperbarui:</span>
                                        <span class="detail-value">{{ $wbs->updated_at->format('d F Y') }}</span>
                                    </div>
                                </div>
                                
                                <div class="detail-section">
                                    <h4>Detil Terlapor</h4>
                                    <div class="detail-row">
                                        <span class="detail-label">Nama:</span>
                                        <span class="detail-value">{{ $wbs->nama_terlapor }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="detail-label">Jabatan:</span>
                                        <span class="detail-value">{{ $wbs->jabatan }}</span>
                                    </div>
                                    <div class="detail-row">
                                        <span class="detail-label">Satuan Kerja:</span>
                                        <span class="detail-value">{{ $wbs->satuan_kerja }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="wbs-description">
                                <h4>Perbuatan/Tindakan yang Dilaporkan</h4>
                                <div class="description-content">
                                    {{ $wbs->perbuatan }}
                                </div>
                                
                                <h4>Perkara yang Berkaitan dengan Pengaduan</h4>
                                <div class="description-content">
                                    {{ $wbs->perkara }}
                                </div>
                            </div>

                            <div class="action-buttons">
                                <a href="{{ route('pengaduan') }}" class="btn btn-secondary">Kembali</a>
                                <a href="{{ route('wbs-status') }}" class="btn btn-primary">Cek Laporan Lain</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div><!-- .stg-container -->
@endsection

@section('styles')
<style>
    .wbs-status-details {
        padding: 20px;
    }
    
    .status-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }
    
    .status-badge {
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: bold;
        display: inline-block;
        margin-bottom: 10px;
    }
    
    .status-pending {
        background-color: #FFF3CD;
        color: #856404;
    }
    
    .status-in_review {
        background-color: #CCE5FF;
        color: #004085;
    }
    
    .status-resolved {
        background-color: #D4EDDA;
        color: #155724;
    }
    
    .status-rejected {
        background-color: #F8D7DA;
        color: #721C24;
    }
    
    .tracking-id {
        font-size: 14px;
        color: #6c757d;
    }
    
    .status-timeline {
        margin: 40px 0;
        position: relative;
    }
    
    .status-timeline:before {
        content: '';
        position: absolute;
        height: 100%;
        width: 2px;
        background-color: #e9ecef;
        left: 15px;
        top: 0;
    }
    
    .timeline-item {
        position: relative;
        padding-left: 40px;
        margin-bottom: 20px;
    }
    
    .timeline-point {
        position: absolute;
        left: 11px;
        top: 5px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #e9ecef;
        z-index: 1;
    }
    
    .timeline-item.active .timeline-point {
        background-color: #007bff;
    }
    
    .timeline-content h4 {
        margin: 0 0 5px 0;
        font-size: 16px;
    }
    
    .timeline-content p {
        margin: 0;
        color: #6c757d;
        font-size: 14px;
    }
    
    .wbs-detail-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 30px;
    }
    
    @media (max-width: 768px) {
        .wbs-detail-grid {
            grid-template-columns: 1fr;
        }
    }
    
    .detail-section {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
    }
    
    .detail-section h4 {
        margin-top: 0;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #dee2e6;
    }
    
    .detail-row {
        display: flex;
        margin-bottom: 8px;
    }
    
    .detail-label {
        font-weight: bold;
        width: 40%;
        color: #495057;
    }
    
    .detail-value {
        width: 60%;
    }
    
    .wbs-description {
        margin-bottom: 30px;
    }
    
    .wbs-description h4 {
        margin-bottom: 10px;
    }
    
    .description-content {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        white-space: pre-line;
    }
    
    .action-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }
    
    .btn {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    
    .btn-primary {
        background-color: #007bff;
        color: white;
    }
    
    .btn-primary:hover {
        background-color: #0069d9;
        color: white;
    }
    
    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }
    
    .btn-secondary:hover {
        background-color: #5a6268;
        color: white;
    }
    
    .form-section-title {
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #dee2e6;
    }
</style>
@endsection 