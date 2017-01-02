
/**
 * Created by Anik-pc on 12/25/2016.
 */

/*CONFIGURATION */

    var site_host = window.location.href;

    var site_host_temp = site_host.split('/');

    var site_host = "";

    for (var i = 0; i < (site_host_temp.length - 3); i++) {
        site_host = site_host + site_host_temp[i] + "/";
    }

    projrct_url = site_host_temp[site_host_temp.length - 3];
    project_name ='/'+ site_host_temp[site_host_temp.length - 2];
    service_host = site_host + projrct_url + project_name+'/php/';
    service_url = new Array();
