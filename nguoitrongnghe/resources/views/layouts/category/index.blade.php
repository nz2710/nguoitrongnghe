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
      <th scope="col">Mô tả</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
  	@php
  	$i = 0;
  	@endphp
  	@foreach($category as $category)
  	 @php
  	$i++;
  	@endphp
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $category->title }}</td>
      <td>{{ $category->short_desc }}</td>
      <td>
      	<form action="{{ route('category.destroy',[$category->id]) }}" method="POST">  
      		@method('DELETE')
      		@csrf
      		<input class="btn btn-danger mb-2 btn-sm" type="submit" value="Delete" />
      	</form>

      	<a class="btn btn-warning btn-sm" href="{{ route('category.show',[$category->id]) }}">Edit</a>

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
