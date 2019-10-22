<div class="box">
	<?php
        $data['buttons'] = ['fetch', 'close'];
        $this->load->view("content_management/template/buttons",$data);
    ?>
	<div class="box-body">
		<div class="col-md-12">
            <p class="date-header text-center" style="font-size: 20px; font-weight: bold;"></p>
            <div class="table-fixed-head">
                <table class="table table-hover table-bordered">
                    <colgroup>
                        <col width="4%">
                        <col width="9%">
                        <col width="*">
                        <col width="9%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Level</th>
                            <th>Message</th>
                            <th>Time</th>
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
    var segment_4 = '<?=$this->uri->segment(4);?>';

</script>