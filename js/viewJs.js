
/**
 * Created by Anik-pc on 12/25/2016.
 */

$(document).ready(function(){
    if(sessionStorage.getItem('is_auth')==null) {
        view('container','login_directory',true);
    }else{
        $("#header").show();
        view('container','homeView',true);

            $('#selectionMonth').multiselect({
                includeSelectAllOption: true,
                allSelectedText: 'All Selected '
            });
    }
});

function view(id,html,action){
    if(action){
        $("#"+id).empty().html($("#"+html).html());
    }else{
        $("#"+id).append($("#"+html).html());
    }

}

function changeTab(id){

        $("#home").removeClass('active');
        $("#payment").removeClass('active');
        $("#receipt").removeClass('active');
        $("#"+id).addClass('active');

}