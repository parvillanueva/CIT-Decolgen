<body>
  <div class="box">
      <?php
        $data['buttons'] = ['add','search'];
        $this->load->view("content_management/template/buttons",$data);
      
      $optionSet = '';
        foreach($pageOption as $pageOptionLoop){
            $optionSet .= "<option value='".$pageOptionLoop."'>".$pageOptionLoop."</option>";
        }
      ?>

    <div class="box-body">
      <?php echo $this->page_sort->count_records();?>
      <?php echo $this->page_sort->page_number();?>
    <div class="col-md-12 list-data">
        <table class= "table listdata table-bordered sorted_table">
            <thead>
                <tr id="sortable">
                    <th id="rem" style="width: 10px;" class="hide center-content"></th>
                    <th id="rem" style="width: 10px;" class="center-content"></th>
                    <th id="rem" style="width: 10px;" ><input class ="selectall center-content" type ="checkbox"></th>
                    <th class='th-setter' style="width: 350px;">Name</th>
                    <th class="th-setter" style="width: 70px;">Status</th>
                    <th id="rem" style="width: 40px; text-align:center;">Action</th>
                </tr>  
            </thead>
            <tbody class="table_body" id="table_body"></tbody>
        </table>
      <div class="list_pagination"></div>
    </div>
      <?php echo $this->page_sort->page_number();?>
   </div>
  </div>
</body>

<script type="text/javascript">
  
  AJAX.config.base_url("<?=base_url();?>"); 
  var update_success = '<?=$this->standard->dialog("update_success");?>';

  $(document).ready(function(){
    $('#search_query').attr("accept","/[^a-zA-Z0-9\u00f1\u00d1 ._,-\/]/g");
    $('#search_query').attr("onkeyup","this.value=this.value.replace(/[^a-zA-Z0-9\u00f1\u00d1 ._,-\/]/g,'');");
    $(".table").addSortWidget();
    $("#rem img").remove(); 
    record_number();
    $(document).on('keypress', '#search_query', function(e) {
      query = "";                          
      if (e.keyCode == 13) {
          var keyword = $(this).val();
          get_data(keyword);
      }
    });

    $('.selectall').prop('checked', false);
    get_data();
    var sort_table = $('#table_body').sortable();

    $('#table_body').bind('sortupdate', function(event, ui){
        var order = 0;
        $('.order').each(function(){  
            order ++;
            $(this).attr("data-order",order);
        });
        save_sort();
    });           
});

//add user
$(document).on('click', '#btn_add', function(e){
   location.href = ('<?= base_url()."content_management/"?>site_header_menu/add');
});

 var limit = 10;
 var offset = 1;

function get_data(keyword){
    modal.loading(true);

    AJAX.select.table("pckg_header_menu");
    AJAX.select.select("id, update_date, status, name");
    AJAX.select.offset(offset);
    AJAX.select.limit(limit);
    AJAX.select.order.asc("orders");

    if(keyword)
    {
      AJAX.select.query("(pckg_header_menu.name LIKE '%"+keyword+"%') AND pckg_header_menu.status >= 0");
    }else{
      AJAX.select.where.greater_equal("pckg_header_menu.status", 0);
    }
    // ajax get post
    AJAX.select.exec(function(result){
        var obj = result;
        var htm = "";
        var status_action = null;
        
        if (obj.length > 0) {
          $.each(obj, function(x,y){
           
            htm += "<tr>";
            htm += "<td class='hide center-content'><p class='order' data-order='' data-id="+y.id+"></p></td>";
            htm += "<td style='background:#c3c3c3;'><span style='color: #fff;' class='move-menu glyphicon glyphicon-th' class='center-content'></span></td>"; 
            htm +=   "<td><input class='select center-content' data-status='"+y.status+"' data-id='"+y.id+"' type='checkbox'></td>";

            $("table th.th-setter").each(function(){
              var data = [$(this).text().toLowerCase()];
              var new_data =  data.map(replace_in_array);
              
              if (y['status'] == 1) {
                  y['status'] = 'Active';
                  status_action = 1;
              } else if (y['status'] == 0) {
                  y['status'] = 'Inactive';
                  status_action = 0;
              }

              htm += "<td data-status='"+status_action+"' title='"+y[new_data]+"'>"+y[new_data]+"</td>";
            });

            htm +=   "<td class='center-content'><a href='<?= base_url()."content_management/"?>site_header_menu/update/"+y.id+"' class='edit' data-status='"+y.status+"' id='"+y.id+"' title='edit'><span class='glyphicon glyphicon-pencil'></span></td>";
            htm += "</tr>";
          });
        } else {
          htm += '<tr><td colspan="5" style="text-align: center;"><b>No records to show!</b></td></tr>';
        }

        $('#table_body').html(htm);
        modal.loading(false);
    }, function(obj){
      $('.total-record').html('of '+obj.total_record);
        pagination.generate(obj.total_page, '.list_pagination', limit,'table_body', 5);
    });
  }

function record_number() {
  setInterval(function(){
    var tbody = $('.table_body tr');
    var texts = tbody.text();
    if(texts == "No records to show!"){
      $('.num-record').html('0');
    }else{  
    $('.num-record').html(tbody.length);
    }
  }, 10);
}

$(document).on('change','.record-entries',function(e){
  var filter_text = $( ".record-entries option:selected" ).text();
  if(filter_text == "ALLALL"){
    $('.total-record').hide();
  }else{
    $('.total-record').show();
  }
});

function save_sort(){
    $('.order').each(function(){       
        var orders = $(this).attr("data-order");

        AJAX.update.table("pckg_header_menu");
        AJAX.update.where("id", $(this).attr("data-id"));
        AJAX.update.params("orders", orders);

        AJAX.update.exec(function(result){});
    });
}

$(document).on('click','.btn_status',function(e){
  var status = $(this).attr("data-status");
  var id = "";

  modal.standard(cms_status_message(status), function(result){
      if(result){
          $('.selectall').prop('checked', false);
          $('.select:checked').each(function(index) { 
              id = $(this).attr('data-id');

              AJAX.update.table("pckg_header_menu");
              AJAX.update.where("id", id);
              AJAX.update.params("status", status);
              AJAX.update.params("update_date", moment(new Date()).format('YYYY-MM-DD HH:mm:ss'));

              AJAX.update.exec(function(result){
                var obj = result;
                if (obj.length > 0) {
                  get_data();
                  $('.status_action').hide();
                } else {
                  modal.alert(cms_status_message_dialog(status), function(){ 
                    location.href = content_management + '/site_header_menu';  
                });
                  console.log(obj);
                }
              });
          });
      }

   })
});

//replace all space in array
var replace_in_array = function(str){
  return str.replace(/\s+/g, "_")
}

</script>
