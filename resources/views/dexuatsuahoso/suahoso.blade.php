@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Danh sách đề xuất thay đổi hồ sơ</h3>
            <hr/>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Người đề xuất</th>
                    <th>Hồ sơ được đề xuất</th>
                    <th>Nội dung đề xuất điều chỉnh</th>
                    <th>Ngày đề xuất</th>
                    <th>Trạng thái đề xuất</th>
                    <th>Ngày xử lý</th>
                </tr>
                </thead>
                <tbody id="bodyDeXuatSua"></tbody>
            </table>
        </div>
    </div>

    <script type="module" src="js\dexuatsuahoso\dexuat.js"></script>
@endsection
