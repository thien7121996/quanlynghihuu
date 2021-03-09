
    function reload_reset_bangccvc() {
        loadtaikhoan();
        var dataGrid = $("#gridcongchucvienchuc").dxDataGrid("instance");
        dataGrid.refresh();
    }
        function loadtaikhoan_bangccvc() {
            const hinhthucnghihuu=[];
             
               
 
       
             
        var data = axios.get('gethoso').then(function (response) {
            var data1 = response.data[0];
           
           var datas = data1.map(function(value, label) {
                let data = value;
                let stt = label + 1;
                 var date1 = new Date(value.ngaynghihuu); 
                    var date2 = new Date(); 
                    var Difference_In_Time = date1.getTime() - date2.getTime(); 
  
// To calculate the no. of days between two dates 
var Difference_In_Days = parseInt(Difference_In_Time / (1000 * 3600 * 24)); 
                var datas = Object.assign(data, {
                    stt: stt.toString(),
                    conlai: Difference_In_Days
                });
                return datas;
            });
      
      axios.get('gethinhthucnghihuu').then(function (response) {
 
        var hinhthucnghihuu = response.data[0];
            $("#gridcongchucvienchuc").dxDataGrid({
                dataSource: datas,
                showBorders: true,
                 columnChooser: {
            enabled: true,
            mode: "select" // or "select"
        },
                   selection: {
            mode: "multiple",
            selectAllMode: "page" // or "multiple" | "none"
        },
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
                    mode: "form",
                      allowUpdating: true,
                
                       form: {
                        items: [
                      
                        { dataField: "ngaynghihuu" },
                        { dataField: "tenhuongnghihuu" },
                        { dataField: "soquyetdinh" },
                        { dataField: "ngayquyetdinh" },
                        { dataField: "coquanquyetdinh" }
                    ]
                       }
                },

                /* co dan cot */
                allowColumnResizing: true,
                columnResizingMode: "widget",
                 
                columns: [
                {
                    caption: "STT",
                    dataField: "stt",
                    
                    allowEditing: false,
                },
                {
                    caption: "Họ và tên",
                    dataField: "HoVaTen",
                    width: 120,

                },
                {
                    caption: "Giới tính",
                    dataField: "gioitinhx",
                    
                },
                {
                    caption: "Ngày sinh",
                    dataField: "NgaySinh",
                     width: 100,
                },
                {
                    caption: "Đơn vị",
                    dataField: "GioiTinh",
                    allowHiding: true,
                    visible: false
                },
                {
                    caption: "Phòng",
                    dataField: "PhongBan",
                    visible: false
                },
                {
                    caption: "Chức vụ",
                    dataField: "tenchucvu",
                    width: 100
                    
                },
                {
                    caption: "Loại hình",
                    dataField: "GioiTinh",
                    visible: false
                },
                {
                    caption: "Tên ngạch",
                    dataField: "TenNgach",
                     width: 100
                },
                {
                    caption: "Mã ngạch",
                    dataField: "MaNgach",
                    
                },
                {
                    caption: "Hình thức hưởng",
                    dataField: "HinhThucHuong",
                    visible: false
                },
                
                  {
                   caption: "Thông tin nghỉ hưu",
                    columns: [
                    {
                    caption: "Hình thức",
                    dataField: "tenhuongnghihuu",
                      lookup: {
                    dataSource: hinhthucnghihuu,
                    displayExpr: "TenHinhThucNghiHuu",
                    valueExpr: "TenHinhThucNghiHuu"
                },
                width: 120
                    },
                     {
                    caption: "Ngày nghỉ hưu",
                    dataField: "ngaynghihuu",
                    dataType: "date",
                    width: 100
                    },
                     {
                    caption: "Số quyết định",
                    dataField: "soquyetdinh",
                   
                   
                    },
                     {
                    caption: "Ngày quyết định",
                    dataField: "ngayquyetdinh",
                    dataType: "date",
                    width: 100
                   
                    },
                    {
                    caption: "Cơ quan quyết định",
                    dataField: "coquanquyetdinh",
                     width: 100
                   
                    }
                    ]
                },
                {
                    caption: "Còn lại ngày",
                    dataField: "conlai",
                    color: "red"
                    
                },
                {
                    caption: "Ghi chú",
                    dataField: "GioiTinh",
                    
                }
                    
                ],
                 onEditingStart: function(e) {
            console.log("EditingStart");
        },
                 onSaved: function(e) {
            console.log("Saved");
        },
                   onRowUpdated: function(e) {
axios.post('addthongtinnghihuu/'+e.key.id, e.key).then(function(response) {
                        reload_reset_bangccvc();
                    })
          
        },
             
});
              });


          });

    }