$(document).on("click", ".btn_insert", function(e){

	//get source
	var data_id = $(this).attr("identifier");
	//path of file 
	var path = $('#file_url').val();
	var ext =  path.split('.').pop();
    switch(ext.toLowerCase()) {
        case 'jpg':
        case 'png':
        case 'jpeg':
        case 'gif':
           var preview = '<img class="img_banner_preview" id="img_ban_'+data_id+'" src="'+base_url+path+'" style="max-width:200px; background-color:#9c9c9c;" />';
        break;  
        case 'svg':
           var preview = '<img class="img_banner_preview" id="img_ban_'+data_id+'" src="'+base_url+path+'" style="max-width:200px; background-color:#9c9c9c;" />';
        break;  
        case 'pdf':
           var preview = '<iframe class="img_banner_preview" id="img_ban_'+data_id+'" src="'+base_url+path+'" style="width:100%"></iframe>';
        break;                      // the alert ended with pdf instead of gif.  
        case 'mp4':
            var preview = '<video class="img_banner_preview" style="width : 100%" controls>';
            preview += '<source src="'+base_url+path+'" type="video/mp4">';
            preview += 'Your browser does not support HTML5 video.';
            preview += '</video>';
        break;
        default:
            var preview = '<span class="img_banner_preview"></span>';

    }

	$('.'+data_id).next('.img_banner_preview').remove();
	$('#'+data_id).val(path);
	$(preview).insertAfter('.'+data_id);
	//close modal
	$(".modal").modal("hide");
    $('.bootbox').modal('hide');
    $('#ckeditor_filemanager_modal').modal('hide');

});