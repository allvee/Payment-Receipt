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
service_url['deletePaymentEntry'] = service_host+'deletePaymentEntry.php';
service_url['deletePaymentName'] = service_host+'deletePaymentName.php';
service_url['deleteReceiptEntry'] = service_host+'deleteReceiptEntry.php';
service_url['deleteReceiptName'] = service_host+'deleteReceiptName.php';

function loginController() {

        postFormData('loginForm', service_url['login'], function (data) {
            if (data.readyState == 4) {
                if (data.response != false) {
                    sessionStorage.setItem( 'is_auth', data);
                    var auth_status = sessionStorage.getItem('is_auth');
                    var login_info = JSON.parse(data.response);
                    if (auth_status != null) {
                        console.log(login_info);
                        //alert(login_info[0].name);
                        $("#loguser").text(login_info[0].name);
                       // document.getElementById("loguser").textContent=login_info[0].name;
                        location.reload();
                        view('loguser', login_info[0].name);
                    } else {
                        view('login_holder', 'login_directory');
                    }
                } else {
                    warningmsg('Username and password does not matched.');
                }
            }
        });

}

function logout(){
    sessionStorage.removeItem('is_auth');
    location.reload();
}

function saveReceipt(){
/*    var receiptName, receiptAmount;
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
    }*/

   /* if($("#receiptID").val()=="NA" && $("#receiptAction").val()=='UPDATE'){
        $("#receiptID").val($("#receiptNameselect").val());
    }*/
   var response = postFormData('receiptFormUser', service_url['receiptForm'], function (data) {
        if (data.readyState == 4) {
            if(data.response == '+OK'){
                Successmsg('Save Receipt Entry Successful.');
            }else{
                warningmsg('Receipt For New Year Month ');
            }

        }

    });
    view('container','receiptView',true); changeTab('receipt');
}

function updateReceipt(){
    var day=$("#receiptDay").val();
    alert(day);

    if($("#receiptID").val()=='NA'){
        $("#receiptID").val($("#receiptNameselect").val());
    }

    var response = postFormData('receiptFormEntry', service_url['receiptForm'], function (data) {
        if (data.readyState == 4) {
            if(data.response == '+OK'){
                Successmsg('Update Receipt Entry Successful.');
            }else{
                warningmsg('Receipt For New Year Month ');
            }

        }
        view('container','receiptView',true); changeTab('receipt');
    });

}


function savePayment(){
   /* var paymentName, paymentAmount;
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
    }*/
    postFormData('paymentFormUser', service_url['paymentForm'], function (data) {
        if (data.readyState == 4) {
            if(data.response == '+OK'){
                Successmsg('Save Payment Entry Successful.');
            }else{
                warningmsg('Payment For New Year Month.');
            }
        }
        view('container','paymentView',true); changeTab('payment');
    });

}


function updatePayment(){


   var day= $("#paymentDay").val();
    alert(day);

    if($("#paymentID").val()=='NA')
    {
        $("#paymentID").val($("#paymentNameselect").val());
    }
    postFormData('paymentFormEntry', service_url['paymentForm'], function (data) {
        if (data.readyState == 4) {
            if(data.response == '+OK'){
                Successmsg('Update Payment Entry Successful.');
            }else{
                warningmsg('Payment For New Year/ Month.');
            }
        }
        view('container','paymentView',true); changeTab('payment');
    });

}

function getData(){

    $("#tableRow").empty().html('<table class="table table-bordered" style=" overflow:scroll;height:100px;" width="100%" id="dataTable"> </table>');
    var monthName = ['January',"February","March","April","May","Jun","July","August","September","October","November","December"];
    var year = $("#selectionYear").val();
    var month = $("#selectionMonth").val();
    var month_string=$("#selectionMonth").val();

    if(!month_string){
        warningmsg('Please Select exactly a Month.')
        return;
    }

    if($("#paymentViewdt").is(':checked')){
        var   type = 'payment';
        if (month_string.length>1)
        {
            warningmsg('Please Select Single Month only.')
            return;
        }
    }else if($("#receiptViewdt").is(':checked')){
        var   type = 'receipt';
        if (month_string.length>1)
        {
            warningmsg('Please Select Single Month only.')
            return;
        }
    }else if($("#allViewdt").is(':checked')){
        var  type = 'all';
    }else{

        alertmsg('Please Select A Type Payment/Receipt');
    }
    var tableData = [];

    tableData = generateColumn(year,month,type);

    if(type != null) {
        if(type == 'payment'){
            $("#tableTitle").html('PAYMENT TABLE FOR MONTH '+monthName[month-1]+' '+year);
        }else if(type == 'receipt'){
            $("#tableTitle").html('RECEIPT TABLE FOR MONTH '+monthName[month-1]+' '+year);
        }else{
            var ss='';
            //console.log(monthName);
            for(i=0; i<month_string.length; i++)
            {
               if(i>0)
                    ss=ss+', '+ monthName[month_string[i]];
                else
                    ss=ss+ monthName[month_string[i]];
            }

            $("#tableTitle").html('JOURNAL FOR MONTH '+ss+' '+year);
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
            "bFilter": true,
            "columns": tableData[1],
            "order": [0,'asc'],
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
		
	}

}


function generateColumn(year,month,type) {

    var dateCOl = [], dateTar = [], returnData = [], day31 = [], day30 = [], monthName = [], total, journalCol = [];

    day31 = ['1', '3', '5', '7', '8', '10', '12'];
    day30 = ['4', '6', '9', '11'];
    monthName = ['Jan', "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
    if (type == 'all') {
        dateCOl[0] = ({"title": 'SL NO.', "data": 0});
        dateTar[0] = 0;

        dateCOl[1] = ({"title": 'Receipt List', "data": 1});
        dateTar[1] = 1;

        dateCOl[2] = ({"title": 'Amount TK.', "data": 2});
        dateTar[2] = 2;

        dateCOl[3] = ({"title": 'Payment List', "data": 3});
        dateTar[3] = 3;

        dateCOl[4] = ({"title": 'Amount TK.', "data": 4});
        dateTar[4] = 4;

    }
    else {
    if (jQuery.inArray(month, day31) !== -1) {

        for (var i = 0; i < 33; i++) {
            dateCOl[i] = [];
            if (i == 0) {
                if (type == 'payment') {
                    dateCOl[i] = ( {"title": 'Payment List', "data": i});
                    dateTar[i] = i;
                } else if (type == 'receipt') {
                    dateCOl[i] = ({"title": 'Receipt List', "data": i});
                    dateTar[i] = i;

                }
                else {
                    dateCOl[i] = ({"title": 'Journal List', "data": i});
                    dateTar[i] = i;
                }


            } else if (i == 32) {
                dateCOl[i] = ({"title": 'Total', "data": i});
                dateTar[i] = i;
            } else {
                dateCOl[i] = {"title": i + '-' + monthName[month - 1], "data": i};
                dateTar[i] = i;
            }
        }

    } else if (jQuery.inArray(month, day30) !== -1) {

        for (var i = 0; i < 32; i++) {
            dateCOl[i] = [];
            if (i == 0) {
                if (type == 'payment') {

                    dateCOl[i] = ( {"title": 'Payment List', "data": i});
                    dateTar[i] = i;
                } else if (type == 'receipt') {
                    dateCOl[i] = ({"title": 'Receipt List', "data": i});
                    dateTar[i] = i;
                }
                else {
                    dateCOl[i] = ({"title": 'Journal List', "data": i});
                    dateTar[i] = i;
                }


            } else if (i == 31) {
                dateCOl[i] = ({"title": 'Total', "data": i});
                dateTar[i] = i;
            } else {
                dateCOl[i] = {"title": i + '-' + monthName[month - 1], "data": i};
                dateTar[i] = i;
            }
        }

    } else {
        var bool = leapYear(year);
        //alert(bool);
        if (bool) {
            for (var i = 0; i < 31; i++) {
                dateCOl[i] = [];
                if (i == 0) {
                    if (type == 'payment') {

                        dateCOl[i] = ( {"title": 'Payment List', "data": i});
                        dateTar[i] = i;
                    } else if (type == 'receipt') {
                        dateCOl[i] = ({"title": 'Receipt List', "data": i});
                        dateTar[i] = i;
                    }
                    else {
                        dateCOl[i] = ({"title": 'Journal List', "data": i});
                        dateTar[i] = i;
                    }


                } else if (i == 30) {
                    dateCOl[i] = ({"title": 'Total', "data": i});
                    dateTar[i] = i;
                } else {
                    dateCOl[i] = {"title": i + '-' + monthName[month - 1], "data": i};
                    dateTar[i] = i;
                }
            }

        } else {
            for (var i = 0; i < 30; i++) {
                dateCOl[i] = [];
                if (i == 0) {
                    if (type == 'payment') {

                        dateCOl[i] = ( {"title": 'Payment List', "data": i});
                        dateTar[i] = i;
                    } else if (type == 'receipt') {
                        dateCOl[i] = ({"title": 'Receipt List', "data": i});
                        dateTar[i] = i;
                    }
                    else {
                        dateCOl[i] = ({"title": 'Journal List', "data": i});
                        dateTar[i] = i;
                    }


                } else if (i == 29) {
                    dateCOl[i] = ({"title": 'Total', "data": i});
                    dateTar[i] = i;
                } else {
                    dateCOl[i] = {"title": i + '-' + monthName[month - 1], "data": i};
                    dateTar[i] = i;
                }
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
   // alert(col);
    if(type == 1){

        view('container','paymentView',true);changeTab('payment');

        saveCancelPaymentEntry();
        getJson(dataIn,service_url['getViewData'],function (data) {
            if (data.readyState == 4) {

                var dataInfo = JSON.parse(data.response);

                $("#paymentDay option[value='" + dataInfo[0][5] + "']").attr('selected', true);
                $("#paymentNameselect option[value='" + id + "']").attr('selected', true);

                $("#paymentSelectionYear option[value='" + dataInfo[0][3] + "']").attr('selected', true);
                $("#paymentSelectionMonth option[value='" + dataInfo[0][4]+ "']").attr('selected', true);


                //$('#paymentNameselect').val(id);
                //$("#paymentDay").val(dataInfo[0][5]);
                $("#paymentAmount").val(dataInfo[0][6]);
                $("#paymentType").val();
                $("#paymentID").val(id);
                $("#paymentAction").val('UPDATE');

                $('#paymentSelectionYear').attr("readonly", true);
                $('#paymentSelectionMonth').attr("readonly", true);
                $('#paymentNameselect').attr("readonly", true);
                $('#paymentDay').attr("readonly", true);
            }
        });

    }else if(type == 2){

        view('container','receiptView',true); changeTab('receipt');

        saveCancelReceiptEntry();
        getJson(dataIn,service_url['getViewData'],function (data) {
            if (data.readyState == 4) {
                var dataInfo = JSON.parse(data.response);

                $("#receiptDay option[value='" + dataInfo[0][5] + "']").attr('selected', true);
                $("#receiptNameselect option[value='" + id + "']").attr('selected', true);

                $("#receiptSelectionYear option[value='" + dataInfo[0][3] + "']").attr('selected', true);
                $("#receiptSelectionMonth option[value='" + dataInfo[0][4]+ "']").attr('selected', true);

               // $('#receiptNameselect').val(id);
                //$("#receiptDay").val(dataInfo[0][5]);
                $("#receiptAmount").val(dataInfo[0][6]);
                $("#receiptType").val();
                $("#receiptID").val(id);
                $("#receiptAction").val('UPDATE');

                $('#receiptSelectionYear').attr("readonly", true);
                $('#receiptSelectionMonth').attr("readonly", true);
                $('#receiptNameselect').attr("readonly", true);
                $('#receiptDay').attr("readonly", true);
            }
        });


    }

}

function ConfirmBackToReceipt(){
    modal({
        type: 'confirm',
        title: 'Confirm',
        text: 'Are you sure you want to Go Back?',
        callback: function(result) {
            if(result==true){
                view('container','receiptView',true); changeTab('receipt');
            }
            else {

            }
        }
    });
}

function deleteEntry(type,id,col,year,month){

    var dataIn = 'type='+type+'&id='+id+'&col='+col+'&year='+year+'&month='+month;

    modal({
        type: 'confirm',
        title: 'Confirm',
        text: 'Are you sure you want to Delete?',
        callback: function(result) {
            if(result==true){

                if(type == 1){

                    getJson(dataIn,service_url['deletePaymentEntry'],function (data) {
                        if (data.readyState == 4) {
                            var dataInfo = JSON.parse(data.response);
                            Successmsg('Payment Entry Delete Success.');

                            view('container','homeView',true);changeTab('home');
                            getData();
                        }
                    });
                }
                else if(type == 2){

                    getJson(dataIn,service_url['deleteReceiptEntry'],function (data) {
                        if (data.readyState == 4) {
                            var dataInfo = JSON.parse(data.response);
                            Successmsg('Receipt Entry Delete Success.');

                            view('container','homeView',true);changeTab('home');
                            getData();
                        }
                    });

                }

            }
        }
    });

}

function deleteNames(type,id,year,month){

    var dataIn = 'type='+type+'&id='+id+'&year='+year+'&month='+month;

    modal({
        type: 'confirm',
        title: 'Confirm',
        text: 'Are you sure you want to Delete?',
        callback: function(result) {
            if(result==true){

                if(type == 1){

                    getJson(dataIn,service_url['deletePaymentName'],function (data) {
                        if (data.readyState == 4) {
                            var dataInfo = JSON.parse(data.response);
                            Successmsg('Payment Name Delete Success.');

                            view('container','homeView',true);changeTab('home');
                            getData();
                        }
                    });
                }
                else if(type == 2){

                    getJson(dataIn,service_url['deleteReceiptName'],function (data) {
                        if (data.readyState == 4) {
                            var dataInfo = JSON.parse(data.response);
                            Successmsg('Receipt Name Delete Success.');

                            view('container','homeView',true);changeTab('home');
                            getData();
                        }
                    });

                }

            }
            else {

            }
        }
    });
}

function getReceiptList(){
    var year = $("#receiptSelectionYear").val();
    var month = $("#receiptSelectionMonth").val();
    var get = 'year='+year+'&month='+month;
    getJson(get,service_url['getReceiptList'],function (data) {
        if (data.readyState == 4) {
            var dataInfo = JSON.parse(data.response);
            if(dataInfo==''){
                alertmsg('No Receipt Name found for this Month. Please Enter.');
                saveCancelReceiptUser();
                document.getElementById('saveCancelReceiptUser').style.visibility='visible';
            }
            else{
                Successmsg('Receipt Name fetched for this Month.');
            }

            $("#receiptNameselect").html(dataInfo);
        }
    });

}

function getPaymentList(){
    var year = $("#paymentSelectionYear").val();
    var month = $("#paymentSelectionMonth").val();
    var get = 'year='+year+'&month='+month;
    getJson(get,service_url['getPaymentList'],function (data) {
        if (data.readyState == 4) {
            var dataInfo = JSON.parse(data.response);
            if(dataInfo=='') {
                alertmsg('No Payment Name found for this Month. Please Enter.');
                saveCancelPaymentUser();
                document.getElementById('saveCancelPaymentUser').style.visibility='visible';
            }
            else{
                Successmsg('Receipt Name fetched for this Month.');
            }
            var dataInfo = JSON.parse(data.response);
            $("#paymentNameselect").html(dataInfo);
        }
    });

}

function saveCancelReceiptUser(){
    $("#receiptViewForm").empty().html($("#receiptViewFormHtmlNewUser").html());
    document.getElementById('saveCancelReceiptEntry').style.visibility='hidden';
}

function saveCancelReceiptEntry(){
    $("#receiptViewForm").empty().html($("#receiptViewFormHtmlNewEntry").html());
    document.getElementById('saveCancelReceiptUser').style.visibility='hidden';
}


function saveCancelPaymentUser(){
    $("#paymentViewForm").empty().html($("#paymentViewFormHtmlNewUser").html());
    document.getElementById('saveCancelPaymentEntry').style.visibility='hidden';
}

function saveCancelPaymentEntry(){
    $("#paymentViewForm").empty().html($("#paymentViewFormHtmlNewEntry").html());
    document.getElementById('saveCancelPaymentUser').style.visibility='hidden';

}