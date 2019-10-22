<style>
	.list-group-item{
		cursor: pointer;
	}
	#divSet{
		float: right;
		margin: 15px;
		position:relative;
		bottom: 272px;
	}
	#email_message{
	  width: 765px;
	  height: 243px;
	}
</style>
<div class="box">
    <?php
        $data['buttons'] = ['update', 'close'];
        $this->load->view("content_management/template/buttons",$data);
    ?>

  <div class="box-body">
	<div class="col-md-12 list-data tbl-content" id="list-data">
        <?php
			$inputs = [
				'email_template_name',
				'email_template_status',
				'email_template_logo',
				'email_template_header',
				'email_template_footer',
				'email_template_subject',
				'email_template_color',
				'email_template_message'
			];
			$value = [
				$EditData[0]->name,
				$EditData[0]->status,
				$EditData[0]->logo,
				$EditData[0]->headers,
				$EditData[0]->footer,
				$EditData[0]->subject,
				$EditData[0]->color,
				$EditData[0]->message,			
			];
			$EmailArray = $this->standard->inputs($inputs, $value);
		?>
		<div id="divSet" class="panel-group">
			<div class="panel panel-success">
				<div class="panel-heading"><b>Selector</b></div>
				<li class="list-group-item panel-body" id="email">EMAIL</li>
				<li class="list-group-item panel-body" id="username">USERNAME</li>
				<li class="list-group-item panel-body" id="firstname">FIRSTNAME</li>
			</div>				
		</div>
    </div>
  </div>
  
</div>

<script type="text/javascript">
	
	$(function(){
            $("#username, #email, #firstname").draggable({
                appendTo: "body",
                helper: "clone",
                cursor: "select",
                revert: "invalid"
            });
            initDroppable($("#email_message"));
            function initDroppable($elements) {
                $elements.droppable({
                    hoverClass: "textarea",
                    accept: ":not(.ui-sortable-helper)",
                    drop: function(event, ui) {
                        var $this = $(this);
 
                        var tempid = ui.draggable.text();
                        var dropText;
						dropText = " {{" + tempid + "}} ";
                        var droparea = document.getElementById('email_message');
                        var range1 = droparea.selectionStart;
                        var range2 = droparea.selectionEnd;
                        var val = droparea.value;
                        var str1 = val.substring(0, range1);
                        var str3 = val.substring(range1, val.length);
                        droparea.value = str1 + dropText + str3;
                    }
                });
            }
        });
	
	$(document).on("click", "#btn_close", function(){
		window.location.href = "<?php echo base_url().'content_management/Site_email_template' ?>";
	});
	
	$(document).on("click", "#btn_update", function(){
		if(validate.standard('<?=$EmailArray;?>')){
			var modal_obj = '<?= $this->standard->confirm("confirm_edit"); ?>';
			modal.standard(modal_obj, function(result){
				if(result){
					var email_id = '<?php echo $EditData[0]->id ?>';
					var name = $("#email_name").val();
					var message = $("#email_message").val();
					var status = $("#email_status").val();
					var logo = $("#email_logo").val();
					var header = $("#email_header").val();
					var footer = $("#email_footer").val();
					var subject = $("#email_subject").val();
					var color = $("#email_color").val();
					url = '<?php echo base_url().'content_management/Site_email_template/edit_save'?>';
					data = {
						email_id: email_id,
						name: name,
						message: message,
						status: status,
						logo: logo,
						header: header,
						footer: footer,
						color: color,
						subject: subject
					}
					aJax.post(url, data, function(result){
						  var obj = is_json(result);
							if(obj.response == 'success'){
								var message = '<?= $this->standard->dialog("update_success"); ?>';
								modal.loading(false);
								modal.alert(message, function(){
									window.location.href = "<?php echo base_url().'content_management/Site_email_template' ?>";
								});	
							}
							else{					
								var message = '<?= $this->standard->dialog("update_failed"); ?>';
								modal.loading(false);
								modal.alert(message, function(){
									window.location.href = "<?php echo base_url().'content_management/Site_email_template' ?>";
								});
							};  
					});
				}
            });
		}
	});
</script>