
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
                    placeholder: "T??m ki???m..."
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
                    caption: "H??? v?? t??n",
                    dataField: "HoVaTen",
                    width: 120,

                },
                {
                    caption: "Gi???i t??nh",
                    dataField: "gioitinhx",
                    
                },
                {
                    caption: "Ng??y sinh",
                    dataField: "NgaySinh",
                     width: 100,
                },
                {
                    caption: "????n v???",
                    dataField: "GioiTinh",
                    allowHiding: true,
                    visible: false
                },
                {
                    caption: "Ph??ng",
                    dataField: "PhongBan",
                    visible: false
                },
                {
                    caption: "Ch???c v???",
                    dataField: "tenchucvu",
                    width: 100
                    
                },
                {
                    caption: "Lo???i h??nh",
                    dataField: "GioiTinh",
                    visible: false
                },
                {
                    caption: "T??n ng???ch",
                    dataField: "TenNgach",
                     width: 100
                },
                {
                    caption: "M?? ng???ch",
                    dataField: "MaNgach",
                    
                },
                {
                    caption: "H??nh th???c h?????ng",
                    dataField: "HinhThucHuong",
                    visible: false
                },
                
                  {
                   caption: "Th??ng tin ngh??? h??u",
                    columns: [
                    {
                    caption: "H??nh th???c",
                    dataField: "tenhuongnghihuu",
                      lookup: {
                    dataSource: hinhthucnghihuu,
                    displayExpr: "TenHinhThucNghiHuu",
                    valueExpr: "TenHinhThucNghiHuu"
                },
                width: 120
                    },
                     {
                    caption: "Ng??y ngh??? h??u",
                    dataField: "ngaynghihuu",
                    dataType: "date",
                    width: 100
                    },
                     {
                    caption: "S??? quy???t ?????nh",
                    dataField: "soquyetdinh",
                   
                   
                    },
                     {
                    caption: "Ng??y quy???t ?????nh",
                    dataField: "ngayquyetdinh",
                    dataType: "date",
                    width: 100
                   
                    },
                    {
                    caption: "C?? quan quy???t ?????nh",
                    dataField: "coquanquyetdinh",
                     width: 100
                   
                    }
                    ]
                },
                {
                    caption: "C??n l???i ng??y",
                    dataField: "conlai",
                    color: "red"
                    
                },
                {
                    caption: "Ghi ch??",
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