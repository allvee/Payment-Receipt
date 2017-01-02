/**
 * Created by Anik-pc on 12/25/2016.
 */


function postFormData(id, service_url, callBack) {

    var formData = new FormData(document.getElementById(id));

    var xhr = new XMLHttpRequest();
    xhr.open('POST', service_url, true);
    xhr.send(formData);
    xhr.onreadystatechange = function () {
        callBack(xhr);
    };

}

function getJson(data, service_url, callBack) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', service_url, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(data);
    xhr.onreadystatechange = function () {
        callBack(xhr);
    };
}

function  alertmsg(){
    modal({
        type: 'alert',
        title: 'Alert',
        text: "Simple Message!"
    });
}
function  warningmsg(msg) {
    modal({
        type: 'warning',
        title: 'Warning',
        text: msg,
        center: false,
    });
}
function  Successmsg(msg) {
    modal({
        type: 'success',
        title: 'Success',
        text: msg,
    });
}