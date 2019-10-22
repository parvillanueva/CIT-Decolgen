<div class="box">
    <div class="box-body">
        <div class="col-md-12">
            <div class="table-fixed-head">
                <table class="table table-hover table-bordered">
                    <colgroup>
                        <col width="*">
                        <col width="25%">
                        <col width="25%">
                        <col width="9%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Log Files</th>
                            <th>Date</th>
                            <th>No. of Errors</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table_body"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    var content_management = '<?=base_url("content_management");?>';
    var no_log = "<?=$this->session->flashdata('no_log');?>";

</script>