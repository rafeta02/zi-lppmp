@extends('layouts.front')

@section('title', "Standar Operasional Prosedur Layanan LPPMP UNS")

@section('content')
<div class="stg-container">
    <!-- Section: Page Title -->
    <section>
        <div class="stg-row stg-bottom-gap-l stg-tp-bottom-gap">
            <div class="stg-col-12 stg-tp-bottom-gap">
                <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">Standar Operasional Prosedur Layanan LPPMP UNS</h1>
            </div>
        </div>
        
        <div class="stg-row stg-bottom-gap-l">
            <div class="stg-col-12" data-appear="fade-left" data-unload="fade-right">
                <iframe src="{{asset('pdf/sop_layanan.pdf')}}" width="100%" height="600px" style="border: none;">
                    This browser does not support PDFs. Please download the PDF to view it.
                </iframe>
            </div>
        </div>
    </section>
</div><!-- .stg-container -->
@endsection