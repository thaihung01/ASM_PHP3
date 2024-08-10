@extends('client.layout.master')

@section('tieudetrang')
    Trang Thêm mới
@endsection

@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Cập nhật tin tức</h3>
                <form action="{{ route('admin.update', $post->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tieuDe">Tiêu đề</label>
                        <input type="text" class="form-control" id="tieuDe" name="tieuDe" value="{{ $post->tieuDe }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="tomTat">Tóm tắt</label>
                        <input type="text" class="form-control" id="tomTat" name="tomTat" value="{{ $post->tomTat }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="noiDung">Nội dung</label>
                        <textarea class="form-control" id="noiDung" name="noiDung" rows="5" required>{{ $post->noiDung }}</textarea>
                    </div>
                    <button type="submit" class="btn mt-3 btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
