@extends('frontend.layouts.master')

@section('content')


    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">
                    @if(count($blogs)>0)
                    @foreach($blogs as $blog)

                    <div class="col-lg-4  col-md-6 d-flex align-items-stretch my-4" data-aos="fade-up">
                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{asset($blog->image_path)}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{route('blog.detail',$blog->slug)}}">{{$blog->title}}</a>
                            </h2>


                            <div class="entry-content">
                                {!! html_entity_decode(\Illuminate\Support\Str::limit($blog->content,200)) !!}
                            </div>

                        </article><!-- End blog entry -->
                    </div>

                    @endforeach
                    @else
                        <p class="text-center m-auto alert alert-danger">No blog found</p>
                    @endif

                </div>

                <div class="blog-pagination" data-aos="fade-up">
                    {{$blogs->links()}}

                </div>

            </div>
        </section><!-- End Blog Section -->



    </main><!-- End #main -->
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/blog.css')}}" class="">
@endpush
