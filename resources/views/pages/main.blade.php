@extends('layout')
@section('content')
    @include('pages.banner')
    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="col-md-8 about-left">
                    <div class="about-tre">
                        <div class="a-1">
                            @foreach ($all_post as $key => $post)
							<div class="col-md-6 abt-left">
								<a href="{{ route('bai-viet.show',[$post->id]) }}"><img src="{{ asset('public/uploads/'.$post->image) }}" alt="{{ Str::slug($post->title) }}" /></a>
								<a href="{{ route('danh-muc.show',[$post->category->id,'slug'=>Str::slug($post->category->title)]) }}"><h6>{{ $post->category->title }}</h6></a>
								<h3><a href="{{ route('bai-viet.show',[$post->id]) }}">{{ $post->title }}</a></h3>
								<p>{!! $post->short_desc !!}</p>
								<label>{{ $post->post_date }}</label>
                                <a href="{{ route('bai-viet.show',[$post->id]) }}">Đọc tiếp...</a>
							</div>
                            @endforeach
							<div class="clearfix"></div>
						</div>
                        {{-- <div class="a-1">
                            @foreach ($all_post as $key => $post)
                                <div class="row" style="margin: 5px">
                                    <a href="{{ route('danh-muc.show',[$post->category->id,'slug'=>Str::slug($post->category->title)]) }}"><h6>{{ $post->category->title }}</h6></a>
                                    <a href="{{ route('bai-viet.show',[$post->id]) }}">

                                        <div class="col-md-6 abt-left" >
                                            <img src="{{ asset('public/uploads/'.$post->image) }}" alt="{{ Str::slug($post->title) }}" />
                                        </div>
                                        <div class="col-md-6 abt-left">

                                            <h3>{{ $post->title }}</h3>
                                            <p>{!! $post->short_desc !!}</p>
                                            <label>{{ $post->post_date }}</label>
                                            <a href="{{ route('bai-viet.show',[$post->id]) }}">Đọc tiếp...</a>
                                        </div>
                                    </a>
                                </div>

                            @endforeach

                            <div class="clearfix"></div>
                        </div> --}}
                        <div style="margin: 5px">
                            {!! $all_post->links() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 about-right heading">
                    <div class="abt-2">
                        <h3>Bài viết mới nhất</h3>
                        @foreach ($newest_post as $key => $new)

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
                    <div class="abt-2">
                        <h3>Bài viết xem nhiều</h3>
                        <ul>
                            @foreach ($viewest_post as $key => $view)
                                <li><a href="{{ route('bai-viet.show',[$view->id]) }}">{{ $view->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="abt-2">
                        <h3>NEWS LETTER</h3>
                        <div class="news">
                            <form>
                                <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                                <input type="submit" value="Đăng ký">
                            </form>
                        </div>
                    </div>
                </div>


                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
