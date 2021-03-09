@extends('master')
@section('content')
<div class="row">

    <div class="col-6">
        <p><span class="heading">Hồ sơ cán bộ</span> <span class="label label-warning arrowed-in-right arrowed">Đang làm
                việc</span>
        </p>
    </div>
    <div class="col-6 algin-right">
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Word
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">SYLL 1A</a>
                <a class="dropdown-item" href="#">SYLL 2A</a>
                <a class="dropdown-item" href="#">SYLL 2C</a>
                <a class="dropdown-item" href="#">SYLL 3A</a>
                <a class="dropdown-item" href="#">SYLL 2C-VC</a>
                <a class="dropdown-item" href="#">HSVD</a>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Quản trị
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Xác thực hồ sơ</a>
                <a class="dropdown-item" href="#">Khóa mở hồ sơ</a>
            </div>
        </div>

        <button id="btnChinhSua" class="btn btn-sm btn-success">Chỉnh sửa hồ sơ</button>
        <button class="btn btn-sm btn-default">Quay vè</button>
    </div>
</div>

<div class="tabs-container">
    <ul class="nav nav-tabs" role="tablist">
        <li><a id="btnTabThongtin" class="nav-link active show" data-toggle="tab" href="#tabthongtinchung"> Thông tin
                chung</a></li>
        <li><a id="btntabbienchehopdong" class="nav-link" data-toggle="tab" href="#tabbienchehopdong">Biên chế, hợp
                đồng</a></li>
        <li><a id="btntabcongtac" class="nav-link" data-toggle="tab" href="#tabcongtac">Công tác</a></li>
        <li><a id="btntabluongphucap" class="nav-link" data-toggle="tab" href="#tabluongphucap">Lương phụ cấp</a></li>
        <li><a id="btntabboiduongdaotao" class="nav-link" data-toggle="tab" href="#tabboiduongdaotao">Đào tạo bồi
                dưỡng</a></li>
        <li><a id="btntabthiduakhenthuong" class="nav-link" data-toggle="tab" href="#tabthiduakhenthuong">Khen thưởng,
                kỷ luật</a></li>
        <li><a id="btntabbaohiem" class="nav-link" data-toggle="tab" href="#tabbaohiem">Bảo hiểm</a></li>
        <li><a id="btntabthannhan" class="nav-link" data-toggle="tab" href="#tabthannhan">Hồ sơ thân nhân</a></li>
        <li><a id="btntabdang" class="nav-link" data-toggle="tab" href="#tabdang">Đảng, đoàn, đoàn thể khác</a></li>
        <li><a id="btntabthaydoihoso" class="nav-link" data-toggle="tab" href="#tabthaydoihoso">Đề xuất thay đổi hồ
                sơ</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" id="tabthongtinchung" class="tab-pane active show">
            <div class="tab-panel">
                @include('quanlyhoso.tabthongtinchung')
            </div>
        </div>

        <div role="tabpanel" id="tabbienchehopdong" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.tabbienchehopdong')
            </div>
        </div>

        <div role="tabpanel" id="tabcongtac" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.tabcongtac')
            </div>
        </div>

        <div role="tabpanel" id="tabluongphucap" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.tabluongphucap')
            </div>
        </div>
        <div role="tabpanel" id="tabboiduongdaotao" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.tabdaotaoboiduong')
            </div>
        </div>
        <div role="tabpanel" id="tabthiduakhenthuong" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.tabkhenthuongkyluat')
            </div>
        </div>
        <div role="tabpanel" id="tabbaohiem" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.tabbaohiem')
            </div>
        </div>
        <div role="tabpanel" id="tabthannhan" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.tabhosothannhan')
            </div>
        </div>
        <div role="tabpanel" id="tabdang" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.tabdang')
            </div>
        </div>
        <div role="tabpanel" id="tabthaydoihoso" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.tabdexuatthaydoihoso')
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    table {
        font-size: 10pt;
    }

    tr>th {
        text-align: center;
        font-size: 10pt;
    }

    .heading {
        font-size: 16pt;
        color: #1c84c6 !important;
    }

    .title {
        color: #a069c3 !important;
    }

    .hr {
        background: #a069c3 !important;
    }

    .algin-right {
        text-align: right;
    }
</style>
<script type="module" src="js\chitiet\chitiet.js"></script>