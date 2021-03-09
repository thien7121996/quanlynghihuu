@extends('master')
@section('title','Phân quyền')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="ibox ">
			<div class="ibox-title">
				<h5>Danh sách quyền</h5> 
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
				<div id="girdquyen"></div>
			</div>
		</div>			
	</div>
</div>
<script type="text/javascript">
	window.onload = function() {
		loadquyen();
	};
	function reload_reset() {
		loadquyen();
		var dataGrid = $("#girdquyen").dxDataGrid("instance");
		dataGrid.refresh();
	}
	function loadquyen(){
		var data = axios.get('getquyen').then(function (response) {
			var data1 = response.data[0];

			var datas = data1.map(function(value, label) {
				let data = value;
				let stt = label + 1;
				var datas = Object.assign(data, {
					stt: stt.toString()
				});
				return datas;
			});

			$("#girdquyen").dxDataGrid({
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
					caption: "Tên quyền",
					dataField: "name",
				},
				],

				onRowUpdating: function(e) {
					var id = e.oldData.id;
					if(e.newData.name === undefined){
						var role = e.oldData.name;
					}else{
						var role = e.newData.name;
					}	

					axios.post('updaterole', {id:id,role:role}).then(function(response) {
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
					if(e.data.name === undefined){
						var role = "";
					}else{
						var role = e.data.name;
					}						
					axios.post('addrole',{role:role}).then(function (response) {
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
								xoadrole(dataxoa);
							}
						});
						data.items.push({
							template: function () {
								return $("<i class='fa fa-remove'>").text(" Xóa toàn bộ");                  
							},
							onItemClick: function() {
								var dataxoahet = datas;
								xoatoanborole(dataxoahet);
							}
						});
					} 
				}



			});
		});
	}

	function xoadrole(id) {
		Swal.fire({
			title: 'Lưu',
			text: "Bạn có muốn xóa role này không",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes'
		}).then((result) => {
			if (result.value) {
				axios.post('delrole',{id:id}).then(function (response) {
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

	function xoatoanborole(id) {
		Swal.fire({
			title: 'Lưu',
			text: "Bạn có muốn xóa toàn bộ các role không",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes'
		}).then((result) => {
			if (result.value) {
				axios.post('deltoanborole',{id:id}).then(function (response) {
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