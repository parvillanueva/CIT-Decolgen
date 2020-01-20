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
                    <th id="rem" style="width: 10px;"><input class ="selectall" type ="checkbox"></th>
                    <th class='th-setter' style="width: 100px;">Product Name</th>
                    <th class='th-setter' style="width: 100px;">Image</th>
                    <th class='th-setter' style="width: 130px;">Description</th>
                    <th class="th-setter" style="width: 140px;">Update Date</th>
                    <th class="th-setter" style="width: 90px;">Status</th>
                    <th id="rem" style="width: 40px; text-align:center;">Action</th>
                </tr>  
            </thead>
            <tbody id="table_body" class="table_body"></tbody>
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
    var sort_table = $('tbody').sortable();

    $('tbody').bind('sortupdate', function(event, ui){
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
   location.href = ('<?= base_url()."content_management/"?>site_no_drowse_products/add');
});

 var limit = 10;
 var offset = 1;

function get_data(keyword){
    modal.loading(true);
    var search_arr = ["no_drowse_image","nd_product_description"];

    AJAX.select.table("pckg_no_drowse_products");
    AJAX.select.select("id, nd_product_name, status, nd_image_banner, nd_product_price, nd_product_pil, nd_product_description, update_date");
    AJAX.select.where.greater_equal("status", 0);
    AJAX.select.offset(offset);
    AJAX.select.limit(limit);
    AJAX.select.order.asc("orders");

    if(keyword)
    {
      AJAX.select.where.like("nd_product_name",keyword);
      AJAX.select.where.or.like("nd_product_description", keyword);
    }
    // ajax get post
    AJAX.select.exec(function(result){
        var obj = result;
        var html = "";
        var status_action = null;
        
        if (obj.length > 0) {
            $.each(obj, function(x,y){
                html += '<tr>';
                html += ' <td class="hide"><p class="order" data-order="" data-id='+y.id+'></p></td>';
                html += ' <td style="background-color:  #c3c3c3;"><span style="color: #fff;" class="move-menu glyphicon glyphicon-th"></span></td>';
                html += ' <td><input class = "select"  data-id="'+y.id+'" type ="checkbox"></td>';
                html += ' <td>' +set_char_limit2(y.nd_product_name)+ '</td>';
                html += ' <td>' +set_char_limit2(y.nd_image_banner)+ '</td>';
                html += ' <td>' +set_char_limit(y.nd_product_description)+ '</td>';
                html += ' <td>' + moment(y.update_date).format('LLL')+ '</td>';
                if(y.status == 1){
                    status = 'Active';
                }else{
                    status = 'Inactive';
                }
                html += '<td>'+status+'</td>';
                html +=" <td class='center-content'><a href='"+content_management+"/site_no_drowse_products/update/"+y.id+"' class='edit' title='edit'><span class='glyphicon glyphicon-pencil'></span></a></td>";
                html += '</tr>';

            });
        }else{
           html += '<tr><td colspan="8" style="text-align: center;"><b>No records to show!</b></td></tr>';
        }
        
        $('.table_body').html(html);
        modal.loading(false); //hide loading
    }, function (obj){
       $('.total-record').html('of '+obj.total_record);
       pagination.generate(obj.total_page, ".list_pagination", limit, 'table_body', 8);
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

function save_sort() {
  $('.order').each(function() {       
    var orders = $(this).attr("data-order");

    AJAX.update.table("pckg_no_drowse_products");
    AJAX.update.where("id", $(this).attr("data-id"));
    AJAX.update.params("orders", orders);

    AJAX.update.exec(function(result){});
  });

}

$(document).on('click','.btn_status',function(e){
  var status = $(this).attr("data-status");
  var id = "";

  modal.confirm("Are you sure you want to Update this record?",function(result){
      if(result){
          $('.selectall').prop('checked', false);
          $('.select:checked').each(function(index) { 
              id = $(this).attr('data-id');

              AJAX.update.table("pckg_no_drowse_products");
              AJAX.update.where("id", id);
              AJAX.update.params("status", status);
              AJAX.update.params("update_date", moment(new Date()).format('YYYY-MM-DD HH:mm:ss'));

              AJAX.update.exec(function(result){
                var obj = result;
                if (obj.length > 0) {
                  get_data();
                
                  $('.status_action').hide();
                } else {
                  modal.alert(update_success, function(){ 
                    location.href = content_management + '/site_no_drowse_products';  
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
