@extends('client.layout.master')

@section('tieudetrang')
    Trang Thêm mới
@endsection

@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Thêm mới tin tức</h3>
                <form action="{{ route('admin.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tieuDe">Tiêu đề</label>
                        <input type="text" class="form-control" id="tieuDe" name="tieuDe" required>
                    </div>
                    <div class="form-group">
                        <label for="tomTat">Tóm tắt</label>
                        <input type="text" class="form-control" id="tomTat" name="tomTat" required>
                    </div>
                    <div class="form-group">
                        <label for="noiDung">Nội dung</label>
                        <textarea class="form-control" id="noiDung" rows="5" name="noiDung"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success mb-3">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
