  window.onload = function() {
        loadtaikhoan();
        loadtaikhoan_bangccvc();
        loadtaikhoan_choxuly();
        loadtaikhoan_danghihuu();
        loadsocbccvc();
    };
    function reload_reset() {
        loadtaikhoan();
        var dataGrid = $("#girdtaikhoan").dxDataGrid("instance");
        dataGrid.refresh();
    }
     function loadsocbccvc() {
axios.get('demallhoso').then(function (response) {
document.getElementById("count_nghihuu_danhsach").innerHTML=response.data
});
axios.get('demhosochoduyet').then(function (response) {
document.getElementById("count_nghihuu_choduyet").innerHTML=response.data
});
axios.get('demhosoxuly').then(function (response) {
document.getElementById("count_nghihuu_chonghihuu").innerHTML=response.data
});
axios.get('demhosodanghihuu').then(function (response) {
document.getElementById("count_nghihuu_danghihuu").innerHTML=response.data
});

     }

        function loadtaikhoan() {
  
             
               
 
       
             
        var data = axios.get('gethosochoduyet').then(function (response) {
                
            var data1 = response.data[0];
           
           var datas = data1.map(function(value, label) {
                let data = value;
                let stt = label + 1;
                if(value.ngaynghihuu!=="")
                {
                         var date1 = new Date(value.ngaynghihuu); 
                    var date2 = new Date(); 
                    var Difference_In_Time = date1.getTime() - date2.getTime(); 
  
// To calculate the no. of days between two dates 
var Difference_In_Days = parseInt(Difference_In_Time / (1000 * 3600 * 24)); 
                }
                else
                {
                    var Difference_In_Days = 0;
                }
                var datas = Object.assign(data, {
                    stt: stt.toString(),
                    conlai: Difference_In_Days
                });
                return datas;
            });
      
      axios.get('gethinhthucnghihuu').then(function (response) {
  var selectButton = $("#gridSelectedDuyet").dxButton({
        text: "Duy???t h??? s?? ?????n danh s??ch x??? l?? ngh??? h??u",
        height: 34,
        disabled: true,
        onClick: function () {
            $.each(dataGrid.getSelectedRowKeys(), function() {
                 axios.post('updatetrangthaixuly/'+this.id, this).then(function(response) {
                        Swal.fire({
                    title: 'L??u',
                    text: '???? th??m v??o danh s??ch x??? l?? ngh??? h??u',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                        reload_reset_choxuly();
                        reload_reset();
                        loadsocbccvc();
                    })
            });
            dataGrid.refresh();
        }
    }).dxButton("instance");
        var hinhthucnghihuu = response.data[0];

            var dataGrid=$("#girdtaikhoan").dxDataGrid({
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
         onSelectionChanged: function(data) {
            selectButton.option("disabled", !data.selectedRowsData.length);
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
                        allowDeleting: true,
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
                    dataField: "Ghichu",
                    
                }
                    
                ],
                 onEditingStart: function(e) {
            console.log("EditingStart");
        },
                 onSaved: function(e) {
            console.log("Saved");
        },
         onRowRemoved: function(e) {
            axios.get('deletethongtinnghihuu/'+e.key.id).then(function(response) {
                       reload_reset();
                       loadsocbccvc();
                    })
        },
                   onRowUpdated: function(e) {
axios.post('updatethongtinnghihuu/'+e.key.id, e.key).then(function(response) {
                        reload_reset();
                    })
          
        },
             
}).dxDataGrid("instance");
              });


          });

    }

    function reload_reset_bangccvc() {
        loadtaikhoan_bangccvc();
        var dataGrid = $("#gridcongchucvienchuc").dxDataGrid("instance");
        dataGrid.refresh();
    }

        function loadtaikhoan_bangccvc() {
          
             
               
 
       
             
        var data = axios.get('getallhoso').then(function (response) {

              
  
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
  
          var selectButton = $("#gridSelectedCCVC").dxButton({
        text: "L???p danh s??ch ngh??? h??u",
        height: 34,
        disabled: true,
        onClick: function () {
            $.each(datagr.getSelectedRowKeys(), function() {
                 axios.post('addthongtinnghihuu', this).then(function(response) {
                        Swal.fire({
                    title: 'L??u',
                    text: '???? th??m v??o danh s??ch ch??? duy???t ngh??? h??u',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                        reload_reset();
                        loadsocbccvc();
                    })
            });
            datagr.refresh();
        }
          }).dxButton("instance");
        var hinhthucnghihuu = response.data[0];
            var datagr=$("#gridcongchucvienchuc").dxDataGrid({
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
        onSelectionChanged: function(data) {
            selectButton.option("disabled", !data.selectedRowsData.length);
        }, 
                paging: {
                    pageSize: 4
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
                    caption: "Ng??y sinh",
                    dataField: "NgaySinh",
                     width: 100,
                },
                {
                    caption: "Gi???i t??nh",
                    dataField: "gioitinhx",
                    
                },
                {
                    caption: "Ng???ch",
                    dataField: "MaNgach",
                    allowHiding: true,
                  
                },
                {
                    caption: "B???c",
                    dataField: "Bac",
                   
                },
                {
                    caption: "H??? s???",
                    dataField: "HeSo",
                    width: 100
                    
                },
                {
                    caption: "Tr??nh ?????",
                    dataField: "TrinhDo",
                 
                },
                {
                    caption: "Tin H???c",
                    dataField: "TinHoc",
                     width: 100
                },
                {
                    caption: "Ti???ng Anh",
                    dataField: "TiengAnh",
                    
                },
                {
                    caption: "QLNN",
                    dataField: "Qlnn",
                    
                },
                {
                    caption: "Ch??nh tr???",
                    dataField: "ChinhTri",
                    color: "red"
                    
                },
                {
                    caption: "QP-AN",
                    dataField: "Qpan",
                    
                },
                {
                    caption: "Ch???c v???",
                    dataField: "tenchucvu",
                     width: 100,
                },
                 {
                    caption: "Ph??ng",
                    dataField: "PhongBan",
                    
                },
                   {
                    caption: "Lo???i H??nh",
                    dataField: "LoaiHinh",
                    
                },
                 {
                    caption: "?????ng vi??n",
                    dataField: "DangVien",
                    
                },
                {
                    caption: "?????i t?????ng",
                    dataField: "DoiTuong",
                    
                },
                 {
                    caption: "Ghi ch??",
                    dataField: "Ghichu",
                    
                },
                 {
                    caption: "Ng??y hi???u ch???nh h??? s??",
                    dataField: "NgayVaoDangChinhThuc",
                     width: 100,
                },
                ],
                 onEditingStart: function(e) {
            console.log("EditingStart");
        },
                 onSaved: function(e) {
            console.log("Saved");
        },
          onRowRemoved: function(e) {
            axios.get('deletethongtinnghihuu/'+e.key.id).then(function(response) {
                        reload_reset_bangccvc();
                        loadsocbccvc();
                    })
        },
                   onRowUpdated: function(e) {
axios.post('updatethongtinnghihuu/'+e.key.id, e.key).then(function(response) {
                        reload_reset_bangccvc();
                    })
          
        },
             
}).dxDataGrid("instance");
              });


          });

    }
    //cho xu ly
    function reload_reset_choxuly() {
        loadtaikhoan_choxuly();
        var dataGrid = $("#gridchoxuly").dxDataGrid("instance");
        dataGrid.refresh();
    }

   function loadtaikhoan_choxuly() {
  
             
               
 
       
             
        var data = axios.get('gethosoxuly').then(function (response) {
                
            var data1 = response.data[0];
           
           var datas = data1.map(function(value, label) {
                let data = value;
                let stt = label + 1;
                if(value.ngaynghihuu!=="")
                {
                         var date1 = new Date(value.ngaynghihuu); 
                    var date2 = new Date(); 
                    var Difference_In_Time = date1.getTime() - date2.getTime(); 
  
// To calculate the no. of days between two dates 
var Difference_In_Days = parseInt(Difference_In_Time / (1000 * 3600 * 24)); 
                }
                else
                {
                    var Difference_In_Days = 0;
                }
                var datas = Object.assign(data, {
                    stt: stt.toString(),
                    conlai: Difference_In_Days
                });
                return datas;
            });
      
      axios.get('gethinhthucnghihuu').then(function (response) {
  var selectButton = $("#gridSelectedXuLy").dxButton({
        text: "Duy???t h??? s?? ?????n danh s??ch ngh??? h??u",
        height: 34,
        disabled: true,
        onClick: function () {
            $.each(dataGrid.getSelectedRowKeys(), function() {
                 axios.post('updatetrangthaiduyet/'+this.id, this).then(function(response) {
                        Swal.fire({
                    title: 'L??u',
                    text: '???? th??m v??o danh s??ch x??? l?? ngh??? h??u',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                        reload_reset_choxuly();
                        reload_reset_danghihuu();
                        loadsocbccvc();
                    })
            });
            dataGrid.refresh();
        }
    }).dxButton("instance");
        var hinhthucnghihuu = response.data[0];

            var dataGrid=$("#gridchoxuly").dxDataGrid({
                dataSource: datas,
                showBorders: true,
                 columnChooser: {
            enabled: true,
            mode: "select" // or "select"
        },
                   selection: {
            mode: "multiple",
            selectAllMode: "multiple" // or "multiple" | "none"
        },
         onSelectionChanged: function(data) {
            selectButton.option("disabled", !data.selectedRowsData.length);
        }, 
        
                paging: {
                    pageSize: 4
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
                       allowDeleting: true,
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
                width: 150
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
                    dataField: "Ghichu",
                    
                }
                    
                ],
                 onEditingStart: function(e) {
            console.log("EditingStart");
        },
                 onSaved: function(e) {
            console.log("Saved");
        },
         onRowRemoved: function(e) {
            axios.get('deletethongtinnghihuu/'+e.key.id).then(function(response) {
                        reload_reset_choxuly();
                        loadsocbccvc();
                    })
        },
                   onRowUpdated: function(e) {
axios.post('updatethongtinnghihuu/'+e.key.id, e.key).then(function(response) {
                        reload_reset_choxuly();
                    })
          
        },
             
}).dxDataGrid("instance");
              });


          });

    }
    // da nghi huu
     function reload_reset_danghihuu() {
        loadtaikhoan_danghihuu();
        var dataGrid = $("#griddanghihuu").dxDataGrid("instance");
        dataGrid.refresh();
    }

   function loadtaikhoan_danghihuu() {
  
             
               
 
       
             
        var data = axios.get('gethosodanghihuu').then(function (response) {
                
            var data1 = response.data[0];
           
           var datas = data1.map(function(value, label) {
                let data = value;
                let stt = label + 1;
                if(value.ngaynghihuu!=="")
                {
                         var date1 = new Date(value.ngaynghihuu); 
                    var date2 = new Date(); 
                    var Difference_In_Time = date1.getTime() - date2.getTime(); 
  
// To calculate the no. of days between two dates 
var Difference_In_Days = parseInt(Difference_In_Time / (1000 * 3600 * 24)); 
                }
                else
                {
                    var Difference_In_Days = 0;
                }
                var datas = Object.assign(data, {
                    stt: stt.toString(),
                    conlai: Difference_In_Days
                });
                return datas;
            });
      
      axios.get('gethinhthucnghihuu').then(function (response) {
  
        var hinhthucnghihuu = response.data[0];

            var dataGrid=$("#griddanghihuu").dxDataGrid({
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
         onSelectionChanged: function(data) {
            selectButton.option("disabled", !data.selectedRowsData.length);
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
                        allowDeleting: true,
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
                    dataField: "Ghichu",
                    
                }
                    
                ],
                 onEditingStart: function(e) {
            console.log("EditingStart");
        },
                 onSaved: function(e) {
            console.log("Saved");
        },
        onRowRemoved: function(e) {
            axios.get('deletethongtinnghihuu/'+e.key.id).then(function(response) {
                        reload_reset_danghihuu();
                        loadsocbccvc();
                    })
        },
                   onRowUpdated: function(e) {
axios.post('updatethongtinnghihuu/'+e.key.id, e.key).then(function(response) {
                        reload_reset_danghihuu();
                    })
          
        },
             
}).dxDataGrid("instance");
              });


          });

    }