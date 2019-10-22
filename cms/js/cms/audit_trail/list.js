AJAX.config.base_url(base_url);

var limit = 10;

$(document).ready(function(){
    get_data();

    $("#form_search").removeClass( "pull-right" );
});

$(document).on('cut copy paste input', '.start-date, .end-date', function(e) {
    e.preventDefault();
});

$(document).on("change", ".record-entries select", function(e){
    $(".record-entries option").removeAttr("selected");
    $(".record-entries select").val($(this).val());
    $(".record-entries option:selected").attr("selected","selected");

    var record_entries = $(this).prop( "selected",true ).val();
    limit = parseInt(record_entries);
    offset = '1';

    get_data();
});

function get_data(keyword, from, to){
    modal.loading(true); //show loading

    AJAX.select.table("cms_audit_trail");
    AJAX.select.select("cms_audit_trail.new_data as data, cms_audit_trail.id as id, cms_audit_trail.url as Url, cms_users.name as Name, cms_audit_trail.action as Action, cms_audit_trail.create_date as Date");
    AJAX.select.offset(offset);
    AJAX.select.limit(limit);
    AJAX.select.order.desc("cms_audit_trail.create_date");
    AJAX.select.join.left("cms_users", "cms_users.id", "cms_audit_trail.user_id");

        if(keyword){
        AJAX.select.where.like("cms_audit_trail.url", keyword);
        AJAX.select.where.or.like("cms_users.name", keyword);
        AJAX.select.where.or.like("cms_audit_trail.action", keyword);
        AJAX.select.where.or.like("old_data", keyword);
        AJAX.select.where.or.like("new_data", keyword);

        }
        if(from && to){
            AJAX.select.where.greater_equal("DATE(cms_audit_trail.create_date)", from);
            AJAX.select.where.less_equal("DATE(cms_audit_trail.create_date)", to);
        }

    AJAX.select.exec(function(result){
        var obj = result; //check if result is valid JSON format, Format to JSON if not
        var html ='';
        console.log(obj);

        $.each(obj, function(x,y){
            html += '<tr>';
            var page = y.Url.split("/");
            var bread = '<ul class="breadcrumb">';
            var uri = content_management;

            var count = 0;
            $.each(page, function(x,y){
                count ++;
                if(count < 3){
                    if(count == 1){
                        bread += '<li>'+y+'</li>';
                    } else {
                        bread += '<li>'+y+'</li>';
                    }
                }
            });

            bread += '</ul>';
            html += '   <td>'+bread+'</td>';
            html += '   <td>'+y.Name+'</td>';
            html += '   <td>'+y.Action+'</td>';
            html += '   <td>'+moment(y.Date).format('LLL')+'</td>';
            if(y.data != ""){
                html += '   <td style="width: 50px;"><a class="view_history" href="#" data-id="'+y.id+'"><i class="fa fa-eye"></i></a></td>';
            } else {
                html += '   <td style="width: 50px;"></td>';
            }
            
            html += '</tr>';
        });

        $('.table_body').html(html);
        modal.loading(false); //hide loading
    }, function(obj){
        pagination.generate(obj.total_page, ".list_pagination", get_data);
       });
}

pagination.onchange(function(){
    //offset = $(this).val();
    modal.loading(true);
    get_data();
    $("#search_query").val("");
    modal.loading(false);
});

$(document).on('keypress', '#search_query', function(e) {                          
    if(e.keyCode == 13){
        var keyword = $(this).val()
        get_data(keyword);
    }
});

$(document).on('click', '.view_history', function(e){
    e.preventDefault();
    modal.loading(true);
    var html = "";
    var html2 = "";
    var data_id = $(this).attr("data-id");

    AJAX.select.table("cms_audit_trail");
    AJAX.select.select("cms_audit_trail.new_data as new_data,cms_audit_trail.old_data as old_data");
    AJAX.select.where.equal("id", data_id);

    AJAX.select.exec(function(result){
        var obj = result; //check if result is valid JSON format, Format to JSON if not
        var obj2 = is_json(obj[0].new_data); //check if result is valid JSON format, Format to JSON if not
        var json = is_json(obj[0].old_data);
        var json2 = Object.keys(is_json(obj[0].new_data));
        var obj3 = is_json(obj[0].old_data);
        var obj = result; //check if result is valid JSON format, Format to JSON if not
        var obj2 = is_json(obj[0].new_data); //check if result is valid JSON format, Format to JSON if not
        var json = Object.keys(is_json(obj[0].old_data));
        var json2 = Object.keys(is_json(obj[0].new_data));
        var obj3 = is_json(obj[0].old_data);
        console.log(obj2);
        //new data
        html += '<table class="col-md-6 table table-bordered" style="margin-top: 20px;">';
        html += '<tbody>';
        html += '<tr id="header">';
        html += '<td style="width: 100px; background-color: #222d32; color: #fff; text-align:center;">Field</td>';
        html += '<td style="width: 370px; background-color: #222d32; color: #fff; text-align:center;">Old Data</td>';
        html += '<td style="width: 370px; background-color: #222d32; color: #fff; text-align:center;">New Data</td>';
        html += '</tr>';
        
        if(obj3[0]){
            $.each(obj3[0], function(x,y){
                html += '<tr>';
                html += '<td style="width: 100px; background-color: #222d32; color: #fff; text-align:center;">' + x + '</td>';
                html += '<td style="width: 370px;">' + y + '</td>';
                if(json2.indexOf(x) > -1){
                    if(obj2[x] != y){
                        html += '<td style="background-color: #c7cdfa;">'+ obj2[x] +'</td>';
                    } else {
                        html += '<td>'+ obj2[x] +'</td>';     
                    }
                    
                } else {
                    html += '<td>'+y+'</td>';
                }
                html += '</tr>';
            });
        }else{
            var json_new_data = is_json(obj[0].new_data);
            $.each(json_new_data, function(x,y){
                html += '<tr>';
                html += '<td style="width: 100px; background-color: #222d32; color: #fff; text-align:center;">' + x + '</td>';
                html += '<td style="width: 370px; background-color: #fbe7eb;">No Data</td>';
                html += '<td style="width: 370px; background-color: #c7cdfa;">' + y + '</td>';
                html += '</tr>';
            });
        }
        
        modal.loading(false);
        modal.show('<div style="overflow-y: scroll; max-height: 500px;">' + html + '</div>',"large",function(){});
    });
});

$(document).on('click', '#btn_filter', function(){
    var from = $('.start-date').val();
    var to = $('.end-date').val();
    var keyword = $('.search-query').val();
    $('.start-date').css('border-color','#ccc');
    $('.end-date').css('border-color','#ccc');

    if(from == ''){
        $('.start-date').css('border-color','red');
    }else if(to == ''){
        $('.end-date').css('border-color','red');
    }else if(!keyword == ''){
       
         if(from != '' && to != ''){
        
        }
    }else{
 
    }

    get_data(keyword, from, to);
});

$(document).on('click', '#btn_reset', function(){
    $('.start-date').val('');
    $('.end-date').val('');
    $('.search-query').val('');
    AJAX.select.where.not("user_id", 0);
    get_data();
});