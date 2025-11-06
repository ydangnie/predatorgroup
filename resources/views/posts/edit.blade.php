@extends('layouts.main')
@section('top')
<div class="container mt-5">
    <h2 class="mb-4">Sửa</h2>
    <form action="{{ route('posts.update', ['id'=>$posts->id]) }}" method="POST" novalidate>
        @csrf
        <input type="hidden" name="_method" value="PUT" >
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $posts->title }}" required>
           @error('title')
           <div class="text-danger">{{ $message }}</div>
           @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $posts->content }}</textarea>
             @error('content')
           <div class="text-danger">{{ $message }}</div>
           @enderror
        </div>
        <button type="submit" class="btn btn-primary">Lưu bài viết</button>
        <a href="{{ route('posts.index') }}" class="btn btn-seconrady">Hủy</a>
    </form>
</div>
@endsection