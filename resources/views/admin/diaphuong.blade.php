@extends('master')
@section('title','Tỉnh')
@section('content')
<div class="row">
	<div class="col-md-4">
		<div class="ibox ">
			<div class="ibox-title">
				<h5>Danh sách Tỉnh
				</h5> 
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
				<div id="girdtinh"></div>
			</div>
		</div>			
	</div>

	<div class="col-md-4">
		<div class="ibox ">
			<div class="ibox-title">
				<h5>Danh sách Huyện
				</h5> 
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
				<div id="girdhuyen"></div>
			</div>
		</div>			
	</div>

	<div class="col-md-4">
		<div class="ibox ">
			<div class="ibox-title">
				<h5>Danh sách Xã
				</h5> 
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
				<div id="girdxa"></div>
			</div>
		</div>			
	</div>
</div>

<script type="text/javascript">
	window.onload = function() {
		loadtinh();
	};

	function reloadtinh() {
		loadtinh();
		var dataGrid = $("#girdtinh").dxDataGrid("instance");
		dataGrid.refresh();
	}
	function reloadhuyen(itemtinh) {
		loadhuyen(itemtinh);
		var dataGrid = $("#girdhuyen").dxDataGrid("instance");
		dataGrid.refresh();
	}
	function reloadxa(itemhuyen) {
		loadxa(itemhuyen);
		var dataGrid = $("#girdxa").dxDataGrid("instance");
		dataGrid.refresh();
	}

	var idtinh,idhuyen,idxa;

	function loadtinh(){
		axios.get('gettinh').then(function (response) {
			var data1 = response.data;
			var datas = data1.map(function(value, label) {
				let data = value;
				let stt = label + 1;
				var datas = Object.assign(data, {
					stt: stt.toString()
				});
				return datas;
			});

			$("#girdtinh").dxDataGrid({
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
				// searchPanel: {
				// 	visible: true,
				// 	width: 240,
				// 	placeholder: "Tìm kiếm..."
				// },
				selection: {
					mode: "single",
				},
				editing: {
					mode: "batch",
					allowUpdating: true,
					allowAdding: true,
					selectTextOnEditStart: true,
					startEditAction: "click",
				},
				height: 650,
				/* co dan cot */
				allowColumnResizing: true,
				columnResizingMode: "widget",
				columns: [{
					caption: "STT",
					dataField: "stt",
					width: 50,
					allowEditing: false,
				},{
					caption: "Tên tỉnh",
					dataField: "TenTinh",
				},
				],
				onSelectionChanged: function (selectedItems) {
					var itemtinh = selectedItems.selectedRowsData[0].id;
					loadhuyen(itemtinh);				
				},

				onRowUpdating: function(e) {
					var id = e.oldData.id;
					if(e.newData.TenTinh === undefined){
						var TenTinh = e.oldData.TenTinh;
					}else{
						var TenTinh = e.newData.TenTinh;
					}	

					axios.post('updatetinh', {id:id,TenTinh:TenTinh}).then(function(response) {
						var data = response.data;
						Swal.fire({
							title: 'Lưu',
							text: 'Đã lưu thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						reloadtinh();
					});
				},

				onRowInserting: function(e) {
					if(e.data.TenTinh === undefined){
						var TenTinh = "";
					}else{
						var TenTinh = e.data.TenTinh;
					}						
					axios.post('addtinh',{TenTinh:TenTinh}).then(function (response) {
						var data = response.data;
						Swal.fire({
							title: 'Lưu',
							text: 'Đã thêm mới thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						reloadtinh();
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
								xoadtinh(dataxoa);
							}
						});
					} 
				}
			});
		});
	}


	function loadhuyen(itemtinh){
		var datahuyen = axios.post('gethuyen',{matinh:itemtinh}).then(function (response) {
			let data1 = response.data;

			var datas = data1.map(function(value, label) {
				let data = value;
				let stt = label + 1;
				var datas = Object.assign(data, {
					stt: stt.toString()
				});
				return datas;
			});

			$("#girdhuyen").dxDataGrid({
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
				// searchPanel: {
				// 	visible: true,
				// 	width: 240,
				// 	placeholder: "Tìm kiếm..."
				// },
				editing: {
					mode: "batch",
					allowUpdating: true,
					allowAdding: true,
					selectTextOnEditStart: true,
					startEditAction: "click",
				},
				height: 650,
				selection: {
					mode: "single",
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
					caption: "Tên huyện",
					dataField: "TenHuyen",
				},
				],
				onSelectionChanged: function (selectedItems) {
					let itemhuyen = selectedItems.selectedRowsData[0].id;
					loadxa(itemhuyen);
				},

				onRowUpdating: function(e) {
					var id = e.oldData.id;
					if(e.newData.TenHuyen === undefined){
						var TenHuyen = e.oldData.TenHuyen;
					}else{
						var TenHuyen = e.newData.TenHuyen;
					}	

					axios.post('updatehuyen', {id:id,mahuyen:TenHuyen,matinh:itemtinh}).then(function(response) {
						var data = response.data;
						Swal.fire({
							title: 'Lưu',
							text: 'Đã lưu thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						reloadhuyen(itemtinh);
					});
				},


				onRowInserting: function(e) {
					if(e.data.TenHuyen === undefined){
						var TenHuyen = "";
					}else{
						var TenHuyen = e.data.TenHuyen;
					}						
					axios.post('addhuyen',{mahuyen:TenHuyen,matinh:itemtinh}).then(function (response) {
						var data = response.data;
						Swal.fire({
							title: 'Lưu',
							text: 'Đã thêm mới thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						reloadhuyen(itemtinh);
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
								xoadhuyen(dataxoa,itemtinh);
							}
						});
					} 
				}
			});
		});
	}

	function loadxa(itemhuyen){
		var dataxa = axios.post('getxa',{mahuyen:itemhuyen}).then(function (response) {
			let data1 = response.data;

			var datas = data1.map(function(value, label) {
				let data = value;
				let stt = label + 1;
				var datas = Object.assign(data, {
					stt: stt.toString()
				});
				return datas;
			});

			$("#girdxa").dxDataGrid({
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
				// searchPanel: {
				// 	visible: true,
				// 	width: 240,
				// 	placeholder: "Tìm kiếm..."
				// },
				editing: {
					mode: "batch",
					allowUpdating: true,
					allowAdding: true,
					selectTextOnEditStart: true,
					startEditAction: "click",
				},
				height: 650,
				/* co dan cot */
				allowColumnResizing: true,
				columnResizingMode: "widget",
				columns: [{
					caption: "STT",
					dataField: "stt",
					width: 50,
					allowEditing: false,
				},{
					caption: "Tên xã",
					dataField: "TenXa",
				},
				],

				onRowUpdating: function(e) {
					var id = e.oldData.id;
					if(e.newData.TenXa === undefined){
						var TenXa = e.oldData.TenXa;
					}else{
						var TenXa = e.newData.TenXa;
					}	

					axios.post('updatexa', {id:id,TenXa:TenXa,mahuyen:itemhuyen}).then(function(response) {
						var data = response.data;
						Swal.fire({
							title: 'Lưu',
							text: 'Đã lưu thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						reloadxa(itemhuyen);
					});
				},


				onRowInserting: function(e) {
					if(e.data.TenXa === undefined){
						var TenXa = "";
					}else{
						var TenXa = e.data.TenXa;
					}						
					axios.post('addxa',{TenXa:TenXa,mahuyen:itemhuyen}).then(function (response) {
						var data = response.data;
						Swal.fire({
							title: 'Lưu',
							text: 'Đã thêm mới thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						reloadxa(itemhuyen);
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
								xoaxa(dataxoa,itemhuyen);
							}
						});
					} 
				}
			});
		});
	}

	function xoadtinh(id) {
		Swal.fire({
			title: 'Lưu',
			text: "Bạn có muốn xóa tỉnh này không",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes'
		}).then((result) => {
			if (result.value) {
				axios.post('deltinh',{id:id}).then(function (response) {
					var data = response.data;
					Swal.fire({
						position: 'center',
						icon: 'success',
						text: 'Đã xóa thành công',
						showConfirmButton: false,
						timer: 1000
					});   
					reloadtinh();
				});
			}           
		})
	}

	function xoadhuyen(id,itemtinh) {
		Swal.fire({
			title: 'Lưu',
			text: "Bạn có muốn xóa huyện này không",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes'
		}).then((result) => {
			if (result.value) {
				axios.post('delhuyen',{id:id}).then(function (response) {
					var data = response.data;
					Swal.fire({
						position: 'center',
						icon: 'success',
						text: 'Đã xóa thành công',
						showConfirmButton: false,
						timer: 1000
					});   
					reloadhuyen(itemtinh);
				});
			}           
		})
	}

	function xoaxa(id,itemhuyen) {
		Swal.fire({
			title: 'Lưu',
			text: "Bạn có muốn xóa xã này không",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes'
		}).then((result) => {
			if (result.value) {
				axios.post('delxa',{id:id}).then(function (response) {
					var data = response.data;
					Swal.fire({
						position: 'center',
						icon: 'success',
						text: 'Đã xóa thành công',
						showConfirmButton: false,
						timer: 1000
					});   
					reloadxa(itemhuyen);
				});
			}           
		})
	}


</script>
@endsection