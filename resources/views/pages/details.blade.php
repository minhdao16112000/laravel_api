@extends('layout')
@section('content')
    <!--start-single-->
    <div class="single">
        <div class="container">
            <div class="col-md-8">
                <style>
                    .single-top.single-post img {
                        width: 100% !important;
                    }
                </style>
                <div class="single-top single-post">
                    <a href="#"><img class="img-responsive" src="{{ asset('public/uploads/'.$post->image) }}" alt=" "></a>

                    <div class=" single-grid">
                        <h4 style="text-align: center; font-size: 30px; font-weight: bold">{{ $post->title }}</h4>
                        <ul class="blog-ic">
                            <li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Admin</span> </a> </li>
                            <li><span><i class="glyphicon glyphicon-time"> </i>{{ $post->post_date }}</span></li>
                            <li><span><i class="glyphicon glyphicon-eye-open"> </i>Views:{{ $post->views }}</span></li>
                        </ul>
                        {!! $post->desc !!}
                    </div>
                    <div class="comments heading">
                        <h3>Bình luận về bài viết</h3>
                        {{-- <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">	Richard Spark</h4>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs .  </p>
                            </div>
                            <div class="media-right">
                                <a href="#">
                                    <img src="images/si.png" alt=""> </a>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img src="images/si.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Joseph Goh</h4>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs .  </p>
                            </div>
                        </div> --}}
                    </div>
                    <div class="comment-bottom heading">
                        <h3>Để lại bình luận</h3>
                        <form>
                            <input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
                            <input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
                            <input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
                            <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                                <input type="submit" value="Gửi bình luận">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Bài viết liên quan</h3>
                    @foreach ($post_related as $key => $new)
                    <a href="{{ route('bai-viet.show',[$new->id]) }}">
                        <div class="might-grid">
                            <div class="grid-might">
                                <img src="{{ asset('public/uploads/'.$new->image) }}" class="img-responsive" alt="{{ Str::slug($new->title) }}">
                            </div>
                            <div class="might-top">
                                <h4><a href="{{ route('bai-viet.show',[$new->id]) }}">{{ $new->title }}</a></h4>
                                <p>{!! substr($new->short_desc,0,100) !!}...</p>
                                <a href="{{ route('bai-viet.show',[$new->id]) }}">Đọc tiếp...</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--end-single-->
@endsection
