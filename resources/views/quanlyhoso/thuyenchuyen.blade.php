@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="full-width" style="text-align: right">
                <button id="btnLuuThuyenChuyen" class="btn btn-sm btn-success">Lưu</button>
                <button id="btnQuayVe" class="btn btn-sm btn-secondary">Quay về</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead class="thead-inverse">
                <tr>
                    <th>Số thứ tự</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Chức vụ</th>
                    <th>Phòng</th>
                    <th>Ngày chuyển</th>
                    <th>Đến phòng</th>
                </tr>
                </thead>
                <tbody id="bodyThuyenChuyen">

                </tbody>
            </table>
        </div>
    </div>
<script type="module" src="js/hoso/thuyenchuyen.js"></script>
@endsection
