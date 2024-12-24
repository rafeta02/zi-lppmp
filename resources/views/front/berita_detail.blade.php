@extends('layouts.front')

@section('title', $post->title)

@section('content')
<div class="stg-container">
    <!-- Section: Page Title -->
    <section>
        <div class="stg-row stg-bottom-gap-l stg-tp-bottom-gap">
            <div class="stg-col-12 stg-tp-bottom-gap">
                <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">{{ $post->title }}</h1>
            </div>
        </div>

        <!-- Masked Media Container -->
        <div class="bringer-hero-media-wrap bringer-masked-bottom-right bringer-masked-block stg-bottom-gap-l" data-appear="zoom-out" data-unload="zoom-out">
            <!-- Masked Media -->
            <div class="bringer-masked-media bringer-masked-media bringer-parallax-media">
                <img src="{{ asset('bringer/img/home/home01-hero.jpg') }}" alt="Unleash Your Creativity">
            </div>
        </div>
        <div class="stg-row stg-bottom-gap-l">
            <div class="stg-col-12" data-appear="fade-left" data-unload="fade-right">
                {!! $post->content !!}
            </div>
        </div>
    </section>

    <!-- Section: Next Post -->
    <section class="divider-top" data-appear="fade-up">
        <div class="align-center" data-unload="zoom-in">
            @foreach ($relatedPosts as $item)
                <a href="{{route('blog-detail', $item->slug)}}" class="bringer-icon-link bringer-next-post">
                    <div class="bringer-icon-link-content">
                        <h6>Related News</h6>
                        <h3>{{$item->title}}</h3>
                    </div>
                    <div class="bringer-icon-wrap">
                        <i class="bringer-icon bringer-icon-explore"></i>
                    </div>
                </a><!-- .bringer-icon-link -->
            @endforeach
        </div>
    </section>
</div><!-- .stg-container -->
@endsection

@section('scripts')
@endsection