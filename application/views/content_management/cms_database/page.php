<div class="box">
  <?php
    $data['buttons'] = ['add', 'save']; // add, save, update
    $this->load->view("content_management/template/buttons", $data);
  ?> 
 	<div class="box-body">  
 		<div class="form-horizontal">
      <div class="form-group">
        <label class="col-sm-2 control-label">Table Name</label>
        <div class="col-sm-5">
          <div class="input-group"> 
            <span class="input-group-addon">site_</span>
            <input id="table_name" class="form-control reqq" placeholder="Table Name">
          </div>
        </div>
    </div>
 	</div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 350px;">Field Name</th>
        <th style="width: 350px;">Type</th>
        <th style="width: 150px;">Length</th>
        <th style="width: 150px;" colspan="2">Allow Null</th>
      </tr>
    </thead>
    <tbody class="table_body">
      <tr>
        <td><input class="form-control" type="text" readonly id="field" name="field[]" value="id"/></td>
        <td><input class="form-control" type="text" readonly id="type" name="type[]" value="INT"/></td>
        <td><input class="form-control" type="text" readonly id="length" name="length[]" value="11"/></td>
        <td><input class="form-control" type="text" readonly id="null" name="null[]" value="FALSE"/></td>
        <td style="width: 50px;"></td>
      </tr>
      <tr>
        <td><input class="form-control" type="text" readonly id="field" name="field[]" value="create_date"/></td>
        <td><input class="form-control" type="text" readonly id="type" name="type[]" value="DATETIME"/></td>
        <td><input class="form-control" type="text" readonly id="length" name="length[]" value=""/></td>
        <td><input class="form-control" type="text" readonly id="null" name="null[]" value="TRUE"/></td>
        <td style="width: 50px;"></td>
      </tr>
      <tr>
        <td><input class="form-control" type="text" readonly id="field" name="field[]" value="update_date"/></td>
        <td><input class="form-control" type="text" readonly id="type" name="type[]" value="DATETIME"/></td>
        <td><input class="form-control" type="text" readonly id="length" name="length[]" value=""/></td>
        <td><input class="form-control" type="text" readonly id="null" name="null[]" value="TRUE"/></td>
        <td style="width: 50px;"></td>
      </tr>
      <tr>
        <td><input class="form-control" type="text" readonly id="field" name="field[]" value="user"/></td>
        <td><input class="form-control" type="text" readonly id="type" name="type[]" value="INT"/></td>
        <td><input class="form-control" type="text" readonly id="length" name="length[]" value="11"/></td>
        <td><input class="form-control" type="text" readonly id="null" name="null[]" value="TRUE"/></td>
        <td style="width: 50px;"></td>
      </tr>
      <tr>
        <td><input class="form-control" type="text" readonly id="field" name="field[]" value="status"/></td>
        <td><input class="form-control" type="text" readonly id="type" name="type[]" value="INT"/></td>
        <td><input class="form-control" type="text" readonly id="length" name="length[]" value="6"/></td>
        <td><input class="form-control" type="text" readonly id="null" name="null[]" value="TRUE"/></td>
        <td style="width: 50px;"></td>
      </tr>
    </tbody>
  </table>
</div>

<div id="add_field" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Field</h4>
      </div>
      <div class="modal-body">
        <div class="form-horizontal">
          <div class="form-group">
              <label class="col-sm-2 control-label">Field Name</label>
              <div class="col-sm-10">
                <input id="insert_name" class="form-control req" placeholder="Field Name">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Type</label>
              <div class="col-sm-10">
                <select class="form-control" id="insert_type">
                  <option>CHAR</option>
                  <option>VARCHAR</option>
                  <option>TEXT</option>
                  <option>BLOB</option>
                  <option>INT</option>
                  <option>BIGINT</option>
                  <option>FLOAT</option>
                  <option>DOUBLE</option>
                  <option>DECIMAL</option>
                  <option>DATE</option>
                  <option>DATETIME</option>
                  <option>TIMESTAMP</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Length</label>
              <div class="col-sm-10">
                <input type="number" id="insert_length" class="form-control" placeholder="Length">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Allow Null</label>
              <div class="col-sm-10">
                <select class="form-control" id="insert_null">
                  <option>TRUE</option>
                  <option>FALSE</option>
                </select>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="table_add" class="btn btn-primary table_add">Insert</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">

    var content_management = '<?=base_url("content_management");?>';
    
</script>