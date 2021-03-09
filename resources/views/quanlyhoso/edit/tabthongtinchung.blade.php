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
            <input type="file" id="fileAvatar" class="d-none" />
        </div>

        <div class="form-group">
            <label for="">Số CMND</label>
            <input type="text" id="txtSoCMND" class="form-control">
        </div>
        <div class="form-group">
            <label class="full-width" for="">Scan CMND</label>
            <button id="btnScan" class="btn btn-sm btn-primary">Tải ảnh CMND</button>
            <input type="file" id="fileScan" class="d-none" />
        </div>
        <div class="form-group">
            <label for="">Số thẻ căn cước công dân</label>
            <input type="text" id="txtSoTheCanCuoc" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nơi cấp thẻ căn cước</label>
            <select id="txtNoiCapTheCanCuoc" class="form-control"></select>
        </div>
        <div class="form-group">
            <label for="">Mã số thuế cá nhân</label>
            <input type="text" id="txtMaSoCaNhan" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Dân tộc</label>
            <select id="sltDanToc" class="form-control"></select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="">Họ và tên</label>
            <input type="text" id="txtHoVaTen" name="" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Tên gọi khác</label>
            <input type="text" id="txtTenGoiKhac" name="" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Giới tính</label>
            <select id="sltGioiTinh" name="" id="">
                <option value="0">Nam</option>
                <option value="1">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Ngày sinh</label>
            <input id="txtNgaySinh" type="text" name="" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Số hiệu công chức</label>
            <input id="txtSoHieuCongChuc" type="text" name="" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Ngày cấp CMND</label>
            <input class="form-control" id="txtNgayCapCMND" />
        </div>
        <div class="form-group">
            <label for="">Nơi cấp CMND</label>
            <select id="sltNoiCapCMND">
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Số định danh cá nhân</label>
            <input id="txtSoDinhDanhCaNhan" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Ngày cấp thẻ căn cước</label>
            <input id="txtNgayCapTheCanCuoc" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Số sổ bào hiểm xã hội</label>
            <input id="txtSoSoBaoHiemXaHoi" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" id="txtEmail" />
        </div>
        <div class="form-group">
            <label for="">Tôn giáo</label>
            <select name="" id="sltTonGiao"></select>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Ngôn ngữ dân tộc thiểu số</label>
            <input id="txtNgonNgu" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Nơi sinh</label>
            <input id="txtNoiSinh" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Địa chỉ thường trú</label>
            <input id="txtDiaChiThuongTru" class="form-control" />
        </div>
        <div class="form-group">
            <label for="">Nguyên quán</label>
            <div class="row">
                <div class="col-4">
                    <select id="sltTinhNguyenQuan"></select>
                </div>
                <div class="col-4">
                    <select id="sltHuyenNguyenQuan"></select>
                </div>
                <div class="col-4">
                    <select id="sltXaNguyenQuan"></select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Hộ khẩu thưởng trú</label>
            <div class="row">
                <input id="txtHoKhauThuongTru" class="form-control" />
            </div>
        </div>


    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="">Điện thoại cơ quan</label>
            <input type="text" name="" class="form-control" id="txtDienThoaiCoQuan">
        </div>
        <div class="form-group">
            <label for="">Đại biểu QH, HĐND</label>
            <div class="d-flex flex-column">
                <label><input type="checkbox" id="chkQuocHoi" />Quốc hội</label>
                <label><input type="checkbox" id="chkCapTinh" />Cấp tỉnh</label>
                <label><input type="checkbox" id="chkCapHuyen" />Cấp huyện</label>
                <label><input type="checkbox" id="chkCapXa" />Cấp xã</label>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="">Điện thoại cố định</label>
            <input type="text" class="form-control" name="" id="txtDienThoaiCoDinh">
        </div>
        <div class="form-group">
            <label for="">Điện thoại di động</label>
            <input type="text" class="form-control" name="" id="txtDienThoaiDiDong">
        </div>
        <div class="form-group">
            <label for="">Tình trạng hôn nhân</label>
            <select id="sltTinhTrangHonNhan" class="form-control">
                <option value="0">Độc thân</option>
                <option value="1">Đã kết hôn</option>
                <option value="2">Hiện ly hôn</option>
                <option value="3">Chưa xác định</option>
            </select>
        </div>


    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Ghi chú</label>
            <textarea id="txtGhiChu" class="form-control">

            </textarea>
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

    }

    h4 {
        color: #1c84c6;
        font-size: 16pt;
    }
</style>