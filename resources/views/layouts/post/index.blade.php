@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Bài viết') }} <a href="{{ url('/home') }}"> Back </a></div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('failure'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('failure') }}
                        </div>
                    @endif
                    <table class="table table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Lượt xem</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Mô tả ngắn</th>
                            <th scope="col">Thuộc danh mục</th>
                            <th scope="col">Ngày thêm</th>
                            <th scope="col">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                          @foreach ($post as $p)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $p->title }}</td>
                                <td>{{ $p->views }}</td>
                                <td><img width="200px" src="{{ asset('public/uploads/'.$p->image) }}" alt=""></td>
                                <td>{!! substr($p->short_desc,0,90) !!}</td>
                                <td>{{ $p->category->title }}</td>
                                <td>{{ $p->post_date }}</td>
                                <td>
                                    <form action="{{ route('post.destroy',[$p->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-danger mb-2 btn-sm" value="Delete">
                                    </form>
                                    <a class="btn btn-warning btn-sm" href="{{ route('post.show',[$p->id]) }}">Edit</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
            <div style="margin: 5px">
                {!! $post->fragment('bar')->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
