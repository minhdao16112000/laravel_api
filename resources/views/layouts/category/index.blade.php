@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Danh mục bài viết') }} <a href="{{ url('/home') }}"> Back </a></div>
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
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                          @foreach ($category as $categories)
                            @php
                                $i++;
                            @endphp
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $categories->title }}</td>
                                <td>{{ substr($categories->short_desc,0,100) }}</td>
                                <td>
                                    <form action="{{ route('category.destroy',[$categories->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-danger mb-2 btn-sm" value="Delete">
                                    </form>
                                    <a class="btn btn-warning btn-sm" href="{{ route('category.show',[$categories->id]) }}">Edit</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
