@extends('master')
@section('content')
<div class="col-12 d-flex justify-content-end toolbar">
    <button id="btnLuuThemMoi" class="btn btn-sm btn-primary">Lưu và thêm mới</button>
    <button class="btn btn-sm btn-primary">Lưu và đóng</button>
    <button class="btn btn-sm btn-primary">Lưu và cập nhật</button>
    <button class="btn btn-sm btn-danger">Quay về</button>
</div>

<div class="tabs-container">
    <ul class="nav nav-tabs" role="tablist">
        <li><a class="nav-link active show" data-toggle="tab" href="#tab-1"> Thông tin chung</a></li>
        <li><a class="nav-link" data-toggle="tab" href="#tab-2">Biên chế, chức vụ, ngạch, bậc</a></li>
        <li><a class="nav-link" data-toggle="tab" href="#tab-3">Trình độ, đào tạo</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" id="tab-1" class="tab-pane active show">
            <div class="panel-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Đơn vị công tác</label>
                            <select data-placeholder="Chọn đơn vị công tác..." id="sltDonViCongTac"
                                class="form-control">

                            </select>
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Họ và tên</label>
                            <input id="txtHoVaTen" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="full-width"><input type="checkbox" />Hồ sơ chỉ có năm sinh</label>
                            <label for="">Ngày sinh</label>
                            <input id="txtNgaySinh" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Mã số thuế cá nhân</label>
                            <input id="txtMaSoThueCaNhan" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Tình trạng hôn nhân</label>
                            <select id="sltTinhTrangHonNhan" class="form-control">
                                <option value="0">Độc thân</option>
                                <option value="1">Đã kết hôn</option>
                                <option value="2">Hiện ly hôn</option>
                                <option value="3">Chưa xác định</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Giới tính:</label>
                            <select id="sltGioiTinh" class="form-control">
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Số hiệu công chức</label>
                            <input class="form-control" id="txtSoHieuCongChuc" />
                        </div>
                        <div class="form-group">
                            <label for="">Số sô bảo hiểm xã hội</label>
                            <input id="txtSoBHXH" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Dân tộc</label>
                            <select id="sltDanToc" class="form-control"></select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Nơi sinh</label>
                            <input id="txtNoiSinh" type="text" name="" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" id="txtDiaChi" name="" class="form-control" id="">
                        </div>

                    </div>
                    <div class="col-12">
                        <label>Quê quán:</label>
                        <div class="row">
                            <div class="col-4">
                                <select id="sltTinh" class="form-control"></select>
                            </div>
                            <div class="col-4">
                                <select id="sltHuyen" class="form-control"></select>
                            </div>
                            <div class="col-4">
                                <select id="sltXa" class="form-control"></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Điện thoại di động</label>
                            <input type="tel" name="" class="form-control" id="txtDienThoaiDiDong">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="" class="form-control" id="txtEmail">
                        </div>
                        <div class="form-group">
                            <label for="">Nghề nghiệp trước khi tuyển dụng</label>
                            <input type="text" name="" class="form-control" id="txtNgheNghiepTruocKhiTuyenDung">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Điện thoại cơ quan</label>
                            <input type="text" name="" class="form-control" id="txtDienThoaiCoQuan">
                        </div>
                        <div class="form-group">
                            <label for="">Đảng viên</label>
                            <select name="" id="sltDangVien" class="form-control">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Số thẻ đảng</label>
                            <input type="text" name="" class="form-control" id="txtSoTheDang">
                        </div>
                        <div class="form-group">
                            <label for="">Ngày chính thức</label>
                            <input type="text" name="" class="form-control" id="txtNgayChinhThuc">
                        </div>
                        <div class="form-group">
                            <label for="">Chức vụ đảng hiện nay</label>
                            <select name="" id="sltChucVuDang">
                                <option value="1">Ủy viên TW đảng</option>
                                <option value="2">Thường vụ thành ủy đảng</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Ngày kết nạp</label>
                            <input type="text" name="" class="form-control" id="txtNgayKetNap">
                        </div>
                        <div class="form-group">
                            <label for="">Nơi kết nạp</label>
                            <input type="text" name="" class="form-control" id="txtNoiKetNap">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" id="tab-2" class="tab-pane">
            <div class="panel-body">
                <div class="row">
                    <div class="col-12">
                        <h5>Loại biên chế, hợp đồng</h5>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Loại hình biên chế, hợp đồng</label>
                            <select id="sltLoaiHinhBienChe" class="form-control">
                                <option value="1">Những người hoạt động không chuyên trách cấp xã</option>
                                <option value="2">Biên chế hành chính</option>
                                <option value="3">Biên chế sự nghiệp (nhà nước giao)</option>
                                <option value="4">Hợp đồng 68 CP</option>
                                <option value="5">Hợp đồng trong chỉ tiêu</option>
                                <option value="6">Đơn vị tự hợp đồng</option>
                                <option value="7">Biên chế sự nghiệp (đơn vị tự đảm bảo)</option>
                            </select>

                        </div>

                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Ngày bắt đầu</label>
                            <input class="form-control" id="dtpNgayBatDauBienChe" />
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <input id="chkLanDauHopDong" type="checkbox">
                                <label for="checkbox1">
                                    Lần đầu hợp đồng
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Ngày ban hành</label>
                            <input class="form-control" id="dtpNgayBanHanhBienChe" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Ngày kết thúc</label>
                            <input class="form-control" id="dtpNgayKetThucBienChe" />
                        </div>
                        <div class="form-group">
                            <label for="">Số quyết định</label>
                            <input class="form-control" id="txtSoQuyetDinh" />
                        </div>
                        <div class="form-group">
                            <label for="">Cơ quan quyết định</label>
                            <input class="form-control" id="txtCoQuanQuyetDinhBienChe" />
                        </div>
                    </div>

                    <h5>Đối tượng đặc thù</h5>
                    <hr>
                    <div class="col-12">
                        <div class="form-group">
                            <label for=""><input id="chkThuhut" checked type="checkbox"> Thu hút</label>
                        </div>
                    </div>
                    <div class="grThuhut col-12">
                        <div class="form-group">
                            <label for="">Loại đối tượng</label>
                            <select id="sltLoaiDoiTuong" class="form-control">
                                <option value="1">Đúng đối tượng</option>
                                <option value="2">Vận dụng</option>
                                <option value="3">Ngành giáo dục</option>
                            </select>
                        </div>
                    </div>
                    <div class="grThuhut col-6">
                        <div class="form-group">
                            <label for="">Số QĐ, bố trí</label>
                            <input id="txtSoQD" type="text" class="form-control">

                        </div>
                    </div>
                    <div class="grThuhut col-6">
                        <div class="form-group">
                            <label for="">Ngày quyết định bố trí</label>
                            <input type="text" id="txtNgayQuyetDinhBoTri" class="form-control">
                        </div>
                    </div>

                    <h5>Ngạch bậc chức vụ</h5>
                    <hr>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Bảng lương</label>
                            <select id="sltBangLuong" class="form-control">
                                <option value="1">Theo nghị định 204</option>
                                <option value="2">Theo nghị định 205 hoặc trước năm 2003</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Hình thức hưởng lương/ngạch</label>
                            <select id="sltHinhThucHuongLuongNgach" class="form-control">
                                <option value="1">Nâng lương thường xuyên</option>
                                <option value="2">Nâng lương trước thời hạn</option>
                                <option value="3">Chuyển xếp theo bảng lương mới</option>
                                <option value="4">Hưởng lương 100%</option>
                                <option value="5">Hưởng lương 85%</option>
                                <option value="6">Lương thỏa thuận bằng tiền</option>
                                <option value="7">Thăng hạng chức danh nghề nghiệp</option>
                                <option value="8">Hạ bậc lương</option>
                                <option value="9">Hưởng lương HĐ 100%, đóng bảo hiểm 85%</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Ngạch</label>
                            <select id="sltNgach" type="text" class="form-control"></select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Bậc</label>
                            <select id="sltBac" class="form-control">

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Chức vụ</label>
                            <select id="sltChucVu" class="form-control"></select>
                        </div>
                        <div class="form-group group-hidden">
                            <label for="">Ngày bổ nhiệm chức vụ <span class="red-text">*</span></label>
                            <input class="form-control" id="dtpNGayBatBoNhiemChucVu" />
                        </div>
                        <div class="form-group">
                            <label for="">Phòng công tác</label>
                            <select id="sltPhongCongTac" class="form-control"></select>
                        </div>
                        <div class="form-group group-hidden">
                            <label for="">Cách thức bổ nhiệm <span class="red-text">*</span></label>
                            <select id="sltCachThucBoNhiem" class="form-control">
                                <option value="0">Bổ nhiệm truyền thống</option>
                                <option value="1">Thi tuyển chức danh</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Ngày hưởng lương bậc</label>
                            <input class="form-control" id="dtpNgayLuongBac" />
                        </div>
                        <div class="form-group">
                            <label for="">Ngày bắt đầu vị trí tại phòng</label>
                            <input class="form-control" id="dtpNGayBatDauViTri" />
                        </div>
                        <div class="form-group group-hidden">
                            <label for="">Ngày bắt đầu giữ chức vụ</label>
                            <input class="form-control" id="dtpNGayBatDauGiuChucVu" />
                        </div>
                        <div class="form-group group-hidden">
                            <label for="">Hình thức bổ nhiệm</label>
                            <select class="form-control" id="sltHinhThucBoNhiem">
                                <option value="0">Bổ nhiệm mới</option>
                                <option value="1">Bổ nhiệm lại</option>
                                <option value="2">Điều động và bổ nhiệm</option>
                                <option value="3">Miễn nhiễm</option>
                                <option value="4">Kéo dài thời gian đến tuổi nghỉ hưu</option>
                                <option value="5">Từ chức</option>
                                <option value="6">Phân công nhiệm vụ</option>
                                <option value="7">Bầu cử</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Hình thức phân công <span class="red-text">*</span></label>
                            <select class="form-control" id="sltHinhThucPhanCong">
                                <option value="0">Điều động theo nhiệm vụ</option>
                                <option value="1">Chuyển đội vị trí NĐ158</option>
                                <option value="2">Phân công lần đầu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <h5>Kiêm nhiệm, biệt phái</h5>
                        <hr>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Kiêm nhiệm, biệt phái</label>
                            <select id="sltKiemNhiemBietPhai" class="form-control">
                                <option value="0">
                                    Kiêm nhiệm
                                </option>
                                <option value="1">Biệt phái</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Phòng</label>
                            <select id="sltPhong" class="form-control"></select>
                        </div>
                        <div class="form-group">
                            <label for="">Ngày bắt đầu</label>
                            <input class="form-control" id="dtpNgayBatDau" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Đơn vị</label>
                            <select id="sltDonVi" class="form-control"></select>
                        </div>
                        <div class="form-group">
                            <label for="">Chức vụ</label>
                            <select id="sltChucVuBietPhai" class="form-control"></select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" id="tab-3" class="tab-pane">
            <div class="panel-body">

                <div class="row">
                    <div class="col-12">
                        <h5>Trình độ chuyên môn</h5>
                        <hr>
                        <div class="form-group">
                            <label for="">Trình độ cao nhất</label>
                            <select id="sltTrinhDoCaoNhat" class="form-control">
                                <option value="0">Chưa đào tạo</option>
                                <option value="1">Sơ cấp</option>
                                <option value="2">Trung cấp</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Trường</label>
                            <select id="sltTruong" class="form-control"></select>
                        </div>
                        <div class="form-group">
                            <label for="">Chuyên ngành đào tạo</label>
                            <select id="sltChuyenNganhDaoTao" class="form-control"></select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Năm tốt nghiệp</label>
                            <input class="form-control" id="txtNamTotNghiep" />
                        </div>
                        <div class="form-group">
                            <label for="">Tốt nghiệp loại</label>
                            <select id="sltTotNghiepLoai" class="form-control">
                                <option value="0">Yếu</option>
                                <option value="1">Trung bình</option>
                                <option value="2">Khá</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Hình thức đào tạo</label>
                            <select id="sltHinhThucDaoTao" class="form-control">
                                <option value="0">Chính quy</option>
                                <option value="1">Trực tuyến</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nước đào tạo</label>
                            <select id="sltNuocDaoTao" class="form-control"></select>
                        </div>
                    </div>

                    <div class="col-12">
                        <h5>Trình độ chuyên môn</h5>
                        <hr>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Lý luận chính trị</label>
                            <select class="form-control" id="sltLyLuanChinhTri">
                                <option value="0">Sơ cấp</option>
                                <option value="1">Trung cấp</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Quản lý nhà nước</label>
                            <select class="form-control" id="sltQuanLyNhaNuoc">
                                <option value="0">Cán sự</option>
                                <option value="1">Đại học</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tin học</label>
                            <select class="form-control" id="sltTinHoc">
                                <option value="0">A</option>
                                <option value="1">B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Quản lý kinh tế</label>
                            <select class="form-control" id="sltQuanLyKinhTe">
                                <option value="0">6 tháng</option>
                                <option value="1">1 năm</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Quốc phòng an ninh</label>
                            <select class="form-control" id="sltQuocPhongAnNinh">
                                <option value="0">Đối tượng 1</option>
                                <option value="1">Đối tượng 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Thanh tra</label>
                            <select class="form-control" id="sltThanhTra">
                                <option value="0">Thanh tra viên chính</option>
                                <option value="1">Thanh tra viên cao cấp</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tiếng Anh</label>
                            <select id="sltTiengAnh" class="form-control">
                                <option value="0">A</option>
                                <option value="1">B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Ngoại ngữ khác</label>
                            <select id="sltNgoaiNguKhac" class="form-control">
                                <option value="1">Có</option>
                                <option value="0">Không</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tên ngoại ngữ</label>
                            <select id="sltTenNgoaiNguKhac" class="form-control">
                                <option value="1">Nhật</option>
                                <option value="2">Đức</option>
                                <option value="3">Trung</option>
                                <option value="4">Pháp</option>
                                <option value="5">Ngoại ngữ khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Trình độ</label>
                            <select id="sltTrinhDoNgoaiNguKhac" class="form-control">
                                <option value="1">Sơ cấp</option>
                                <option value="2">Trung cấp</option>
                                <option value="3">Cao cấp</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Năm tốt nghiệp</label>
                            <input id="txtNamTotNghiepLyLuanChinhTri" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Năm tốt nghiệp</label>
                            <input id="txtNamTotNghiepQuanLyNhaNuoc" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Năm tốt nghiệp</label>
                            <input class="form-control" id="txtNamTotNghiepTinHoc" />
                        </div>
                        <div class="form-group">
                            <label for="">Năm tốt nghiệp</label>
                            <input class="form-control" id="txtNamTotNghiepQuanLyKinhTe" />
                        </div>
                        <div class="form-group">
                            <label for="">Năm tốt nghiệp</label>
                            <input id="txtNamTotNghiepQuocPhongAnNinh" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Năm tốt nghiệp</label>
                            <input id="txtNamTotNghiepThanhTra" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Năm tốt nghiệp</label>
                            <input id="txtNamTotNghiepTiengAnh" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Năm tốt nghiệp</label>
                            <input id="txtNamTotNghiepNgoaiNguKhac" class="form-control" />
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</div>

<style>
    .toolbar button {
        margin-left: 5px;
    }

    .group-hidden {
        /* display: none; */
    }

    .red-text {
        color: red
    }
</style>

<script type="module" src="js\hoso\add.js">
</script>
@endsection