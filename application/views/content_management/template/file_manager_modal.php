<div id="ckeditor_filemanager_modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">File Manager : </h4>
            </div>
            <div class="modal-body">
                <?php if($this->uri->segment(2) != "file_manager"){ $this->load->view("content_management/filemanager/browser"); }?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>