@extends('client.layout.master')

@section('tieudetrang')
    Trang chủ admin
@endsection

@section('content')
    <div class="container mt-5 mb-5">
        <h2 class="mb-4">Danh sách tin tức</h2>
        <div class="d-flex justify-content-end m-2">
            <a class="btn btn-sm btn-success" href={{ route('admin.create') }}>Thêm mới</a>
        </div>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Tóm tắt</th>
                    <th scope="col">Tương tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            @if ($post->urlHinh)
                                <img src="{{ asset('storage/views/images/' . $post->urlHinh) }}" alt="" width="100">
                            @else
                              
                            @endif
                        </td>
                        <td>{{ $post->tieuDe }}</td>
                        <td>{{ $post->tomTat }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('admin.edit', $post->id) }}" class="btn btn-warning btn-sm m-2">Sửa</a>
                                <form action="{{ route('admin.destroy', $post->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm m-2">Xóa</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
