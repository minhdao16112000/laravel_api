@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm bài viết') }} <a href="{{ url('/home') }}"> Back </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form autocomplete="off" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" placeholder="Tiêu đề..." class="form-control" name="title">
                            <label for="title">Lượt views</label>
                            <input type="text" placeholder="Lượt views..." class="form-control" name="views">
                            <label for="image">Hình ảnh</label>
                            <input type="file" class="form-control" name="image">
                            <label for="short_desc">Mô tả ngắn</label>
                            <textarea name="short_desc" id="ckeditor_shortdesc" cols="30" rows="10" placeholder="Mô tả ngắn..." class="form-control" style="resize:none"></textarea>
                            <label for="desc">Nội dung</label>
                            <textarea name="desc" id="ckeditor_desc" cols="30" rows="10" placeholder="Nội dung..." class="form-control" style="resize:none"></textarea>
                            <label for="category">Danh mục bài viết</label>
                            <select name="post_category_id" id="" class="form-control">
                                @foreach ($category as $key => $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->title }}</option>
                                @endforeach
                            </select>
                            <input type="submit" name="thembaiviet" class="btn btn-primary mt-2" value="Thêm bài viết">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
