<!-- UPLOAD MODAL -->
<!-- MODAL -->
<style type="text/css">
    .box {
        margin-top: 7em !important;
    }
</style>

<script type="text/javascript">

$(document).ready(function(){
    var load_fm = $('.file_manager').attr("data-id");
    if(load_fm != undefined){
        $(".file-manager").load("<?php echo base_url().'content_management/file_manager_2/load_file_manager'; ?>");
    }
});

</script>
<div class ="file-manager"></div>
<!-- FOR YOUTUBE EMBED -->
<div id="youtube_modal" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Embed Youtube </h4>
            </div>
            <div class="modal-body">
                <div class="form-group col-md-12">
                    <label for="usr">URL:</label>
                    <input type="text" class="form-control" id="youtube_url">
                </div>
                <div class="form-group col-md-6">
                    <label for="usr">Width:</label>
                    <input type="number" class="form-control" id="youtube_width" value="560">
                </div>
                <div class="form-group col-md-6">
                    <label for="usr">Height:</label>
                    <input type="number" class="form-control" id="youtube_height" value="315">
                </div>
                <div class="form-group col-md-12">
                    <label for="usr"></label>
                    <label class="checkbox-inline"><input type="checkbox" value="" id="youtube_responsive">Responsive (fit to screen width)</label>
                    <label class="checkbox-inline"><input type="checkbox" value="" id="youtube_autoplay">Auto Play</label>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" id="youtube_insert" class="btn btn-primary" >Insert</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- FOR YOUTUBE INPUT -->
<div id="youtube_input" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Embed Youtube </h4>
            </div>
            <div class="modal-body">
                <div class="form-group col-md-12">
                    <label for="usr">URL:</label>
                    <input type="text" class="form-control" id="youtube_url_input">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" id="youtube_insert_input" class="btn btn-primary" >Insert</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?=base_url();?>cms/js/cms/template/modals.js"></script>