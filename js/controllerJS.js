/**
 * Created by Anik-pc on 12/25/2016.
 */

service_url['login'] = service_host+'login.php';
service_url['logout'] = service_host+'logout.php';
service_url['receiptForm'] = service_host+'receiptForm.php';
service_url['paymentForm'] = service_host+'paymentForm.php';
service_url['getData'] = service_host+'getData.php';
service_url['getViewData'] = service_host+'getViewData.php';
service_url['getReceiptList'] = service_host+'getReceiptList.php';
service_url['getPaymentList'] = service_host+'getPaymentList.php';
service_url['viewJournal'] = service_host+'viewJournal.php';

function loginController() {

        postFormData('loginForm', service_url['login'], function (data) {
            if (data.readyState == 4) {
                if (data.response != false) {
                    sessionStorage.setItem( 'is_auth', data);
                    var auth_status = sessionStorage.getItem('is_auth');
                    if (auth_status != null) {
                        location.reload();
                    } else {
                        view('login_holder', 'login_directory');
                    }
                } else {
                    alert('Username and password does not match.');
                }
            }
        });

}

function logout(){
    sessionStorage.removeItem('is_auth');
    location.reload();
}

function saveReceipt(){
    var receiptName, receiptAmount;
    receiptName = $("#receiptName").val();
    receiptAmount=$("#receiptAmount").val();
    if(receiptName=='')
    {
        warningmsg('Please Enter Receipt Name');
        return;
    }
    else if(receiptAmount=='')
    {
        warningmsg('Please Enter Amount of Money in BDT.');
        return;
    }

    if($("#receiptID").val()=="NA" && $("#receiptAction").val()=='UPDATE'){
        $("#receiptID").val($("#receiptNameselect").val());
    }
   var response = postFormData('receiptForm', service_url['receiptForm'], function (data) {
        if (data.readyState == 4) {
            if(data.response == '+OK'){
                Successmsg('Save Receipt Entry Successful.');
            }else{
                warningmsg('For New Year Month ');
            }

        }

    });
}

function savePayment(){
    var paymentName, paymentAmount;
    paymentName = $("#paymentName").val();
    paymentAmount=$("#paymentAmount").val();
    if(paymentName=='')
    {
        warningmsg('Please Enter Payment Name');
        return;
    }
    else if(paymentAmount=='')
    {
        warningmsg('Please Enter Amount of Money in BDT.');
        return;
    }
    if($("#paymentID").val()=="NA" && $("#paymentAction").val()=="UPDATE"){
        $("#paymentID").val($("#paymentNameselect").val());
    }
    postFormData('paymentForm', service_url['paymentForm'], function (data) {
        if (data.readyState == 4) {
            Successmsg('Save Payment Entry Successful.');
        }

    });

}

function getData(){

    $("#tableRow").empty().html('<table class="table table-bordered" style=" overflow:scroll;height:100px;" width="100%" id="dataTable"> </table>');
    var monthName = ['January',"February","March","April","May","Jun","July","August","September","October","November","December"];
 var year = $("#selectionYear").val();
 var month = $("#selectionMonth").val();

    if($("#paymentViewdt").is(':checked')){
     var   type = 'payment';
    }else if($("#receiptViewdt").is(':checked')){
     var   type = 'receipt';
    }else if($("#allViewdt").is(':checked')){
      var  type = 'all';
    }else{
        alert('Please Select A Type Payment/Receipt');
        alertmsg();
    }
    var tableData = [];

     tableData = generateColumn(year,month,type);

    if(type != null) {
        if(type == 'payment'){
            $("#tableTitle").html('PAYMENT TABLE FOR MONTH '+monthName[month-1]+' '+year);
        }else if(type == 'receipt'){
            $("#tableTitle").html('RECEIPT TABLE FOR MONTH '+monthName[month-1]+' '+year);
        }else{
            $("#tableTitle").html('JOURNAL FOR MONTH '+monthName[month-1]+' '+year);
        }
       var dataInfo = {
            'year': year,
            'month': month,
            'type': type,
        };
       $("#dataTable").DataTable({
            "destroy": true,
            "clear":true,
            "draw":true,
            scrollX: true,
            scrollCollapse: true,
            "lengthMenu": [[10, 25, 50, 100, 150, 200], [10, 25, 50, 100, 150, 200]],
            "searching": true,
            "bFilter": false,
            "columns": tableData[1],
            "order": [1,'asc'],
            "columnDefs": [
                {
                    "targets": tableData[0],
                    "orderable": false
                }
            ],
            "ajax": {
                url: service_url['getData'],
                type: 'POST',
                data:  dataInfo

            },
            dom: 'Blfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });

    }else{
		// all 
        getJson(dataIn,service_url['viewJournal'],function (data) {
            if (data.readyState == 4) {


                var dataInfo = JSON.parse(data.response);
              var str= dataInfo.toString();
                console.log(str);
            }
        });
	}

}


function generateColumn(year,month,type){

    var dateCOl = [],dateTar = [],returnData = [],day31 =[] ,day30 = [],monthName =[],total;

    day31 = ['1','3','5','7','8','10','12'];
    day30 = ['4','6','9','11'];
    monthName = ['Jan',"Feb","Mar","Apr","May","Jun","July","Aug","Sep","Oct","Nov","Dec"];

    if(jQuery.inArray(month, day31) !== -1){

        for(var i=0;i<33;i++){
            dateCOl[i] = [];
            if(i==0){
                if(type = 'payment'){

                    dateCOl[i]=( {"title": 'Payment List', "data": i});
                    dateTar[i] = i;
                }else{
                    dateCOl[i]=({"title": 'Receipt List', "data": i});
                    dateTar[i] = i;
                }


            }else if(i==32){
                dateCOl[i]=({"title": 'Total', "data": i});
                dateTar[i] = i;
            }else{
                dateCOl[i] = {"title": i+'-'+monthName[month-1], "data": i};
                dateTar[i] = i;
            }
        }

    }else if(jQuery.inArray(month, day30) !== -1){

        for(var i=0;i<32;i++){ dateCOl[i] = [];
            if(i==0){
                if(type = 'payment'){

                    dateCOl[i]=( {"title": 'Payment List', "data": i});
                    dateTar[i] = i;
                }else{
                    dateCOl[i]=({"title": 'Receipt List', "data": i});
                    dateTar[i] = i;
                }


            }else if(i==31){
                dateCOl[i]=({"title": 'Total', "data": i});
                dateTar[i] = i;
            }else{
                dateCOl[i] = {"title": i+'-'+monthName[month-1], "data": i};
                dateTar[i] = i;
            }
        }

    }else{
       var bool =  leapYear(year);
        alert(bool);
        if(bool){
            for(var i=0;i<31;i++){ dateCOl[i] = [];
                if(i==0){
                    if(type = 'payment'){

                        dateCOl[i]=( {"title": 'Payment List', "data": i});
                        dateTar[i] = i;
                    }else{
                        dateCOl[i]=({"title": 'Receipt List', "data": i});
                        dateTar[i] = i;
                    }


                }else if(i==30){
                    dateCOl[i]=({"title": 'Total', "data": i});
                    dateTar[i] = i;
                }else{
                    dateCOl[i] = {"title": i+'-'+monthName[month-1], "data": i};
                    dateTar[i] = i;
                }
            }

        }else{
            for(var i=0;i<30;i++){ dateCOl[i] = [];
                if(i==0){
                    if(type = 'payment'){

                        dateCOl[i]=( {"title": 'Payment List', "data": i});
                        dateTar[i] = i;
                    }else{
                        dateCOl[i]=({"title": 'Receipt List', "data": i});
                        dateTar[i] = i;
                    }


                }else if(i==29){
                    dateCOl[i]=({"title": 'Total', "data": i});
                    dateTar[i] = i;
                }else{
                    dateCOl[i] = {"title": i+'-'+monthName[month-1], "data": i};
                    dateTar[i] = i;
                }
            }
        }
    }

    returnData[0] = dateTar;
    returnData[1] = dateCOl;
    return returnData;

}


    function leapYear(year)
    {
        return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);
    }

function changeEntry(type,id,col){

    var dataIn = 'type='+type+'&id='+id+'&col='+col;
    if(type == 1){

        view('container','paymentView',true);changeTab('payment');
        $("#saveCancelPayment").hide();
        $("#paymentName").show();
        $("#paymentNameselect").hide();

        getJson(dataIn,service_url['getViewData'],function (data) {
            if (data.readyState == 4) {


                var dataInfo = JSON.parse(data.response);
                $("#paymentName").val(dataInfo[0][0]);
                $("#paymentYear").val(dataInfo[0][3]);
                $("#paymentMonth").val(dataInfo[0][4]);
                $("#paymentDay").val(dataInfo[0][5]);
                $("#paymentAmount").val(dataInfo[0][6]);
                $("#paymentType").val();
                $("#paymentID").val(id);
                $("#paymentAction").val('UPDATE');
            }
        });

    }else if(type == 2){

        view('container','receiptView',true); changeTab('receipt');

        $("#saveCancelREcceipt").hide();
        $("#receiptName").show();
        $("#receiptNameselect").hide();

        getJson(dataIn,service_url['getViewData'],function (data) {
            if (data.readyState == 4) {
                var dataInfo = JSON.parse(data.response);
                $("#receiptName").val(dataInfo[0][0]);
                $("#receiptYear").val(dataInfo[0][3]);
                $("#receiptMonth").val(dataInfo[0][4]);
                $("#receiptDay").val(dataInfo[0][5]);
                $("#receiptAmount").val(dataInfo[0][6]);
                $("#receiptType").val();
                $("#receiptID").val(id);
                $("#receiptAction").val('UPDATE');
            }
        });


    }

}

function addReceipt(){
    $("#receiptID").val('NA');
    $("#receiptAction").val('ADD');
    $("#saveCancelREcceipt").hide();
    $("#receiptName").show();
    $("#receiptNameselect").hide();
}

function addPayment(){
    $("#paymentID").val('NA');
    $("#paymentAction").val('ADD');
    $("#saveCancelPayment").hide();
    $("#paymentName").show();
    $("#paymentNameselect").hide();
}

function getReceiptList(){
    getJson('',service_url['getReceiptList'],function (data) {
        if (data.readyState == 4) {
            var dataInfo = JSON.parse(data.response);
            $("#receiptNameselect").html(dataInfo);
        }
    });

}

function getPaymentList(){

    getJson('',service_url['getPaymentList'],function (data) {
        if (data.readyState == 4) {
            var dataInfo = JSON.parse(data.response);
            $("#paymentNameselect").html(dataInfo);
        }
    });

}