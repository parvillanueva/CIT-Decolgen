<!-- <link rel=stylesheet href="<?= base_url();?>vendor/codemirror/doc/docs.css"> -->
<link rel="stylesheet" href="<?= base_url();?>vendor/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="<?= base_url();?>vendor/codemirror/addon/fold/foldgutter.css">
<link rel="stylesheet" href="<?= base_url();?>vendor/codemirror/addon/dialog/dialog.css">
<link rel="stylesheet" href="<?= base_url();?>vendor/codemirror/theme/monokai.css">
<script src="<?= base_url();?>vendor/codemirror/lib/codemirror.js"></script>
<script src="<?= base_url();?>vendor/codemirror/addon/search/searchcursor.js"></script>
<script src="<?= base_url();?>vendor/codemirror/addon/search/search.js"></script>
<script src="<?= base_url();?>vendor/codemirror/addon/dialog/dialog.js"></script>
<script src="<?= base_url();?>vendor/codemirror/addon/edit/matchbrackets.js"></script>
<script src="<?= base_url();?>vendor/codemirror/addon/edit/closebrackets.js"></script>
<script src="<?= base_url();?>vendor/codemirror/addon/comment/comment.js"></script>
<script src="<?= base_url();?>vendor/codemirror/addon/wrap/hardwrap.js"></script>
<script src="<?= base_url();?>vendor/codemirror/addon/fold/foldcode.js"></script>
<script src="<?= base_url();?>vendor/codemirror/addon/fold/brace-fold.js"></script>
<script src="<?= base_url();?>vendor/codemirror/mode/javascript/javascript.js"></script>
<script src="<?= base_url();?>vendor/codemirror/keymap/sublime.js"></script>

<style type="text/css">
  .CodeMirror {border-top: 1px solid #eee; border-bottom: 1px solid #eee; line-height: 1.3; height: auto;}
  .CodeMirror-linenumbers { padding: 0 8px; }
  strong { font-size: 14px;  }
  .title { font-size: 18px;  margin-top: 15px; }
  .content.documentation {margin-top: 5em;}
</style>
<div class="content documentation">

	<label class="title">Global Controller Link <br><small><?= base_url('content_management/global_controller');?></small></label><br>
	<br><strong>Get List (javascript): </strong>
	<textarea id="code5">
        AJAX.config.base_url("<?= base_url();?>"); //URL OF CONTROLLER

        AJAX.select.table("[table]"); // table
        AJAX.select.select("[field select]"); // Select
        AJAX.select.where.equal("[sql query]"); // query
        AJAX.select.offset([offset]); //offset
        AJAX.select.limit([limit]);   //limit
        AJAX.select.order.[order type i.e asc/decs]("[field to order]");  // Optional
        AJAX.select.join.[join type]("table to join", "join query" , "join query"); // Optional

        AJAX.select.exec(function(result){
            var obj = result;
            console.log(obj); //display result
        });
	</textarea>

	<strong>Save Data (javascript): </strong>
	<textarea id="code6">
        AJAX.config.base_url("<?= base_url();?>"); //URL OF CONTROLLER
        
        AJAX.insert.table("[table]"); //table
        AJAX.insert.params("[data1]"); //data to insert
        AJAX.insert.params("[data2]"); //data to insert

        AJAX.insert.exec(function(result){
            //success code here
            //will return id of inserted value
        });
	</textarea>

	<strong>Update Data (javascript): </strong>
	<textarea id="code7">
        AJAX.config.base_url("<?= base_url();?>"); //URL OF CONTROLLER

        AJAX.update.table("[table]"); //table
        AJAX.update.where("[where value]", "[field name]"); // [where value] equals to [field name]
        AJAX.update.params("[data]"); //data to insert

        AJAX.update.exec(function(result){
            //code here
            //will return "Success" or "Failed"
        });
	</textarea>

	<strong>Delete Data (javascript): </strong>
	<textarea id="code8">
        AJAX.config.base_url("<?= base_url();?>"); //URL OF CONTROLLER

        AJAX.delete.table("[table]"); //table
        AJAX.delete.where("[id]", 1); //id to delete = 1

        AJAX.delete.exec(function(result){
            //code here
            //will return "Success" or "Failed"
        });
	</textarea>

    <strong>Total Page Number for Pagination (javascript): </strong>
    <textarea id="code9">
        AJAX.config.base_url("<?= base_url();?>"); //URL OF CONTROLLER
        
        AJAX.select.table("[table]"); //table
        AJAX.select.select("[field select]"); //select
        AJAX.select.limit(limit); //limit
        AJAX.select.offset(offset); //offset
        AJAX.select.where.equal("sql query", 1); //query
        AJAX.select.order.[order type]("[field to order]"); // field order
        AJAX.select.join.[join type]("table to join", "join query" , "join query"); //join query

        AJAX.select.exec(function(result){
        //success code here

        }, function(obj){
            //to get total record count 
            console(obj.total_record);

            ///to get total page :  
            console(obj.total_page); // page number will depend on the limit
            pagination.generate(obj.total_page, ".list_pagination", get_data);
        });
    </textarea>

</div>

<script>

	text_code("code5");
	text_code("code6");
	text_code("code7");
    text_code("code8");
	text_code("code9");

	function text_code(id){
		var editor = CodeMirror.fromTextArea(document.getElementById(id), {
		    lineNumbers: true,
		    mode: "javascript",
		    keyMap: "sublime",
		    autoCloseBrackets: true,
		    matchBrackets: true,
		    showCursorWhenSelecting: true,
		    theme: "monokai",
		    tabSize: 2
		  });
	}
  
</script>