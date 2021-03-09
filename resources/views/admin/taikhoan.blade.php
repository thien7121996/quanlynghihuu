@extends('master')
@section('title','danh sách tài khoản')
@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="ibox ">
			<div class="ibox-title">
				<h5>Danh sách tài khoản</h5> 
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
				<button class="btn btn-primary btn-xs" type="button" id="addtaikhoan"><i class="fa fa-plus"></i> Tạo tài khoản</button>
				<div id="girdtaikhoan">
					
				</div>
			</div>
		</div>			
	</div>
</div>

<!-- modal add tai khoan -->
<div class="modal inmodal" id="modaladdtaikhoan" tabindex="-1" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h5 class="modal-title">Tạo tài khoản</h5>
			</div>
			<div class="modal-body">
				<div class="form-group row"><label class="col-lg-4 col-form-label">Tên đăng nhập</label>
					<div class="col-lg-8">
						<input type="text" placeholder="Tên đăng nhập" class="form-control input-sm" id="addtendangnhap">
					</div>
				</div>
				<div class="form-group row"><label class="col-lg-4 col-form-label">Mật khẩu</label>
					<div class="col-lg-8">
						<div class="input-group" >
							<input class="form-control" type="password" id="addpassword" placeholder="Mật khẩu">
							<div class="input-group-addon">
								<a onclick="showpasswords()"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row"><label class="col-lg-4 col-form-label">Cơ quan</label>
					<div class="col-lg-8">
						<div id="addcoquan"></div>
					</div>
				</div>
				<div class="form-group row"><label class="col-lg-4 col-form-label">Phân quyền</label>
					<div class="col-lg-8">
						<div id="addphanquyen"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="saveaddtaikhoan">Lưu</button>
				<button type="button" class="btn btn-white" data-dismiss="modal">Đóng</button>
			</div>
		</div>
	</div>
</div>

<!-- modal đổi mật khẩu -->
<div class="modal inmodal fade show" id="modalreserpassword" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h5 class="modal-title">Đổi mật khẩu</h5>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12">
							<form>
								<div class="form-group">
									<label>Password</label>
									<div class="input-group" >
										<input class="form-control" type="password" id="password">
										<div class="input-group-addon">
											<a onclick="showpassword()"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">				
				<button type="button" class="btn btn-primary" id="capnhatpassword">Cập nhật</button>
				<button type="button" class="btn btn-white" data-dismiss="modal">Đóng</button>
			</div>
		</div>
	</div>
</div>



<style type="text/css">
	.modal-backdrop {
		z-index: 1499 !important;
	}
</style>

<script type="text/javascript">
	window.onload = function() {
		loadtaikhoan();
	};

	function showpassword() {
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
	function showpasswords() {
		var x = document.getElementById("addpassword");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}




	function capnhatmatkhau(id){
		$('#password').val('');
		$('#modalreserpassword').modal('show');

		$("#capnhatpassword").click(function(){
			var pass = $('#password').val();
			axios.post('updatepassword', {id: id,password:pass}).then(function(response) {
				var data = response.data;
				Swal.fire({
					title: 'Lưu',
					text: 'Đã lưu thành công',
					icon: 'success',
					confirmButtonText: 'OK'
				});
				$('#modalreserpassword').modal('toggle');
			});
		});
	}


	function reload_reset() {
		loadtaikhoan();
		var dataGrid = $("#girdtaikhoan").dxDataGrid("instance");
		dataGrid.refresh();
	}
	var itemquyen,itemcoquan;
	function loadtaikhoan() {
		var data = axios.get('gettaikhoan').then(function (response) {
			var data1 = response.data[0];
			var coquan = response.data[1];
			var role = response.data[2];
			var datas = data1.map(function(value, label) {
				let data = value;
				let stt = label + 1;
				var datas = Object.assign(data, {
					stt: stt.toString()
				});
				return datas;
			});

			$("#addphanquyen").dxTagBox({
				items: role,
				placeholder: "Chọn quyền",
				showSelectionControls: true,
				displayExpr: "name",
				valueExpr: "id",
				applyValueMode: "useButtons",
				onValueChanged: function(data) {
					var itquyen = data.value;
					itemquyen = itquyen;
				}
			});

			$("#addcoquan").dxSelectBox({
				items: coquan,
				placeholder: "Chọn Cơ quan",
				displayExpr: "Ten",
				valueExpr: "id",
				onValueChanged: function(data) {
					var itcoquan = data.value;
					itemcoquan = itcoquan;
				}
			});

			$("#addtaikhoan").click(function(){
				$('#modaladdtaikhoan').modal('show');			
			});
			$("#saveaddtaikhoan").click(function(){
				let quyen = itemquyen;
				let coquan = itemcoquan;
				let taikhoan = $("#addtendangnhap").val();
				let matkhau = $("#addpassword").val();
				if(quyen != undefined){
					axios.post('addtaikhoan', {quyen: quyen,coquan:coquan,taikhoan:taikhoan,matkhau:matkhau}).then(function(response) {
						var data = response.data;
						Swal.fire({
							title: 'Lưu',
							text: 'Đã lưu thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						$('#modaladdtaikhoan').modal('toggle');
						reload_reset();
					});
				}else{
					Swal.fire({
						title: 'Cảnh báo',
						text: 'Thiếu thông tin',
						icon: 'warning',
						confirmButtonText: 'OK'
					});
				}
			});


			$("#girdtaikhoan").dxDataGrid({
				dataSource: datas,
				showBorders: true,
				paging: {
					pageSize: 30
				},
				/* xap xep */
				sorting: {
					mode: "multiple"
				},
				/* loc du lieu */
				filterRow: {
					visible: true,
					applyFilter: "auto"
				},
				searchPanel: {
					visible: true,
					width: 240,
					placeholder: "Tìm kiếm..."
				},
				editing: {
					mode: "batch",
					allowUpdating: true,
					selectTextOnEditStart: true,
					startEditAction: "click",
				},
				/* co dan cot */
				allowColumnResizing: true,
				columnResizingMode: "widget",
				columns: [{
					caption: "STT",
					dataField: "stt",
					width: 50,
					allowEditing: false,
				},{
					caption: "Tên tài khoản",
					dataField: "TenDangNhap",
				},{
					caption: "Cơ quan",
					dataField: "CoQuan",
					lookup: {
						dataSource: coquan,
						displayExpr: "Ten",
						valueExpr: "id",
					}
				},
				{
					caption: "Địa chỉ",
					dataField: "CoQuan",
					lookup: {
						dataSource: coquan,
						displayExpr: "DiaChi",
						valueExpr: "id",
					}
				},{
					caption: "Quyền",
					dataField: 'role',
					lookup: {
						dataSource: role,
						valueExpr: "id",
						displayExpr: "name"
					},
					editCellTemplate: tagBoxEditorTemplate2,
					cellTemplate: function(container, options) {
						var op = options.value;
						var numbers = [];
						var filterdata = op.filter(function(number) {
							numbers.push(number.id);
						});


						var noBreakSpace = "\u00A0",
						text = (numbers || []).map(function(element) {
							return options.column.lookup.calculateCellValue(element);
						}).join(", ");
						container.text(text || noBreakSpace).attr("title", text);
					},
					calculateFilterExpression: function(filterValue, selectedFilterOperation, target) {
						if (target === "search" && typeof(filterValue) === "string") {
							return [this.dataField, "contains", filterValue]
						}
						return function(data) {
							return (data.AssignedEmployee || []).indexOf(filterValue) !== -1
						}
					}
				},
				{
					allowEditing: false,
					cellTemplate:  function (container, options) {
						container.addClass("center");  
						$("<div>").dxButton({
							type: "default",
							text: "Đổi mật khẩu",
							template: function (e) {
								return $("<i class='fa fa-key'>").text(" Đổi mật khẩu").css("color", "#ffffff");
							},
							onClick: function (e) {
								var id = options.data.id;
								capnhatmatkhau(id);
							}                   
						}).appendTo(container)
					},width: 200,
				},
				],
				onRowUpdating: function(e) {
					var id = e.oldData.id;
					if (e.newData.tendangnhap === undefined) {
						var addtendangnhap = e.oldData.tendangnhap;
					} else {
						var addtendangnhap = e.newData.tendangnhap;
					}

					if (e.newData.CoQuan === undefined) {
						var addCoQuan = e.oldData.CoQuan;
					} else {
						var addCoQuan = e.newData.CoQuan;
					}

					if (e.newData.role === undefined) {
						var addrole = null;
					} else {
						var addrole = e.newData.role;
					}

					axios.post('updatetaikhoan', {id: id,tendangnhap:addtendangnhap,CoQuan:addCoQuan,role:addrole}).then(function(response) {
						var data = response.data;
						Swal.fire({
							title: 'Lưu',
							text: 'Đã lưu thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						reload_reset();
					});
				},

				onContextMenuPreparing: function(data) { 
					if (data.target == "content") {
						if (!data.items) data.items = [];

						// data.items.push({
						// 	template: function () {
						// 		return $("<i class='fa fa-repeat'>").text(" Reset dữ liệu");                  
						// 	},
						// 	onItemClick: function() {
						// 		var datamatruong = data.row.data.matruong;
						// 		resetdata(datamatruong);
						// 	}
						// });

						data.items.push({
							template: function () {
								return $("<i class='fa fa-remove'>").text(" Xóa tài khoản");                  
							},
							onItemClick: function() {
								var dataxoa = data.row.data.id;
								xoataikhoan(dataxoa);
							}
						});

						data.items.push({
							template: function () {
								return $("<i class='fa fa-lock'>").text(" Đặt lại mật khẩu");                  
							},
							onItemClick: function() {
								var datmk = data.row.data.id;
								Swal.fire({
									title: 'Lưu',
									text: "Bạn có muốn đặt lại mật khẩu tài khoản này không",
									icon: 'warning',
									showCancelButton: true,
									confirmButtonColor: '#3085d6',
									cancelButtonColor: '#d33',
									confirmButtonText: 'Lưu'
								}).then((result) => {
									if (result.value == true) {
										axios.post('resetpassword', {id: datmk}).then(function(response) {
											reload_reset();
										});
										Swal.fire(
											'Lưu',
											'Lưu thành công',
											'success'
											)
									}
								})
							}
						});
					} 
				}


			})//end devxp
function tagBoxEditorTemplate2(cellElement, cellInfo) {
	var op1 = cellInfo.value;
	var numbers1 = [];
	var filterdatas = op1.filter(function(number) {
		numbers1.push(number.id);
	});
	return $("<div>").dxTagBox({
		dataSource: role,
		value: numbers1,
		valueExpr: "id",
		displayExpr: "name",
		showSelectionControls: true,
		applyValueMode: "useButtons",
		searchEnabled: true,
		onValueChanged: function(e) {
			cellInfo.setValue(e.value);
		},
		onSelectionChanged: function(e) {
			cellInfo.component.updateDimensions();
		}
	});
}

function xoataikhoan(id) {
	Swal.fire({
		title: 'Lưu',
		text: "Bạn có muốn xóa tài khoản này không",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Lưu'
	}).then((result) => {
		if (result.value == true) {
			axios.post('delltaikhoan', {id: id}).then(function(response) {
				reload_reset();
			});
			Swal.fire(
				'Lưu',
				'Lưu thành công',
				'success'
				)
		}
	})
}














});
}
</script>



@endsection