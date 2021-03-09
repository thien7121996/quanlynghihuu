@extends('master')
@section('content')
<div class="row">

    <div class="col-6">
        <p><span class="heading">Hồ sơ cán bộ</span> <span class="label label-warning arrowed-in-right arrowed">Đang làm
                việc</span>
        </p>
    </div>
    <div class="col-6 algin-right">
        <button class="btn btn-sm btn-success"> <i class="fa fa-save"></i> Lưu và tiếp tục</button>
        <button class="btn btn-sm btn-success"><i class="fa fa-save"></i> Lưu và đóng</button>
        <button class="btn btn-sm btn-default"> <i class="fa fa-window-close" aria-hidden="true"></i> Quay vè</button>
    </div>
</div>

<div class="tabs-container">
    <ul class="nav nav-tabs" role="tablist">
        <li><a id="btntabthongtinchung" class="nav-link active show" data-toggle="tab" href="#tabthongtinchung"> Thông
                tin
                chung</a></li>
        <li><a id="btntabbienchehopdong" class="nav-link" data-toggle="tab" href="#tabbienchehopdong">Biên chế, hợp
                đồng</a></li>
        <li><a class="nav-link" data-toggle="tab" id="btntabcongtac" href="#tabcongtac">Công tác</a></li>
        <li><a class="nav-link" data-toggle="tab" id="btntabluongphucap" href="#tabluongphucap">Lương phụ cấp</a></li>
        <li><a class="nav-link" data-toggle="tab" id="btntabboiduongdaotao" href="#tabboiduongdaotao">Đào tạo bồi
                dưỡng</a></li>
        <li><a class="nav-link" data-toggle="tab" id="btntabthiduakhenthuong" href="#tabthiduakhenthuong">Khen thưởng,
                kỷ luật</a></li>
        <li><a class="nav-link" data-toggle="tab" id="btntabbaohiem" href="#tabbaohiem">Bảo hiểm</a></li>
        <li><a class="nav-link" data-toggle="tab" id="btntabthannhan" href="#tabthannhan">Hồ sơ thân nhân</a></li>
        <li><a class="nav-link" data-toggle="tab" id="btntabdang" href="#tabdang">Đảng, đoàn, đoàn thể khác</a></li>
        <li><a class="nav-link" data-toggle="tab" id="btntabthongtinkhac" href="#tabthongtinkhac">Thông tin khác</a>
        </li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" id="tabthongtinchung" class="tab-pane active show">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabthongtinchung')
            </div>
        </div>

        <div role="tabpanel" id="tabbienchehopdong" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabbienche')
            </div>
        </div>

        <div role="tabpanel" id="tabcongtac" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabcongtac')
            </div>
        </div>

        <div role="tabpanel" id="tabluongphucap" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabluongphucap')
            </div>
        </div>
        <div role="tabpanel" id="tabboiduongdaotao" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabdaotaoboiduong')
            </div>
        </div>
        <div role="tabpanel" id="tabthiduakhenthuong" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabthiduakhenthuong')
            </div>
        </div>
        <div role="tabpanel" id="tabbaohiem" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabbaohiem')
            </div>
        </div>
        <div role="tabpanel" id="tabthannhan" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabthanhnhan')
            </div>
        </div>
        <div role="tabpanel" id="tabdang" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabdang')
            </div>
        </div>
        <div role="tabpanel" id="tabthongtinkhac" class="tab-pane">
            <div class="tab-panel">
                @include('quanlyhoso.edit.tabthongtinkhac')
            </div>
        </div>
    </div>
</div>
@endsection

<style>
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

    .group-info {
        display: flex;
    }

    .group-info label {
        min-width: 150px;
    }

    .group-info span {
        color: #1c84c6 !important;
        font-weight: bold;
    }
</style>
<script type="module" src="js\hoso\suahoso\index.js"></script>