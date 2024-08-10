@extends('client.layout.master')

@section('title')
    Đăng ký
@endsection

@section('content')
    <div class="d-flex justify-content-center m-5">
        <div class="col-md-6 col-lg-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('register') }}" method="post" class="p-4 border rounded shadow-sm bg-light">
                @csrf
                <div class="d-flex justify-content-center">
                    <h3>Đăng ký</h3>
                </div>

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Tên</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>

                <div class="d-grid d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
@endsection
