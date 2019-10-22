<div class="box">
    <?php
        $data['buttons'] = ['add', 'search'];
        $this->load->view("content_management/template/buttons",$data);
    ?>

  <div class="box-body">
    <div class="col-md-12 list-data tbl-content" id="list-data">
         <table class= "table listdata table-striped">
           <thead>
              <tr>
                <th><input class ="selectall" type ="checkbox"></th>
                    <th class='center-content'>Name</th>
                    <th class='center-content'>Username</th>
                    <th class='center-content'>Email Address</th>
                    <th class='center-content'>User Role</th>
                    <th class='center-content'>Status</th>
                    <th class='center-content'>Signup <i class="glyphicon glyphicon-bell"></i> </th>
                    <th class='center-content'>Contact Us <i class="glyphicon glyphicon-bell"></i> </th>
                    <th class='center-content'>Login <i class="glyphicon glyphicon-bell"></i> </th>
                    <th class='center-content'>Edit</th>
                </tr>  
             </thead>
            <tbody></tbody>

         </table>
    </div>
      <div class="list_pagination"> </div>
   </div>
   
</div>

<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var role = '<?=$this->session->userdata("sess_role");?>';
    var content_management = '<?=base_url("content_management");?>';
    var global_controller = '<?=base_url("content_management/global_controller");?>';
    var confirm_update = '<?=$this->standard->confirm("confirm_update");?>';
    var update_success = '<?=$this->standard->dialog("update_success");?>';
    
</script>