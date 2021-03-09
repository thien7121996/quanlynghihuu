<div class="row">
    <div class="col-12">
        <h4>Đối tượng đặc thù</h4>
        <hr>
    </div>
    <div class="col-12">
        <label> <input type="checkbox" name="" id="chkThuHut"> Thu hút </label>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">Loại đối tượng</label>
                    <select class="form-control" name="" id="sltLoaiDoiTuong"></select>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="">Số QĐ bố trí</label>
                    <input class="form-control" name="" id="txtSoQDBoTri" />
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Ngày QĐ bố trí</label>
                    <input class="form-control" name="" id="txtNgayQDBoTri" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <h4>Quá trình công tác</h4>
        <hr>
    </div>
    <div class="col-6 algin-right">
        <button id="btnThemMoiCongTac" class="btn btn-sm btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm
            mới</button>

        <button id="btnXoaCongTac" class="btn btn-sm btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>
            Xóa</button>
    </div>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Từ ngày</th>
                    <th>Đến ngày</th>
                    <th>Đơn vị</th>
                    <th>Phòng</th>
                    <th>Chức vụ</th>
                    <th>Hệ số chức vụ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-6">
        <h4>Quá trình vị trí việc làm</h4>
        <hr>
    </div>
    <div class="col-6 algin-right">
        <button id="btnThemMoiViTriViecLam" class="btn btn-sm btn-success"><i class="fa fa-plus" aria-hidden="true"></i>
            Thêm mới</button>

        <button id="btnXoaViTriViecLam" class="btn btn-sm btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>
            Xóa</button>
    </div>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Từ ngày</th>
                    <th>Đến ngày</th>
                    <th>Vị trí việc làm</th>
                    <th>Công việc chính</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-6">
        <h4>Quá trình công tác nước ngoài</h4>
        <hr>
    </div>
    <div class="col-6 algin-right">
        <button id="btnQuaTrinhCongTacNuocNgoai" class="btn btn-sm btn-success"><i class="fa fa-plus"
                aria-hidden="true"></i> Thêm mới</button>

        <button id="btnXoaCongTacNuocNgoai" class="btn btn-sm btn-danger"> <i class="fa fa-trash"
                aria-hidden="true"></i> Xóa</button>
    </div>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Từ ngày</th>
                    <th>Đến ngày</th>
                    <th>Nơi công tác</th>
                    <th>Nội dung</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-6">
        <h4>Quá trình kiêm nhiệm, biệt phái</h4>
        <hr>
    </div>
    <div class="col-6 algin-right">
        <button id="btnThemMoiKiemNhiemBietPhai" class="btn btn-sm btn-success"><i class="fa fa-plus"
                aria-hidden="true"></i> Thêm mới</button>

        <button id="btnXoaKiemNhiemBietPhai" class="btn btn-sm btn-danger"> <i class="fa fa-trash"
                aria-hidden="true"></i> Xóa</button>
    </div>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Từ ngày</th>
                    <th>Đến ngày</th>
                    <th>Đơn vị</th>
                    <th>Phòng</th>
                    <th>Loại hình</th>
                    <th>Chức vụ</th>
                    <th>Hệ số chức vụ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalThemMoiCongTac" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm mới quá trình công tác</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Đơn vị công tác</label>
                                <select name="" id="sltDonViCongTac"></select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Ngày bắt đầu</label>
                                <input type="text" name="" id="dtpNgayBatDau" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Ngày kết thúc</label>
                                <input type="text" name="" id="dtpNgayKetThuc" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Chức vụ</label>
                                <select name="" id="sltChucvu"></select>
                            </div>
                            <div class="form-group">
                                <label for="">Hình thức phân công</label>
                                <select id="sltHinhThucPhanCong">
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Công việc chính dược giao</label>
                                <select name="" id="sltCongViecChinh">
                                    <option value="1">Chuyên viên</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Hệ số chức vụ</label>
                                <input type="text" id="txtHeSoChucVu" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Ngày bổ nhiệm chức vụ</label>
                                <input type="text" class="form-control" id="txtNgayBoNhiemChucVu">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Hình thức bổ nhiệm</label>
                                <select name="" id="sltHinhThucBoNhiem"></select>
                            </div>
                            <div class="form-group">
                                <label for="">Cách thức bổ nhiệm</label>
                                <select name="" id="sltCachThucBoNhiem"></select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Số quyết định</label>
                                <input type="text" name="" id="txtSoQuyetDinh" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Ngày ban hành</label>
                                <input type="text" name="" id="txtNgayBanHanh" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">File đính kèm</label>
                                <input type="file" name="" id="fileDinhKem" class="form-control">
                            </div>

                            <ul id="danhsachdinhkem"></ul>

                            <div class="form-group">
                                <label for="">Trích yếu</label>
                                <textarea id="txtTrichYeu" class="full-width form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Cơ quan ban hành</label>
                                <input class="form-control" type="text" name="" id="txtCoQuanBanHanh">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" id="btnLuu" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </div>
</div>