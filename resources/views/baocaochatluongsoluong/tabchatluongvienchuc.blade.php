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
        <h3 class="heading-sub">Loại hình biên chế hợp đồng</h3>
        <hr/>
        <label class="full-width"><input type="checkbox"/>Hợp đồng trong chỉ tiêu</label>
        <label class="full-width"><input type="checkbox"/>Biên chế hành chính</label>
        <label class="full-width"><input type="checkbox"/>Hợp đồng 68 CP</label>
        <label class="full-width"><input type="checkbox"/>Đơn vị tự hợp đồng</label>
        <label class="full-width"><input type="checkbox"/>Hợp dồng thu hút đề án nhân lực cao</label>
        <label class="full-width"><input type="checkbox"/>Hợp đồng vụ việc</label>
        <label class="full-width"><input type="checkbox"/>Hợp đồng khác</label>
    </div>
    <div class="col-3">
        <h3 class="heading-sub">Mức độ báo cáo</h3>
        <hr/>

        <table>
            <tr>
                <td>
                    <select id="sltGioiTinh" class="form-control">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </td>
                <td>
                    <input type="number" placeholder="Nhập tuổi" class="form-control">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <select class="form-control">
                        <option value="1" class="form-control">Chọn ngạch công chức</option>
                        <option value="2" class="form-control">Chuyên viên cao cấp</option>
                        <option value="3" class="form-control">Chuyên viên chính</option>
                        <option value="4" class="form-control">Chuyên viên</option>
                        <option value="5" class="form-control">Cán sự</option>
                        <option value="6" class="form-control">Nhân viên</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <select class="form-control">
                        <option value="0">Chọn trình độ chuyên môn</option>
                        <option value="1" class="form-control">Tiến sĩ</option>
                        <option value="2" class="form-control">Thạc sĩ</option>
                        <option value="3" class="form-control">Đại học</option>
                        <option value="4" class="form-control">Cao đẳng</option>
                        <option value="5" class="form-control">Trung cấp</option>
                        <option value="6" class="form-control">Sơ cấp</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <select class="form-control">

                        <option value="1" class="form-control">Chỉ báo các đơn vị được chọn</option>
                        <option value="2" class="form-control">Mở rộng xuống 1 cấp</option>
                        <option value="3" class="form-control">Mở rộng xuống 2 cấp</option>
                        <option value="4" class="form-control">Mở rộng xuống 3 cấp</option>
                        <option value="6" class="form-control">Hiển thị tất cả các cấp</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <select class="form-control">
                        <option value="1" class="form-control">Không mở rộng loại hình biên chế báo cáo</option>
                        <option value="2" class="form-control">Mở rộng loại hình biên chế báo cáo</option>
                    </select>
                </td>
            </tr>

        </table>
    </div>

    <div class="col-12" style="overflow: scroll; background: white">
        <table class="table table-striped table-bordered table-hover" id="congchuc">
            <thead>
            <tr>
                <th rowspan="4">
		<span>
		STT</span></th>
                <th rowspan="4" style="min-width:200px; text-align:center;">
		<span>
		Tên đơn vị </span></th>
                <th rowspan="4">
		<span>
		Tổng số biên chế được giao</span></th>
                <th rowspan="4">
		<span>
		Tổng số công chức hiện có</span></th>
                <th colspan="4" style="text-align:center;">
		<span>
		Trong đó</span></th>
                <th colspan="5" style="text-align:center;">
		<span>
		Chia theo ngạch công chức</span></th>
                <th colspan="20" style="text-align:center;">
		<span>
		Trình độ đào tạo chia theo</span></th>
                <th colspan="7" style="text-align:center;">
		<span>
		Chia theo độ tuổi</span></th>
            </tr>
            <tr>
                <th rowspan="3">
		<span>
		Nữ</span></th>
                <th rowspan="3">
		<span>
		Đảng viên</span></th>
                <th rowspan="3">
		<span>
		Dân tộc thiểu số</span></th>
                <th rowspan="3">
		<span>
		Tôn giáo</span></th>
                <th rowspan="3">
		<span>
		Chuyên viên cao cấp &amp; TĐ</span></th>
                <th rowspan="3">
		<span>
		Chuyên viên chính &amp; TĐ</span></th>
                <th rowspan="3">
		<span>
		Chuyên viên và tương đương</span></th>
                <th rowspan="3">
		<span>
		Cán sự và tương đương</span></th>
                <th rowspan="3">
		<span>
		Nhân viên</span></th>
                <th colspan="6" rowspan="2" style="text-align:center;">
		<span>
		Chuyên môn</span></th>
                <th colspan="4" rowspan="2" style="text-align:center;">
		<span>
		Chính trị</span></th>
                <th colspan="2" rowspan="2" style="text-align:center;">
		<span>
		Tin học</span></th>
                <th colspan="4" style="text-align:center;">
		<span>
		Ngoại ngữ</span></th>
                <th rowspan="3">
		<span>
		Chứng chỉ tiếng dân tộc</span></th>
                <th rowspan="2" colspan="3" style="text-align:center;">
		<span>
		QLNN</span></th>
                <th rowspan="3">
		<span>
		Từ 30 trở xuống</span></th>
                <th rowspan="3">
		<span>
		Từ 31 đến 40</span></th>
                <th rowspan="3">
		<span>
		Từ 41 đến 50</span></th>
                <th rowspan="2" colspan="4" style="text-align:center;">
		<span>
		Từ 51 đến 60</span></th>
            </tr>
            <tr>
                <th colspan="2">
		<span>
		Tiếng Anh</span></th>
                <th colspan="2">
		<span>
		Ngoại ngữ khác</span></th>
            </tr>
            <tr>
                <th>
		<span>
		Tiến sĩ</span></th>
                <th>
		<span>
		Thạc sĩ</span></th>
                <th>
		<span>
		Đại học</span></th>
                <th>
		<span>
		Cao đẳng</span></th>
                <th>
		<span>
		Trung cấp</span></th>
                <th>
		<span>
		Sơ cấp</span></th>
                <th>
		<span>
		Cử nhân</span></th>
                <th>
		<span>
		Cao cấp</span></th>
                <th>
		<span>
		Trung cấp</span></th>
                <th>
		<span>
		Sơ cấp</span></th>
                <th>
		<span>
		Trung cấp trở lên</span></th>
                <th>
		<span>
		Chứng chỉ</span></th>
                <th>
		<span>
		Đại học trở lên</span></th>
                <th>
		<span>
		Chứng chỉ (A, B, C)</span></th>
                <th>
		<span>
		Đại học trở lên</span></th>
                <th>
		<span>
		Chứng chỉ (A, B, C)</span></th>
                <th>
		<span>
		Chuyên viên cao cấp và TĐ</span></th>
                <th>
		<span>
		Chuyên viên chính và TĐ</span></th>
                <th>
		<span>
		Chuyên viên và TĐ</span></th>
                <th>
		<span>
		Tổng số</span></th>
                <th>
		<span>
		Nữ từ 51 đến 55</span></th>
                <th>
		<span>
		Nam từ 56 đến 60</span></th>
                <th>
		<span>
		Trên tuổi nghỉ hưu</span></th>
            </tr>
            <tr>
                <th>A</th>
                <th style="text-align:center;">B</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
                <th>21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th>27</th>
                <th>28</th>
                <th>29</th>
                <th>30</th>
                <th>31</th>
                <th>32</th>
                <th>33</th>
                <th>34</th>
                <th>35</th>
                <th>36</th>
                <th>37</th>
                <th>38</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</div>
