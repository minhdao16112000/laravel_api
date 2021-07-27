@extends('layout')
@section('content')
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
                <div class="about-one">
                    <h3>{{ $title_category->title }}</h3>
                </div>
                <div class="about-two">
                    <p>{{ $title_category->short_desc }}</p>
                    <ul>
                        <li><p>Share : </p></li>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="pin"> </span></a></li>
                        <li><a href="#"><span class="rss"> </span></a></li>
                        <li><a href="#"><span class="drbl"> </span></a></li>
                    </ul>
                </div>
                <div class="about-tre">
                    <div class="a-1">
                        @foreach ($category_post as $key => $post)

                            <div class="row" style="margin: 5px">
                                <a href="{{ route('danh-muc.show',[$post->category->id,'slug'=>Str::slug($post->category->title)]) }}"><h6>{{ $post->category->title }}</h6></a>
                                <a href="{{ route('bai-viet.show',[$post->id]) }}">
                                    <div class="col-md-6 abt-left" >
                                        <img src="{{ asset('public/uploads/'.$post->image) }}" alt="{{ Str::slug($post->title) }}" />
                                    </div>
                                    <div class="col-md-6 abt-left">
                                        <h6>{{ $post->category->title }}</h6>
                                        <h3>{{ $post->title }}</h3>
                                        <p>{!! $post->short_desc !!}</p>
                                        <label>{{ $post->post_date }}</label>
                                        <a href="{{ route('bai-viet.show',[$post->id]) }}">Đọc tiếp...</a>
                                    </div>
                                </a>
                            </div>

                        @endforeach

                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Danh mục gợi ý</h3>
                    <ul>
                        @foreach ($category_recomment as $key => $cate_recom)
                            <li><a href="{{ route('danh-muc.show',[$cate_recom->id,'slug'=>Str::slug($cate_recom->title)]) }}">{{ $cate_recom->title }} </a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="abt-2">
                    <h3>Bài viết xem nhiều</h3>
                    @foreach ($viewest_post as $key => $new)

                        <div class="might-grid">
                            <a href="{{ route('danh-muc.show',[$new->category->id,'slug'=>Str::slug($new->category->title)]) }}"><h6>{{ $new->category->title }}</h6></a>
                            <a href="{{ route('bai-viet.show',[$new->id]) }}">
                                <div class="grid-might">
                                    <img src="{{ asset('public/uploads/'.$new->image) }}" class="img-responsive" alt="{{ Str::slug($new->title) }}">
                                </div>
                                <div class="might-top">
                                    <h4><a href="{{ route('bai-viet.show',[$new->id]) }}">{{ $new->title }}</a></h4>
                                    <p>{!! substr($new->short_desc,0,100) !!}...</p>
                                    <a href="{{ route('bai-viet.show',[$new->id]) }}">Đọc tiếp...</a>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </div>

                    @endforeach
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
