@extends('master')

@section('content')
   <div class="row">
    <div class="col-md-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Quản lý hồ sơ</h5> 
                <div class="ibox-tools">
                    <a class="collapse-link" href="">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="close-link" href="">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="tabs-container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a class="nav-link active" data-toggle="tab" href="#tab-1">Danh sách trích ngang</a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-2">Điều động <span class="label label-danger">0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-3">Tiếp nhận lại <span class="label label-danger">0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-4">Kiêm nhiệm <span class="label label-danger">0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-5">Biệt phái <span class="label label-danger">0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-6">Nâng lương thường xuyên <span class="label label-danger">0/0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-7">Nâng lương trước thời hạn <span class="label label-danger">0/0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-8">Nghỉ hưu <span class="label label-danger">0/0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-9">Bổ nhiệm lại <span class="label label-danger">0/0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-10">Danh bạ <span class="label label-danger">0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-11">Đảng viên <span class="label label-danger">0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-12">Tập sự <span class="label label-danger">0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-13">Tự hợp đồng <span class="label label-danger">0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-14">Cử đi học <span class="label label-danger">0/0</span></a></li>

                        <li><a class="nav-link" data-toggle="tab" href="#tab-15">Đề xuất sửa HS <span class="label label-danger">0/0</span></a></li>

                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                            @include('quanlyhoso.tabdanhsachtrichngang')
                            </div>
                        </div>
                        <div role="tabpanel" id="tab-2" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-3" class="tab-pane">
                            <div class="panel-body">                                   
                                @include('quanlihs.tiepnhanlai')
                            </div>
                        </div>
                        <div role="tabpanel" id="tab-4" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-5" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-6" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-7" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-8" class="tab-pane">
                            <div class="panel-body">                                   
                                    @include('quanlyhoso.tabquanlynghihuu')
                            </div>
                        </div>
                        <div role="tabpanel" id="tab-9" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-10" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-11" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-12" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-13" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-14" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                        <div role="tabpanel" id="tab-15" class="tab-pane">
                            <div class="panel-body">                                   

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</div>






@endsection
