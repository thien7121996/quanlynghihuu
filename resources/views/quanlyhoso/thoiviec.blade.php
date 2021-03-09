@extends('master')

@section('content')
<div class="row">
    <div class="col-12" style="text-align: right">
        <button id="btnThoiViec" class="btn btn-sm btn-success">Thôi việc hồ sơ</button>
        <button class="btn btn-sm btn-danger">Quay về</button>
    </div>

    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Ngạch</th>
                <th>Bậc</th>
                <th>Trình độ</th>
                <th>Chức vụ</th>
                <th>Phòng</th>
                <th>Phòng</th>
                <th>Đảng viên</th>
                <th>Hình thức</th>
                <th>Ngày thôi việc</th>
                <th>Số quyết định</th>
                <th>Ngày quyết định</th>
            </thead>
            <tbody id="bodyThoiViec">

            </tbody>
        </table>
    </div>
</div>

<script type="module" src="js\hoso\thoiviec.js"></script>
@endsection