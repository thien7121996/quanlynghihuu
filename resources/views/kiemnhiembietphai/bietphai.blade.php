@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h3>Danh sách CBCCVC được cử đến biệt phái</h3>
            <hr/>
            <div class="tableBietPhai">
                <div class="toolbar">
                    <input placeholder="Tìm kiếm">
                    <button id="btnXuatExcelDen" class="btn btn-sm btn-primary">Xuất Excel</button>
                </div>

                <table data-filter="#filter" data-page-size="5" id="tableDen" class="table table-bordered">
                    <thead>
                    <tr>
                        <th rowspan="2">TT</th>
                        <th rowspan="2">Họ và tên</th>
                        <th colspan="4">Cử đến biệt phái</th>
                        <th colspan="2">Trạng thái hiện tại</th>
                    </tr>
                    <tr>
                        <th>Đơn vị</th>
                        <th>Phòng</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Đơn vị hiện tại</th>
                        <th>chức vụ hiện tại</th>
                    </tr>
                    </thead>

                    <tbody id="bodyBietPhaiDen">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h3>Danh sách CBCCVC được cử đi biệt phái</h3>
            <hr/>
            <div class="tableBietPhai">
                <div class="toolbar">
                    <input placeholder="Tìm kiếm">
                    <button id="btnXuatExcelDi" class="btn btn-sm btn-primary">Xuất Excel</button>
                </div>

                <table data-filter="#filter" data-page-size="5" id="tableDi" class="table table-bordered">
                    <thead>
                    <tr>
                        <th rowspan="2">TT</th>
                        <th rowspan="2">Họ và tên</th>
                        <th colspan="4">Cử đến biệt phái</th>
                        <th colspan="2">Trạng thái hiện tại</th>
                    </tr>
                    <tr>
                        <th>Đơn vị</th>
                        <th>Phòng</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Đơn vị hiện tại</th>
                        <th>chức vụ hiện tại</th>
                    </tr>
                    </thead>

                    <tbody id="bodyBietPhaiDi">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="module" src='js\bietphai\bietphai.js'></script>

    <style>
        .pagination {
            display: flex;
            justify-content: center;
        }
    </style>
@endsection
