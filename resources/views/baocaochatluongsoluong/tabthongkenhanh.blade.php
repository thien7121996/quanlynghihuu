<div class="row">
    <div class="col-12">
        <div class="toolbox">
            <button class="btn btn-info btn-sm">Hiển thị báo cáo</button>
            <button class="btn btn-danger btn-sm">Xuất Excel</button>
        </div>
        <hr/>
    </div>

</div>
<div class="row">
    <div class="col-12">
        <h3 class="heading">
            Báo cáo số lượng, chất lượng viên chức hiện có trong đơn vị sự nghiệp
        </h3>
    </div>

    <div class="col-3">
        <ul>
            <li>
                <label><input type="checkbox"> UBND</label>
            </li>

        </ul>
    </div>

    <div class="col-3">
        <h3 class="heading-sub">Giới tính</h3>
        <hr/>
        <select id="sltGioiTinh" class="form-control">
            <option value="0">Nam</option>
            <option value="1">Nữ</option>
        </select>
    </div>
    <div class="col-3">
        <h3 class="heading-sub">Mức độ báo cáo</h3>
        <hr/>

        <select class="form-control">
            <option value="1" class="form-control">Chỉ báo các đơn vị được chọn</option>
            <option value="2" class="form-control">Mở rộng xuống 1 cấp</option>
            <option value="3" class="form-control">Mở rộng xuống 2 cấp</option>
            <option value="4" class="form-control">Mở rộng xuống 3 cấp</option>
            <option value="6" class="form-control">Hiển thị tất cả các cấp</option>
        </select>
    </div>

    <div class="col-12" style="overflow: scroll; background: white">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th rowspan="2">STT</th>
                <th rowspan="2" style="min-width:250px; text-align:center;">Cơ quan, đơn vị</th>
                <th rowspan="2">Tổng số</th>
                <th colspan="6" style="text-align:center;">Trong đó</th>
                <th colspan="5" style="text-align:center;">Chia theo ngạch</th>
                <th rowspan="2">Nữ</th>
                <th rowspan="2">Đảng viên</th>
                <th colspan="6" style="text-align:center;">Chia theo trình độ</th>
            </tr>
            <tr>
                <th>Biên chế</th>
                <th>Hợp đồng 68</th>
                <th>HĐ trong chỉ tiêu</th>
                <th>HĐ ngoài chỉ tiêu</th>
                <th>HĐ Khác</th>
                <th>HĐ thu hút/Đề án</th>
                <th>CVCC và t/đ</th>
                <th>CVC và t/đ</th>
                <th>CV và t/đ</th>
                <th>Cán sự</th>
                <th>Khác</th>
                <th>Tiến sĩ</th>
                <th>Thạc sĩ</th>
                <th>Đại học</th>
                <th>Cao đẳng</th>
                <th>Trung cấp</th>
                <th>Khác</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

</div>
