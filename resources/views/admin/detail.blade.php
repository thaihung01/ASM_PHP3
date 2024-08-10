@extends('client.layout.master')

@section('tieudetrang')
    Trang Thêm mới
@endsection

@section('content')
<div class="sn-container">
    <div class="sn-img">
        <img src="/template/img/{{$posts->urlHinh}}" />
    </div>
    <div class="sn-content">
        <h2 class="sn-title">{{$posts->tieuDe}}"</h2>
        <p>
            {{$posts->noiDung}}
        </p>
    </div>
</div>
    </div>
@endsection
