@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Danh mục
                    <a href="{{url('/home') }}">Back</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Thứ tự</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Lượt xem</th>
      <th scope="col">Tóm tắt</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
  	@php
  	$i = 0;
  	@endphp
  	@foreach($post as $post)
  	@php
  	$i++;
  	@endphp
    <tr>
      <td scope="row">{{ $i }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->views }}</td>
      <td>{!! $post->short_desc !!}</td>
      <td><img width="100px" src="{{ asset('public/uploads/'.$post->image) }}"></td>
      <td>{{ $post->category->title }}</td>
      <td>
      	<form action="{{ route('post.destroy',[$post->id]) }}" method="POST">  
      		@method('DELETE')
      		@csrf
      		<input class="btn btn-danger mb-2 btn-sm" type="submit" value="Delete" />
      	</form>

      	<a class="btn btn-warning btn-sm" href="{{ route('post.show',[$post->id]) }}">Edit</a>
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
