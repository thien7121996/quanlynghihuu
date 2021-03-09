@extends('master')
@section('title','Cơ quan')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="ibox ">
			<div class="ibox-title">
				<h5>Danh sách Cơ quan</h5> 
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
				<div id="girdcoquan"></div>
			</div>
		</div>			
	</div>
</div>

<script type="text/javascript">
	window.onload = function() {
		loadcoquan();
	};
	function reload_reset() {
		loadcoquan();
		var dataGrid = $("#girdcoquan").dxDataGrid("instance");
		dataGrid.refresh();
	}

	function loadcoquan(){
		var data = axios.get('getcoquan').then(function (response) {
			var data1 = response.data[0];
			var tinh = response.data[1];
			var huyen = response.data[2];
			var xa = response.data[3];
			var datas = data1.map(function(value, label) {
				let data = value;
				let stt = label + 1;
				var datas = Object.assign(data, {
					stt: stt.toString()
				});
				return datas;
			});

			$("#girdcoquan").dxDataGrid({
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
					allowAdding: true,
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
					caption: "Tên cơ quan",
					dataField: "Ten",
				},{
					caption: "Địa chỉ",
					dataField: "DiaChi",
				},
				{
					caption: "Tỉnh",
					dataField: "Tinh",
					lookup: {
						dataSource: tinh,
						displayExpr: "TenTinh",
						valueExpr: "id",
					}
				},
				{
					caption: "Huyện",
					dataField: "Huyen",
					lookup: {  
						dataSource: function(options) {  
							return {  
								load: function (loadOptions) {   
									if(options != "" && options.data != undefined){
										var idtinh = options.data.Tinh;
										var filterdata = huyen.filter(function(number) {
											if(number.MaTinh == idtinh){
												return number;
											}
										});
										return filterdata;

									}else{
										return huyen;
									}				
								},  
								byKey: function(key) {  
									var queryResult = DevExpress.data.query(huyen)  
									.filter([["id", "=", key]])  
									.toArray();  
									return queryResult;  
								}  
							}  
						},  
						valueExpr: 'id',  
						displayExpr: 'TenHuyen'  
					} 
				},{
					caption: "Xã",
					dataField: "Xa",
					lookup: {  
						dataSource: function(options) {  
							return {  
								load: function (loadOptions) {   
									if(options != "" && options.data != undefined){
										var idhuyen = options.data.Huyen;
										var filterdata = xa.filter(function(number) {
											if(number.MaHuyen == idhuyen){
												return number;
											}
										});
										return filterdata;

									}else{
										return xa;
									}				
								},  
								byKey: function(key) {  
									var queryResult = DevExpress.data.query(xa)  
									.filter([["id", "=", key]])  
									.toArray();  
									return queryResult;  
								}  
							}  
						},  
						valueExpr: 'id',  
						displayExpr: 'TenXa'  
					} 
				},
				],

				onRowUpdating: function(e) {
					var id = e.oldData.id;
					if(e.newData.Ten === undefined){
						var Ten = e.oldData.Ten;
					}else{
						var Ten = e.newData.Ten;
					}

					if(e.newData.DiaChi === undefined){
						var DiaChi = e.oldData.DiaChi;
					}else{
						var DiaChi = e.newData.DiaChi;
					}

					if(e.newData.Tinh === undefined){
						var Tinh = e.oldData.Tinh;
					}else{
						var Tinh = e.newData.Tinh;
						if(e.newData.Huyen === undefined || e.newData.Xa === undefined){
							reload_reset();
							return Swal.fire({
								title: 'Vui lòng chọn lại huyện và xã',
								text: 'Huyện và xã không thuộc tỉnh này',
								icon: 'warning',
								confirmButtonText: 'OK'
							});
						}
					}

					if(e.newData.Huyen === undefined){
						var Huyen = e.oldData.Huyen;
					}else{
						var Huyen = e.newData.Huyen;
						if(e.newData.Huyen === undefined || e.newData.Xa === undefined){
							reload_reset();
							return Swal.fire({
								title: 'Vui lòng chọn lại huyện và xã',
								text: 'Huyện và xã không thuộc tỉnh này',
								icon: 'warning',
								confirmButtonText: 'OK'
							});
						}
					}

					if(e.newData.Xa === undefined){
						var Xa = e.oldData.Xa;
					}else{
						var Xa = e.newData.Xa;
						if(e.newData.Huyen === undefined || e.newData.Xa === undefined){
							reload_reset();
							return Swal.fire({
								title: 'Vui lòng chọn lại huyện và xã',
								text: 'Huyện và xã không thuộc tỉnh này',
								icon: 'warning',
								confirmButtonText: 'OK'
							});
						}
					}	

					axios.post('updatecoquan', {id:id,Ten:Ten,DiaChi:DiaChi,Tinh:Tinh,Huyen:Huyen,Xa:Xa}).then(function(response) {
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


				onRowInserting: function(e) {
					if(e.data.Ten === undefined){
						var Ten = "";
					}else{
						var Ten = e.data.Ten;
					}	
					if(e.data.DiaChi === undefined){
						var DiaChi = "";
					}else{
						var DiaChi = e.data.DiaChi;
					}
					if(e.data.Tinh === undefined){
						var Tinh = "";
					}else{
						var Tinh = e.data.Tinh;
					}					
					if(e.data.Huyen === undefined){
						var Huyen = "";
					}else{
						var Huyen = e.data.Huyen;
					}
					if(e.data.Xa === undefined){
						var Xa = "";
					}else{
						var Xa = e.data.Xa;
					}
					axios.post('addcoquan',{Ten:Ten,DiaChi:DiaChi,Tinh:Tinh,Huyen:Huyen,Xa:Xa}).then(function (response) {
						var data = response.data;
						Swal.fire({
							title: 'Lưu',
							text: 'Đã thêm mới thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						reload_reset();
					});
				},



				onContextMenuPreparing: function(data) { 
					if (data.target == "content") {
						if (!data.items) data.items = [];
						data.items.push({
							template: function () {
								return $("<i class='fa fa-remove'>").text(" Xóa");                  
							},
							onItemClick: function() {
								var dataxoa = data.row.data.id;
								xoadcoquan(dataxoa);
							}
						});
						data.items.push({
							template: function () {
								return $("<i class='fa fa-remove'>").text(" Xóa toàn bộ");
							},
							onItemClick: function() {
								var dataxoahet = datas;
								xoatoanbocoquan(dataxoahet);
							}
						});
					} 
				}



			});
});
}



function xoadcoquan(id) {
	Swal.fire({
		title: 'Lưu',
		text: "Bạn có muốn xóa coquan này không",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes'
	}).then((result) => {
		if (result.value) {
			axios.post('delcoquan',{id:id}).then(function (response) {
				var data = response.data;
				Swal.fire({
					position: 'center',
					icon: 'success',
					text: 'Đã xóa thành công',
					showConfirmButton: false,
					timer: 1000
				});   
				reload_reset();
			});
		}           
	})
}

function xoatoanbocoquan(id) {
	Swal.fire({
		title: 'Lưu',
		text: "Bạn có muốn xóa toàn bộ các coquan không",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes'
	}).then((result) => {
		if (result.value) {
			axios.post('deltoanbocoquan',{id:id}).then(function (response) {
				var data = response.data;
				Swal.fire({
					position: 'center',
					icon: 'success',
					text: 'Đã xóa thành công',
					showConfirmButton: false,
					timer: 1000
				});   
				reload_reset();
			});
		}           
	})
}
</script>



@endsection