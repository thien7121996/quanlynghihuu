@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li><a id="btnChatLuongCongChuc" class="nav-link active show" data-toggle="tab" href="#tabchatluongcongchuc">
                            Chất lượng công chức(BM01/BNV)</a></li>
                    <li><a id="btnTabChatLuongVienChuc" class="nav-link" data-toggle="tab" href="#tabchatluongvienchuc">Chất lượng
                            viên chức(BM01/BNV)</a></li>
                    <li><a id="btnTabThongKeNhanh" class="nav-link" data-toggle="tab" href="#tabthongkenhanh">Thống kê
                            nhanh</a></li>

                </ul>
                <div class="tab-content">
                    <div role="tabpanel" id="tabchatluongcongchuc" class="tab-pane active show">
                        <div class="tab-panel">
                            @include('baocaochatluongsoluong.tabchatluongcongchuc')
                        </div>
                    </div>

                    <div role="tabpanel" id="tabchatluongvienchuc" class="tab-pane">
                        <div class="tab-panel">
                            @include('baocaochatluongsoluong.tabchatluongvienchuc')
                        </div>
                    </div>


                    <div role="tabpanel" id="tabthongkenhanh" class="tab-pane">
                        <div class="tab-panel">
                            @include('baocaochatluongsoluong.tabthongkenhanh')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>

        .toolbox{
            text-align: right;
        }

        .heading {
            font-size: 16pt;
            color: #1c84c6 !important;
            text-align: center;
        }

        .heading-sub{
            font-size: 12pt;
            color: #1c84c6 !important;
            text-align: center;
        }

        .number {
            background-color: #f23939;
            color: white;
            width: 20px;
            height: 20px;
            text-align: center;
            border-radius: 10px;
            margin-top: 7px;
            margin-left: 10px;
        }

    </style>

    <script type="module" src="js\baocaochatluong\baocaochatluong.js"></script>
@endsection
