var appPath = '/mexicovr';

$(document).ready(function () {        
    initAcoTree();    
});

$(document).on('click', 'span.action-item', function () {        
    $.ajax({
        url: appPath+'/permissions/show_aro',
        data: 'aco=' + $(this).parent().attr('id'),
        type: 'post',
        success: function (response) {
            $('#aro-display').html(response)
        }
    });
});

function updatePermission(obj, role_id, aco) {
    var perm_url = appPath+'/permissions/delete';
    var update_img = appPath+'/img/deny.png';    
    
    if($(obj).children('img').attr('src') == appPath+'/img/deny.png') {
        perm_url = appPath+'/permissions/add';
        update_img = appPath+'/img/approve.png';
    }

    $(obj).children('img').attr('src', appPath+'/img/ajax-loader.gif');

    $.ajax({
        url: perm_url,
        data: 'role_id=' + role_id + '&aco=' + aco,
        type: 'post',
        success: function (response) {
            $(obj).find('img').attr('src', update_img);
        }
    });
}

function initAcoTree() {
    $("#acos").treeview({
        url: appPath+"/permissions/show_aco_tree",
        // add some additional, dynamic data and request with POST
        ajax: {
            data: {
                "additional": function() {
                    return "random: " + new Date;
                }
            },
            type: "post"
        }
    });   
}