<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">

            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="public/images/huyhieu.png">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{Auth::user()->tendangnhap}}</span>
                    </a>
                </div>
            </li>

            <li>
                <a href="/"><i class="fa fa-home"></i> <span class="nav-label">Trang chủ</span></a>
            </li>
            <li>
                <a href="#" class="licl"><i class="fa fa-user"></i> <span class="nav-label">Quản lý tài khoản</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="taikhoan">--> Danh sách tài khoản</a></li>
                    <li><a href="phanquyen">--> Phân quyền</a></li>
                    <li><a href="diaphuong">--> Địa phương</a></li>
                    <li><a href="coquan">--> Cơ quan
                    </a></li>
                </ul>
            </li>
            <li id="caysododv" style="display: none">
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Cây sơ đồ đơn vị</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <div id="simple-treeview"></div></li>
                </ul>
            </li>
            <li>
                <a href="#" class="licl"><i class="fa fa-user"></i> <span class="nav-label">Quản lý hồ sơ</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="quanlynghihuu">--> Quản lý nghỉ hưu</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="licl"><i class="fa fa-search"></i> <span class="nav-label">Tìm kiếm</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="timkiemnhanh">--> Tìm kiếm nhanh</a></li>
                    <li><a href="timkiemnangcao">--> Tìm kiếm nâng cao</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="licl"><i class="fa fa-book"></i> <span class="nav-label">Báo cáo</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="baocaosl">--> Báo cáo chất lượng,số lượng</a></li>
                    <li><a href="baocaobiencheluong">--> Báo cáo biên chế lương</a></li>
                </ul>
            </li>
            <li>
                <a href="traodoi"><i class="fa fa-comments"></i> <span class="nav-label">Trao đổi nội bộ</span></a>
            </li>
            <li class="special_link">
                <a href="thongbao"><i class="fa fa-bell"></i> <span class="nav-label">Thông báo</span></a>
            </li>

            


        </ul>
    </div>
</nav>


