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
                    <th id="rem" class="hide"></th>
                    <th id="rem" style="width: 10px;"></th>
                    <th id="rem"><input class ="selectall" type ="checkbox"></th>
                    <th class='th-setter'>Name</th>
                    <th class="th-setter">Update Date</th>
                    <th class="th-setter">Status</th>
                    <th id="rem" style="width: 40px; text-align:center;">Action</th>
                </tr>  
            </thead>
            <tbody class="tbody"></tbody>
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

    get_data();
   // get_pagination();
    $('.selectall').prop('checked', false);

    var sorttable = $('tbody').sortable();
    $('tbody').bind('sortupdate', function(event, ui) {
      var order = 0;

          $('.order').each(function() {  
              order ++;
              $(this).attr("data-order",order);
          });

      save_sort();
   });      
 });

//add user
$(document).on('click', '#btn_add', function(e){
   location.href = ('<?= base_url()."content_management/"?>site_asc_reference_code/add');
});

 var limit = 10;
 var offset = 1;

function get_data(keyword){
    modal.loading(true);
    var search_arr = ["asc_name"];

    AJAX.select.table("pckg_asc_reference_code");
    AJAX.select.select("id, update_date, status, asc_name");
    AJAX.select.offset(offset);
    AJAX.select.limit(limit);
    AJAX.select.order.asc("orders");

    if(keyword)
    {
      AJAX.select.query("(pckg_asc_reference_code.asc_name LIKE '%"+keyword+"%') AND pckg_asc_reference_code.status >= 0");
    }else{
      AJAX.select.where.greater_equal("pckg_asc_reference_code.status", 0);
    }
    // ajax get post
    AJAX.select.exec(function(result){
        var obj = result;
        var htm = "";
        var status_action = null;
        
        if (obj.length > 0) {
          $.each(obj, function(x,y){
            var status = (y.status == 1) ? status = "Active" : status = "Inactive";

            htm += "<tr>";
            htm += "<td class='hide'><p class='order' data-order='' data-id="+y.id+"></p></td>";
            htm += "<td style='background:#c3c3c3;'><span style='color: #fff;' class='move-menu glyphicon glyphicon-th'></span></td>"; 
            htm +=   "<td><input class='select' data-status='"+y.status+"' data-id='"+y.id+"' type='checkbox'></td>";
            htm+="    <td class='center-content' title='"+y.asc_name+"'>"+set_char_limit2(y.asc_name)+"</td>";
            htm+="    <td class='center-content'>"+status+"</td>";    
            htm +=   "<td class='center-content'><a href='<?= base_url()."content_management/"?>site_asc_reference_code/update/"+y.id+"' class='edit' data-status='"+y.status+"' id='"+y.id+"' title='edit'><span class='glyphicon glyphicon-pencil'></span></td>";
            htm += "</tr>";
          });
        } else {
          htm += '<td colspan="6"><center><b>No records to show!</b></center></td>';
        }

        $('.listdata tbody').html(htm);
        modal.loading(false);
    }, function(obj){
        $('.total-record').html('of '+obj.total_record);
        pagination.generate(obj.total_page, ".list_pagination", limit, 'tbody', 6);
    });
  }

function record_number() {
  setInterval(function(){
    var tbody = $('.tbody tr');
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

function save_sort() {
  $('.order').each(function() {       
    var orders = $(this).attr("data-order");

    AJAX.update.table("pckg_asc_reference_code");
    AJAX.update.where("id", $(this).attr("data-id"));
    AJAX.update.params(orders, orders);

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

              AJAX.update.table("pckg_asc_reference_code");
              AJAX.update.where("id", id);
              AJAX.update.params("status", status);
              AJAX.update.params("update_date", moment(new Date()).format('YYYY-MM-DD HH:mm:ss'));

              AJAX.update.exec(function(result){
                //modal.loading(true);
                var obj = result;
                if (obj.length > 0) {
                  get_data();
                  $('.status_action').hide();
                 
                } else {
                  modal.alert(cms_status_message_dialog(status), function(){
                   // modal.loading(false);
                    location.href = content_management + '/site_asc_reference_code';  
                });
                 // console.log(obj);
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
