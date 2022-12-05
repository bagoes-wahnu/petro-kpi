let year="2"
let quarter="1"
let unit_id="6"
let chkArray=[]

jQuery(document).ready(function($) {
    table()

    $('#dttb-table-realisasi tbody').scroll(function(e) { 
        $('#dttb-table-realisasi thead').css("left", -$("#dttb-table-realisasi tbody").scrollLeft());
        $('#dttb-table-realisasi thead th:nth-child(1)').css("left", $("#dttb-table-realisasi tbody").scrollLeft()); 
        $('#dttb-table-realisasi tbody td:nth-child(1)').css("left", $("#dttb-table-realisasi tbody").scrollLeft()); 
        // $('#dttb-table-realisasi thead th:nth-child(1)').css("left", $("#dttb-table-realisasi tbody").scrollLeft()); 
        // $('#dttb-table-realisasi tbody td:nth-child(1)').css("left", $("#dttb-table-realisasi tbody").scrollLeft()); 
        // $('#dttb-table-realisasi thead th:nth-child(1)').css("left", $("#dttb-table-realisasi tbody").scrollLeft()); 
        // $('#dttb-table-realisasi tbody td:nth-child(1)').css("left", $("#dttb-table-realisasi tbody").scrollLeft()); 
    });

    sUnit()
    init_dzEvidence()
    init_dzEvChange()
    $('#tanggal').datepicker({
        //rtl: KTUtil.isRTL(),
        format: "yyyy",
        autoclose:true,
        todayHighlight: true,
        viewMode: "years",
        minViewMode: "years"
    })
    $("#select_quarter").select2({})

    $(document).on("click", '.chk-realisasi', function (e) {
        if($(this).prop('checked')==false){
            $('#chk-select-all').prop('checked',false)
        }
    });
})

function filter(){
    unit_id=$('#select_unit').val()
    year=$('#tanggal').val()
    quarter=$('#select-quarter').val()
    table()
}

function tables(){
    $.ajax({
        type: "GET",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            Authorization: "Bearer " + localStorage.getItem("ppre_token"),
        },
        url: urlApi + "realizations?year_id="+year+"&quarter="+quarter+"&unit_id="+unit_id,
        success: function (response) {
            let res = response.data.realizations
            let html=``
            let htmlFreeze=``
            if(res.length>0){
                for(i in res){
                    let evidenceText=""
                    let ev=res[i].parameter?.evidence
                    

                    if(ev.length>1){
                        for(e in ev){
                            evidenceText+=ev[e].name+", "
                        }
                    }else if(ev.length==1){
                        evidenceText=ev[0].name
                    }else{
                        evidenceText="-"
                    }

                    let sumberText=""
                    switch(res[i].parameter?.sumber) {
                        case "1":
                        sumberText="KPI Korporat"
                        break;
                        case "2":
                        sumberText="Spesifik"
                        break;
                        case "3":
                        sumberText="RKAP"
                        break;
                        default:
                        sumberText=""
                    }

                    let statusWarna=``
                    let statusText=""
                    switch(full?.realization?.status){
                        case 0:
                            statusWarna="secondary"
                            statusText="Draft"
                        break;

                        case 1:
                            statusWarna="secondary"
                            statusText="Menunggu approval pengajuan nilai"
                        break;

                        case 2:
                            statusWarna="success"
                            statusText="Selesai"
                        break;

                        case 3:
                            statusWarna="secondary"
                            statusText="Menunggu approval request edit"
                        break;

                        default:
                            statusWarna="success"
                    }

                    htmlFreeze+=`
                    <tr>
                        <td>
                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
                                <label class="form-check-label" for="flexCheckDefault">
                                </label>
                            </div>
                        </td>
                        <td>`+res[i].parameter?.perspective?.name+`</td>
                        <td>`+res[i].parameter?.strategic_target?.name+`</td>
                    </tr>
                    `

                    html+=`
                    <tr>
                        <td>`+res[i].parameter?.parameter+`</td>
                        <td>`+res[i].parameter?.formula+`</td>
                        <td>`+sumberText+`</td>
                        <td>`+evidenceText+`</td>
                        <td>`+res[i].parameter?.satuan+`</td>
                        <td>`+res[i].parameter?.kondisi?.value+`</td>
                        <td>`+res[i].target+`</td>
                        <td>`+res[i].parameter?.bobot+`</td>
                        <td><input type="text" class="form-control w-100 form-control-sm" value="`+res[i].realization?.realization+`"/></td>
                        <td>`+res[i].realization?.score+`</td>
                        <td>`+res[i].realization?.score_x_bobot+`</td>
                        <td>`+res[i].parameter?.type_ytd?.value+`</td>
                        <td>`+res[i].target+`</td>
                        <td><span class="badge badge-light-`+statusWarna+`">`+statusText+`</span></td>
                        <td>
                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="bi bi-three-dots fs-3"></i>
                            </button>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                </div>
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">Settings</a>
                                </div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    `
                }
            }
            $('#dttb-table-realisasi tbody').html(html)
            $('#dttb-table-freeze tbody').html(htmlFreeze)
        },
        error: function (response) {
            handleError(response);
        },
    });

}

function table() {
    document.getElementById("table-wrapper").innerHTML = ewpTable({
      targetId: "dttb-realisasi",
      class: "table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer w-2000",
      column: [
        { name: `
        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
            <input class="form-check-input" type="checkbox" id="chk-select-all" onclick="selectAll()"/>
           
        </div>
        `, width: "15" },
        { name: "Perspective", width: "15" },
        { name: "Sasaran Strategis", width: "15" },
        { name: "Parameter", width: "15" },
        { name: "Formula", width: "15" },
        { name: "Sumber", width: "15" },
        { name: "Tipe Evidence", width: "15" },
        { name: "Satuan", width: "15" },
        { name: "Kondisi", width: "15" },
        { name: "Target", width: "15" },
        { name: "Bobot Q1 (%)", width: "15" },
        { name: "Real Q1", width: "25" },
        { name: "Skor Q1", width: "15" },
        { name: "Skor x Bobot Q1", width: "15" },
        { name: "Tipe YTD", width: "15" },
        { name: "PIC", width: "15" },
        { name: "Status", width: "15" },
        { name: "Aksi", width: "15" },
      ],
    });
  
    realDatatables({
      target: "#dttb-realisasi",
      url: urlApi + "realizations?year_id="+year+"&quarter="+quarter+"&unit_id="+unit_id,
      sorting: [1, "asc"],
      apiKey: "realizations",
      column: [
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [0],
                bSortable:false,
                mRender: function (data, type, full,draw) {
                    return `
                    <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                        <input class="form-check-input chk-realisasi" name="chk-realisasi" type="checkbox" value="`+data+`"/>
                    </div>`
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [1],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.parameter?.perspective?.name)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [2],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.parameter?.strategic_target?.name)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [3],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.parameter?.parameter)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [4],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.parameter?.formula)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [5],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    let sumberText=""
                    switch(full.parameter?.sumber) {
                        case "1":
                        sumberText="KPI Korporat"
                        break;
                        case "2":
                        sumberText="Spesifik"
                        break;
                        case "3":
                        sumberText="RKAP"
                        break;
                        default:
                        sumberText=""
                    }
                    return sumberText
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [6],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    let evidenceText=""
                    let ev=full.parameter?.evidence
                    if(ev.length>1){
                        for(e in ev){
                            evidenceText+=ev[e].name+", "
                        }
                    }else if(ev.length==1){
                        evidenceText=ev[0].name
                    }else{
                        evidenceText="-"
                    }
                    return evidenceText
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [7],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.parameter?.satuan)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [8],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.parameter?.kondisi?.value)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [9],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.target)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [10],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.parameter?.bobot)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [11],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    let is_disabled=full?.realization?.status==2?"disabled":""
                    let html=`
                    <input type="text" class="form-control w-100 form-control-sm" id="real-`+data+`" value="`+full.realization?.realization+`" `+is_disabled+`/>
                    `
                    return html
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [12],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.realization?.score)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [13],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.realization?.score_x_bobot)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [14],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(full.parameter?.type_ytd?.value)
                },
            },
        },
        {
            col: "pic", 
            mid: true,
            mod: {
                aTargets: [15],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    return noNull(data)
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [16],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    let statusWarna=``
                    let statusText=""
                    switch(full?.realization?.status){
                        case "0":
                            statusWarna="secondary"
                            statusText="Draft"
                        break;

                        case "1":
                            statusWarna="secondary"
                            statusText="Menunggu approval pengajuan nilai"
                        break;

                        case "2":
                            statusWarna="light-success"
                            statusText="Selesai"
                        break;

                        case "3":
                            statusWarna="secondary"
                            statusText="Menunggu approval request edit"
                        break;

                        default:
                            statusWarna="light-success"
                            statusText="-"
                    }
                    let html=`<span class="badge badge-`+statusWarna+`">`+statusText+`</span>`
                    console.log(statusText)
                    return html
                },
            },
        },
        {
            col: "id", 
            mid: true,
            mod: {
                aTargets: [17],
                //bSortable:false,
                mRender: function (data, type, full,draw) {
                    let html=``
                    
                    if(full?.realization?.evidence?.attachment==undefined){
                        html+=`
                        <a class="btn btn-sm btn-icon me-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Upload Evidence" onclick="evidence(`+data+`,'`+full?.parameter?.parameter+`')">
                            <span class="svg-icon svg-icon-2x svg-icon-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M8.95128003,13.8153448 L10.9077535,13.8153448 L10.9077535,15.8230161 C10.9077535,16.0991584 11.1316112,16.3230161 11.4077535,16.3230161 L12.4310522,16.3230161 C12.7071946,16.3230161 12.9310522,16.0991584 12.9310522,15.8230161 L12.9310522,13.8153448 L14.8875257,13.8153448 C15.1636681,13.8153448 15.3875257,13.5914871 15.3875257,13.3153448 C15.3875257,13.1970331 15.345572,13.0825545 15.2691225,12.9922598 L12.3009997,9.48659872 C12.1225648,9.27584861 11.8070681,9.24965194 11.596318,9.42808682 C11.5752308,9.44594059 11.5556598,9.46551156 11.5378061,9.48659872 L8.56968321,12.9922598 C8.39124833,13.2030099 8.417445,13.5185067 8.62819511,13.6969416 C8.71848979,13.773391 8.8329684,13.8153448 8.95128003,13.8153448 Z" fill="#000000"/>
                                    </g>
                                </svg>
                            </span>
                        </a>
                        `
                    }
                    
                        if(full?.realization?.status=="2"){
                        html+=`
                        <a class="btn btn-sm btn-icon me-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Request Edit" onclick="requestEdit(`+data+`)">
                            <span class="svg-icon svg-icon-2x svg-icon-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <a class="btn btn-sm btn-icon me-1" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lihat Evidence" onclick="viewEvidence('`+data+`','`+full?.realization?.evidence?.attachment+`','`+full?.parameter?.parameter+`','`+full?.realization?.status+`','`+full?.realization?.evidence?.created_at+`')">
                            <span class="svg-icon svg-icon-2x svg-icon-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <rect fill="#000000" opacity="0.3" transform="translate(8.984240, 12.127098) rotate(-45.000000) translate(-8.984240, -12.127098) " x="7.41281179" y="10.5556689" width="3.14285714" height="3.14285714" rx="0.75"/>
                                        <rect fill="#000000" opacity="0.3" transform="translate(15.269955, 12.127098) rotate(-45.000000) translate(-15.269955, -12.127098) " x="13.6985261" y="10.5556689" width="3.14285714" height="3.14285714" rx="0.75"/>
                                        <rect fill="#000000" transform="translate(12.127098, 15.269955) rotate(-45.000000) translate(-12.127098, -15.269955) " x="10.5556689" y="13.6985261" width="3.14285714" height="3.14285714" rx="0.75"/>
                                        <rect fill="#000000" transform="translate(12.127098, 8.984240) rotate(-45.000000) translate(-12.127098, -8.984240) " x="10.5556689" y="7.41281179" width="3.14285714" height="3.14285714" rx="0.75"/>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    `
                    }
                    
                    return html
                },
            },
        },
    ],
});
}

var realDatatables = function (data) {
    let dTable,
      column = [],
      modColumn = [],
      isServerSide = data.serverSide ? data.serverSide : true;
  
    for (var i = 0; i < data.column.length; i++) {
      // Menggambar Kolom
      column.push({ mData: data.column[i]["col"] });
  
      // Modifikasi kolom
      if (data.column[i]["mod"] != null) {
        modColumn.push(data.column[i]["mod"]);
      }
    }
  
    $(data.target).each(function () {
      dTable = $(this).DataTable({
        bDestroy: true,
        processing: true,
        serverSide: isServerSide,
        //fixedColumns: true,
        // scrollY:        "400px",
        // scrollX:        true,
        // scrollCollapse: true,
        // paging:false,
        // fixedColumns:   {
        //     left: 2
        // },
        "dom":
        //   "<'row'" +
        //   "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
        //   "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
        //   ">" +
  
          "<'table-responsive'tr>" //+
  
        //   "<'row'" +
        //   "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
        //   "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
        //   ">"
          ,
        ajax: {
          url: data.url,
          type: "GET",
          headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          },
          beforeSend: function (xhr) {
            xhr.setRequestHeader(
              "Authorization",
              "Bearer " + localStorage.getItem("ppre_token"),
            );
          },
          error: function(jqXHR, ajaxOptions, thrownError) {
              handleErrorDetail(jqXHR)
          }
        },
        sPaginationType: "full_numbers",
        // dom:
        // "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-4'f><'col-sm-12 col-md-2 text-center'<'btn_search mt-2 mb-3'>>>" +
        // "<'row'<'col-md-12'tr>>" +
        // "<'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'p>>",
        aoColumns: column,
        aaSorting: [data.sorting],
        lengthMenu: [10, 25, 50, 75, 100],
        pageLength: 10,
        aoColumnDefs: modColumn,
        fnDrawCallback: function (oSettings) {
          $("tbody tr").each(function () {
            $('[data-toggle="tooltip"]').tooltip();
          });
          $(".btn_search").html(
            `<a href="javacript:;" class="kt-font-primary"><u><i class="la la-search"></i>  Advanced Search</u></a>`
          );
        },
        fnHeaderCallback: function (nHead, aData, iStart, iEnd, aiDisplay) {
          $(nHead).children("th").addClass("text-center");
        },
        fnFooterCallback: function (nFoot, aData, iStart, iEnd, aiDisplay) {
          $(nFoot).children("th").addClass("text-center");
        },
        fnRowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
          for (var i = 0; i < data.column.length; i++) {
            if (data.column[i]["mid"] == true) {
              $(nRow)
                .children("td:nth-child(" + (i + 1) + ")")
                .addClass("text-center");
            }
          }
        },
      });
    });
  
    return dTable;
  };

function selectAll(){
    let stat = $('#chk-select-all').prop('checked')
    $('.chk-realisasi').prop("checked",!stat)
}

function openKeterangan(){
    $('#modal-keterangan').modal('show')
}

//EVIDENCE
let dzEvidenceUrl = urlApi + "realization-evidence"; 
function init_dzEvidence() {
    dzEvidence = new Dropzone("#dz-upload-ev", {
      url: dzEvidenceUrl,
      dictCancelUpload: "Cancel",
      parallelUploads : 1,
      uploadMultiple:false,
      addRemoveLinks: true,
      acceptedFiles: '.jpg,.jpeg,.pdf',
      autoProcessQueue: false,
      paramName: "attachment",
      init: function () {
          this.on("error", function (file,response) {
              if (!file.accepted) {
                  this.removeFile(file);
                  Swal.fire('Pemberitahuan', 'Silahkan periksa file Anda lagi', 'warning');
              }else if (file.status == 'error') {
                this.removeFile(file);
                Swal.fire('Oppss..', response.status.message, 'error');
                //ewpLoadingHide();
                $('#modal-add').modal('hide')
                table()
                formData.clear()
              }
          });
          this.on('resetFiles', function (file) {
              this.removeAllFiles();
          });
      },
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          "Authorization": "Bearer " + localStorage.getItem("ppre_token")
      },
    });
}

let dzEvChangeUrl = urlApi + "realizations/1/change-requests"; 
function init_dzEvChange() {
    dzEvChange = new Dropzone("#dz-change-ev", {
      url: dzEvChangeUrl,
      dictCancelUpload: "Cancel",
      parallelUploads : 1,
      uploadMultiple:false,
      addRemoveLinks: true,
      acceptedFiles: '.jpg,.jpeg,.pdf',
      autoProcessQueue: false,
      paramName: "attachment",
      init: function () {
          this.on("error", function (file,response) {
              if (!file.accepted) {
                  this.removeFile(file);
                  Swal.fire('Pemberitahuan', 'Silahkan periksa file Anda lagi', 'warning');
              }else if (file.status == 'error') {
                this.removeFile(file);
                Swal.fire('Oppss..', response.status.message, 'error');
                //ewpLoadingHide();
                $('#modal-add').modal('hide')
                table()
              }
          });
          this.on('resetFiles', function (file) {
              this.removeAllFiles();
          });
      },
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          "Authorization": "Bearer " + localStorage.getItem("ppre_token")
      },
    });
}

function evidence(id,parameter){
    $('#modal-evidence').modal('show')
    $('#modal-evidence #id').val(id)
    $('#modal-evidence #keterangan').html(parameter)
}

function ajaxEvidence(){
    ewpLoadingShow();
    dzEvidence.on("sending", function(file, xhr, formData){
        formData.append("target_id", $('#modal-evidence #id').val());
        formData.append("quarter", $('#select_quarter').val());
        formData.append("realization", $('#real-'+$('#modal-evidence #id').val()).val());
    });
    dzEvidence.processQueue();
    dzEvidence.on('success', function (file,res) {
        //let id_upload=res.data.loading_plan_import_file.id
        this.removeAllFiles();
        formData.clear()
        ewpLoadingHide();
    });
}

function requestEdit(id){
    Swal.fire({
        title: "Yakin ingin ubah data?",
        icon: "warning",
        text: "Data yang diubah harus disetujui direktur terlebih dahulu",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonClass: "btn-light",
        confirmButtonText: "Ya, Lanjutkan",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.value) {
            $('#modal-upload-gambar').modal('show')
            $('#modal-upload-gambar #id').val(id)
        }
    });
}

function ajaxChangeEvidence(){
    dzEvChangeUrl = urlApi + "realizations/"+$('#modal-upload-gambar #id').val()+"/change-requests"; 
    ewpLoadingShow();
    dzEvChange.processQueue();
    dzEvChange.on('success', function (file,res) {
        //let id_upload=res.data.loading_plan_import_file.id
        this.removeAllFiles();
        ewpLoadingHide();
    });
}

function viewEvidence(id,attachment,parameter,status,created_at){
    $('#modal-view-evidence').modal('show')
    if(attachment!==undefined){
        $('#modal-view-evidence img').prop('src',baseUrl+"storage/"+attachment)
    }
    $('#modal-view-evidence #keterangan').html(parameter)
    let date=created_at.split("T")
    $('#modal-view-evidence #date').html(fDate(date[0],'date2'))
    let statusWarna=``
    let statusText=""
    switch(status){
        case "0":
            statusWarna="secondary"
            statusText="Draft"
        break;

        case "1":
            statusWarna="secondary"
            statusText="Menunggu approval pengajuan nilai"
        break;

        case "2":
            statusWarna="success"
            statusText="Selesai"
        break;

        case "3":
            statusWarna="secondary"
            statusText="Menunggu approval request edit"
        break;

        default:
            statusWarna="success"
            statusText="-"
    }
    $('#modal-view-evidence #status').html(statusText)
    $('#modal-view-evidence #status').addClass('text-'+statusWarna)
}

function simpan(){
    ewpLoadingShow();
    let chk=$('[name="chk-realisasi"]:checked').serializeArray()
    chkArray=[]
    for(c in chk){
        chkArray.push({
            target_id:chk[c].value,
            realization:$('#real-'+chk[c].value).val()
        })
    }

    let data={
        year:year,
        quarter:$('#select_quarter').val(),
        realizations:chkArray
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        data: data,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            Authorization: "Bearer " + localStorage.getItem("ppre_token"),
        },
        url: urlApi+'realizations/save',
        success: function (response) {
            ewpLoadingHide();
            Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil disimpan.",
                icon: "success",
            }).then((result) => {
                table();
                $("#modal-add").modal("hide");
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            ewpLoadingHide();
            handleErrorDetail(xhr);
        },
    });

}

function sUnit(){
    $("#select_unit").select2({
        allowClear: true,
        placeholder: "Pilih korporat/unit",
        ajax: {
          url: urlApi + "setting-kpi/target-units",
          dataType: "json",
          type: "GET",
          quietMillis: 50,
          headers: {
              "Authorization" : "Bearer "+localStorage.getItem('ppre_token'),
          },
         
          data: function (term) {
            return {
                "search":term.term,
             };
          },
          processResults: function (data) {
            return {
              results: $.map(data.data.units, function (item) {
                return {
                  text: item.name,
                  id: item.id,
                };
              }),
            };
          },
        },
      });
}