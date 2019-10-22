
<div class="form-group">
  	<label class="col-sm-2 control-label">Table Name</label>
  	<div class="col-sm-5">
  		<div class="input-group">
        	<input id="sql_table" class="form-control required" placeholder="SQL Table Name">
        	<span class="input-group-btn">
              	<button type="button" id="btn_connect_table" class="btn btn-info btn-flat btn-connect-table">Connect</button>
            </span>
      	</div>
    	<span>This will connect to your table in database</span><br>
    </div>
    <div class="clearfix"></div><br><br>
</div>
<div class="col-md-12">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th rowspan="2">Field</th>
				<th rowspan="2">Label</th>
				<th rowspan="2">Input</th>
				<th colspan="3">Display</th>
				<th rowspan="2" style="width: 50px;">Required</th>
			</tr>
			<tr>
				<th style="width: 50px;">List</th>
				<th style="width: 50px;">Create</th>
				<th style="width: 50px;">Update</th>
			</tr>
		</thead>
		<tbody class="crud_table">
			
		</tbody>
	</table>
</div>

<script type="text/javascript">

	var content_management = '<?=base_url("content_management");?>';

</script>