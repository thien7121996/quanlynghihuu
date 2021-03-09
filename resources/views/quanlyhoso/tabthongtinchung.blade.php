<div class="row">
    <div class="col-12">
        <h4>Thông tin chung</h4>
        <hr />
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label class="full-width" for="">Ảnh thẻ</label>
            <img id="avatar" />
            <button id="btnAvatar" class="btn btn-sm btn-primary">Chọn ảnh</button>
            <input type="file" class="d-none" id="fileAvatar" />
        </div>

        <div class="group-info">
            <label for="">Nơi sinh</label>
            <p id="lblNoiSinh"></p>
        </div>
        <div class="group-info">
            <label for="">Địa chỉ thường trú</label>
            <p id="lblDiaChiThuongTru"></p>
        </div>
        <div class="group-info">
            <label for="">Nguyên quán</label>
            <p id="lblNguyenQuan"></p>
        </div>
        <div class="group-info">
            <label for="">Điện thoại di động</label>
            <p id="lblDienThoaiDiDong"></p>
        </div>
        <div class="group-info">
            <label for="">Đảng viên</label>
            <p id="lblDangVien"></p>
        </div>
        <div class="group-info">
            <label for="">Số sổ bảo hiểm xã hội</label>
            <p id="lblSoSoBHXH"></p>
        </div>
    </div>
    <div class="col-6">
        <div class="group-info">
            <label for="">Họ và tên</label>
            <p id="lblHoVaTen"></p>
        </div>
        <div class="group-info">
            <label for="">Giới tính</label>
            <p id="lblGioiTinh"></p>
        </div>
        <div class="group-info">
            <label for="">Ngày sinh</label>
            <p id="lblNgaySinh"></p>
        </div>
        <div class="group-info">
            <label for="">Số hiệu công chức</label>
            <p id="lblSoHieuCongChuc"></p>
        </div>
        <div class="form-group">
            <label class="full-width" for="">Scan CMND</label>
            <button id="taiCMND" class="btn btn-sm btn-success"> <i class="fa fa-upload" aria-hidden="true"></i> Tải bản
                scan CMND lên</button>
            <input type="file" name="" class="d-none" id="scancmnd">

            <ul id="listScanCMND">
                {{-- <li> <i class="fa fa-trash" aria-hidden="true">Mat truoc.jpg</i></li> --}}
            </ul>
        </div>
        <div class="group-info">
            <label for="">Dân tộc</label>
            <p id="lblDanToc"></p>
        </div>
        <div class="group-info">
            <label for="">Tình trạng hôn nhân</label>
            <p id="lblTinhTrangHonNhan"></p>
        </div>
        <div class="group-info">
            <label for="">Chức vụ đảng hiện nay</label>
            <p id="lblChucVuDangHienNay"></p>
        </div>
        <div class="group-info">
            <label for="">Mã số thuế cá nhân</label>
            <p id="lblMaSoThueCaNhan"></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h4>Thông tin liên hệ</h4>
        <hr />
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h4>Thông tin biên chế, hợp đồng hiện tại</h4>
        <hr />
    </div>
    <div class="col-6">
        <div class="group-info">
            <label for="">Loại hình biên chế, HĐ</label>
            <p id="lblLoaiHinhBienChe"></p>
        </div>
        <div class="group-info">
            <label for="">Ngày tuyển dụng chính thức</label>
            <p id="lblNgayTuyenDungChinhThuc"></p>
        </div>
        <div class="group-info">
            <label for="">Cơ quan ra quyết dịnh</label>
            <p id="lblCoQuanRaQuyetDinh"></p>
        </div>
    </div>
    <div class="col-6">
        <div class="group-info">
            <label for="">Hình thức tuyển dụng</label>
            <p id="lblHinhThucTuyenDung"></p>
        </div>
        <div class="group-info">
            <label for="">Ngày kết thúc BCSN</label>
            <p id="lblNgayKetThucBCSN"></p>
        </div>
        <div class="group-info">
            <label for="">Số quyết định</label>
            <p id="lblSoQuyetDinh"></p>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-12">
        <h4>Đối tượng đặc thù</h4>
        <hr />
    </div>

    <div class="col-6">

        <div class="group-info">
            <label for="">Đối tượng</label>
            <p id="lblDoiTuongDacThu">Thu hút</p>
        </div>
        <div class="group-info">
            <label for="">Số QĐ bố trí</label>
            <p id="lblSoQUyetDinhBoTri"></p>
        </div>
    </div>
    <div class="col-6">
        <div class="group-info">
            <label for="">Loại đối tượng</label>
            <p id="lblLoaiDoiTuongDacThu"></p>
        </div>
        <div class="group-info">
            <label for="">Ngày QĐ bố trí</label>
            <p id="lblNgayQUyetDinhBoTri"></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h4>Thông tin công tác hiện tại</h4>
        <hr />
    </div>

    <div class="col-6">
        <div class="group-info">
            <label for="">Trạng thái hồ sơ</label>
            <p id="lblTrangThaiHoSo"></p>
        </div>
        <div class="group-info">
            <label for="">Đơn vị công tác</label>
            <p id="lblDonViCongTac"></p>
        </div>
    </div>
    <div class="col-6">
        <div class="group-info">
            <label for="">Chức vụ</label>
            <p id="lblChucVu"></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h4>Lương ngach, bậc hiện tại</h4>
        <hr />
    </div>

    <div class="col-6">
        <div class="group-info">
            <label for="">Hình thức hưởng lương/ngạch</label>
            <p id="lblHinhThucHuongLuong"></p>
        </div>
        <div class="group-info">
            <label for="">Bậc</label>
            <p id="lblBac"></p>
        </div>
        <div class="group-info">
            <label for="">Ngày hưởng lương bậc</label>
            <p id="lblNgayHuongLuongBac"></p>
        </div>
    </div>
    <div class="col-6">
        <div class="group-info">
            <label for="">Mã ngạch</label>
            <p id="lblMaNgach"></p>
        </div>
        <div class="group-info">
            <label for="">Tên ngạch</label>
            <p id="lblTenNgach"></p>
        </div>
        <div class="group-info">
            <label for="">Hệ số</label>
            <p id="lblHeSo"></p>
        </div>
        <div class="group-info">
            <label for="">Ngày nâng lương tiếp theo</label>
            <p id="lblNgayNangLuongTiepTheo"></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h4>Trình độ chuyên môn</h4>
        <hr />
    </div>

    <div class="col-6">
        <div class="group-info">
            <label for="">Trình độ cao nhất</label>
            <p id="lblTrinhDoDaoTao"></p>
        </div>
        <div class="group-info">
            <label for="">Chuyên ngành đào tạo</label>
            <p id="lblChuyeNganhDaoTao"></p>
        </div>
        <div class="group-info">
            <label for="">Hình thức đào tạo</label>
            <p id="lblHinhThucDaoTao"></p>
        </div>
    </div>
    <div class="col-6">
        <div class="group-info">
            <label for="">Trường</label>
            <p id="lblTruong"></p>
        </div>
        <div class="group-info">
            <label for="">Năm tốt nghiệp</label>
            <p id="lblNamTotNghiep"></p>
        </div>
        <div class="group-info">
            <label for="">Tốt nghiệp loại</label>
            <p id="lblTotNghiepLoai"></p>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-12">
        <h4>Bồi dưỡng nghiệp vụ</h4>
        <hr />
    </div>

    <div class="col-6">
        <div class="group-info">
            <label for="">Lý luận chính trị</label>
            <p id="lblLyLuanChinhTri"></p>
        </div>


    </div>
    <div class="col-6">
        <div class="group-info">
            <label for="">Quản lý nhà nước</label>
            <p id="lblQuanLyNhaNuoc"></p>
        </div>
    </div>
</div>
<style>
    #avatar,
    #btnAvatar {
        width: 50%;
    }

    #avatar {
        height: 300px;
        object-fit: cover;
    }

    h4 {
        color: #1c84c6;
        font-size: 16pt;
    }

    #listScanCMND {
        list-style: none;

    }

    #listScanCMND li>i {
        color: rgb(189, 8, 8);
        font-size: 10pt;
    }

    #listScanCMND li {
        padding: 5px;
    }

    .group-info {
        display: flex;
    }

    .group-info label {
        min-width: 150px;
    }

    .group-info span,
    p {
        color: #1c84c6 !important;
        font-weight: bold;
    }
</style>


