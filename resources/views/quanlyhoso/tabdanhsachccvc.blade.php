
    <div class="row">
      
     
        <div class="col-12">
          

          
            <div id="girdcongchucvienchuc">
                    
             </div>
           
        </div>
    </div>


    <style>
        .mr-left-5 {
            margin-left: 5px;
        }

        .mr-5-top-bottom {
            margin: 5px 0px;
        }

        .danhsachthongtin {
            list-style: none;
            padding: 0;
            margin: 5px 0px;
        }

        .danhsachthongtin li {
            margin-right: 5px;
            background-color: #3a87ad;
            color: white;
            padding: 5px;
        }

        .item-document {
            list-style: none;
            padding: 0;
        }

        .item-document li {
            padding: 5px;
            line-height: 1.3;

        }

        .head-tool > * {
            margin-right: 5px;
        }
    </style>

    <!-- Modal -->
    <div class="modal fade" id="modelDieuDong" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tạo dữ liệu mẫu điều động</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered ">
                                <thead class="thead-default">
                                <tr>
                                    <th>Thông tin</th>
                                    <th>Chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Đơn vị chuyển đến</td>
                                    <td>
                                        <select id="donViChuyenDen"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ngày chuyển</td>
                                    <td>
                                        <input id="ngayChuyen" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số quyết định</td>
                                    <td>
                                        <input id="soQuyetDinh" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ngày quyết định</td>
                                    <td>
                                        <input id="ngayQuyetDinh" class="form-control" type=" text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cơ quan quyết định</td>
                                    <td>
                                        <input id="coquanQuyetDinh" class="form-control" type=" text">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" id="btnLuuDieuDong" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-------- Cu di hoc---------->

    <div class="modal fade" id="modelCuDiHoc" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tạo dữ liệu mẫu cử đi học</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered ">
                                <thead class="thead-default">
                                <tr>
                                    <th>Thông tin</th>
                                    <th>Chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Năm nhập học</td>
                                    <td>
                                        <input class="form-control" type="number" id="namNhapHoc">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Năm tốt nghiệp dự kiến</td>
                                    <td>
                                        <input id="namTotNghiepDuKien" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Loại trình độ</td>
                                    <td>
                                        <select name="" id="loaiTrinhDo"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trình độ</td>
                                    <td>
                                        <select name="" id="trinhdo"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trường đào tạo</td>
                                    <td>
                                        <select name="" id="truongdaotao"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nước đào tạo</td>
                                    <td>
                                        <select name="" id="nuocdaotao"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Khóa đào tạo</td>
                                    <td>
                                        <input class="form-control" type="text" id="khoadaotao">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chương trình đào tạo</td>
                                    <td>
                                        <select name="" id="chuongtrinhdaotao"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nguồn kinh phí</td>
                                    <td>
                                        <select name="" id="nguonkinhphi"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số QĐ cử đi học</td>
                                    <td>
                                        <input type="text" id="soquyetdinh" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ngày quyết định</td>
                                    <td>
                                        <input class="form-control" type="text" id="ngayquyetdinh">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cơ quan quyết định</td>
                                    <td>
                                        <input class="form-control" type="text" id="coquanquyetdinh">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" id="btnLuuCuDiHoc" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelKhenThuong" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tạo dữ liệu mẫu khen thưởng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead class="thead-default">
                                <tr>
                                    <th>Thông tin</th>
                                    <th>Chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Từ ngày
                                    </td>
                                    <td>
                                        <input id="TuNgayKhenThuong" type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Đến ngày
                                    </td>
                                    <td>
                                        <input id="DenNgayKhenThuong" type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Hình thức
                                    </td>
                                    <td>
                                        <select name="" id="hinhThucKhenThuong"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Lý do
                                    </td>
                                    <td>
                                        <input id="lyDoKhenThuong" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số quyết định
                                    </td>
                                    <td>
                                        <input id="soQuyetDinhKhenThuong" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ngày quyết định
                                    </td>
                                    <td>
                                        <input id="ngayQuyetDinhKhenThuong" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Cấp ra quyết định
                                    </td>
                                    <td>
                                        <input id="capRaQuyetDinhKhenThuong" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Cơ quan ra quyết định
                                    </td>
                                    <td>
                                        <input id="coQuanRaQuyetDinh" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Người ký quyết định
                                    </td>
                                    <td>
                                        <input id="nguoiKyQuyetDinh" class="form-control" type="text">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" id="btnLuuKhenThuong" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelKyLuat" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tạo mẫu kỷ luật</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Thông tin</th>
                                    <th>Chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Từ ngày
                                    </td>
                                    <td>
                                        <input id="TuNgayKyLuat" type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Đến ngày
                                    </td>
                                    <td>
                                        <input id="DenNgayKyLuat" type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Hình thức đảng
                                    </td>
                                    <td>
                                        <select name="" id="hinhThucDang"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Hình thức chính quyền
                                    </td>
                                    <td>
                                        <select name="" id="hinhThucChinhQuyen"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Lý do kỷ luật
                                    </td>
                                    <td>
                                        <input id="lyDoKyLuat" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số tháng
                                    </td>
                                    <td>
                                        <input id="soThangKyLuat" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số quyết định
                                    </td>
                                    <td>
                                        <input id="soQuyetDinhKyLuat" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ngày quyết định
                                    </td>
                                    <td>
                                        <input id="ngayQuyetDinhKyLuat" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Cấp ra quyết định
                                    </td>
                                    <td>
                                        <input id="capRaQuyetDinhKyLuat" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Cơ quan ra quyết định
                                    </td>
                                    <td>
                                        <input id="coQuanRaQuyetDinhKyLuat" class="form-control" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Người ký quyết định
                                    </td>
                                    <td>
                                        <input id="nguoiKyQuyetDinhKyLuat" class="form-control" type="text">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" id="btnLuuKyLuat" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <!---Binh bau--->

    <!-- Modal -->
    <div class="modal fade" id="modelBinhBau" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tạo dữ liệu mẫu bình bầu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Thông tin</th>
                                    <th>Chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Từ ngày</td>
                                    <td><input id="tungayBauCu" type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Đến ngày</td>
                                    <td><input type="text" id="denNgayBauCu" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Hình thức</td>
                                    <td><select name="" id="hinhThucBauCu"></select></td>
                                </tr>
                                <tr>
                                    <td>Kết quả</td>
                                    <td><select name="" id="ketQuaBauCu"></select></td>
                                </tr>
                                <tr>
                                    <td>Cơ sở</td>
                                    <td><select name="" id="coSoBauCu"></select></td>
                                </tr>
                                <tr>
                                    <td>Phiếu bầu đơn vị</td>
                                    <td><input class="form-control" type="text" id="phieuBauDonVi"></td>
                                </tr>
                                <tr>
                                    <td>Tỷ lệ % của đơn vị</td>
                                    <td><input class="form-control" type="text" id="TyLePhanTramDonVi"></td>
                                </tr>
                                <tr>
                                    <td>Phiếu bầu chủ quản</td>
                                    <td><input class="form-control" type="text" id="phieuBauChuQuan"></td>
                                </tr>
                                <tr>
                                    <td>Tỷ lệ % của chủ quản</td>
                                    <td><input class="form-control" type="text" id="TyLePhanTramChuQuan"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" id="btnLuuBinhBau" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelThuyenChuyen" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tạo dữ liệu mẫu thuyên chuyển nội bộ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead class="thead-inverse">
                                <tr>
                                    <th>Thông tin</th>
                                    <th>Chi tiết</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td scope="row">
                                        Phòng công tác
                                    </td>
                                    <td>
                                        <select id="phongCongTacThuyenChuyen">

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Ngày thuyên chuyển</td>
                                    <td>
                                        <input class="form-control" id="ngayThuyenChuyen"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Chức vụ</td>
                                    <td>
                                        <select id="chucVuThuyenChuyen">

                                        </select>
                                    </td>
                                </tr>
                                <tr class="trChucvu">
                                    <td scope="row">Hệ số</td>
                                    <td>
                                        <input class="form-control" id="heSoThuyenChuyen">
                                    </td>
                                </tr>
                                <tr class="trChucvu">
                                    <td scope="row">Ngày bổ nhiệm chức vụ</td>
                                    <td>
                                        <input class="form-control" id="ngayBoNhiemChucVuThuyenChuyen"/>
                                    </td>
                                </tr>
                                <tr class="trChucvu">
                                    <td scope="row">Hình thức bổ nhiệm</td>
                                    <td>
                                        <select id="hinhThucBoNhiemThuyenChuyen">

                                        </select>
                                    </td>
                                </tr>
                                <tr class="trChucvu">
                                    <td scope="row">Cách thức bổ nhiệm</td>
                                    <td>
                                        <select id="cachThucBoNhiemThuyenChuyen">

                                        </select>
                                    </td>
                                </tr>
                                <tr id="trHinhThucPhanCongThuyenChuyen">
                                    <td scope="row">Hình thức phân công</td>
                                    <td>
                                        <select id="hinhThucPhanCongThuyenChuyen">

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Nhiệm vụ được giao</td>
                                    <td>
                                        <select id="NhiemVuDocGiaoThuyenChuyen">

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Số quyết định</td>
                                    <td>
                                        <input id="SoQuyetDinhThuyenChuyen" class="form-control"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Ngày quyết định</td>
                                    <td>
                                        <input class="form-control" id="ngayQuyetDinhThuyenChuyen"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Cơ quan ban hành</td>
                                    <td>
                                        <input class="form-control" id="CoQuanBanHanhThuyenChuyen"/>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" id="btnLuuThuyenChuyen" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    
</script>
