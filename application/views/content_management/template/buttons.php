
<div class="box-header with-border">
<?php 
	
	if(isset($buttons)){
		foreach ($buttons as $key => $value) {
			switch ($value) {
				case 'add':
					echo '<a href="#" id="btn_add" class="btn_add btn-sm btn btn-default cms-btn" ><span class="fa fa fa-plus "></span> Add</a>';
					break;
				
				case 'update':
					echo '<a href="#" id="btn_update" class="btn_update btn-sm btn btn-default cms-btn" ><span class="fa fa-floppy-o"></span> Update </a>';
					break;

				case 'save':
					echo '<a href="#" id="btn_save" class="btn_save btn-sm btn btn-default cms-btn"  ><span class="fa fa fa-floppy-o"></span> Save </a>';
					break;

				case 'close':
					echo '<a href="#" id="btn_close" class="btn_close btn-sm btn btn-default cms-btn" ><span class="fa fa fa-close"></span> Close </a>';
					break;

				case 'cancel':
					echo '<a href="#" id="btn_cancel" class="btn_cancel btn-sm btn btn-default cms-btn" ><span class="fa fa fa-times-circle"></span> Cancel </a>';
					break;

                case 'delete':
                    echo '<a href="#" id="btn_delete" class="btn_delete btn-sm btn btn-default cms-btn" ><span class="fa fa-trash"></span> Delete </a>';
                    break;

				case 'sitemap':
					echo '<a href="#" id="btn_sitemap" path="" class="btn_sitemap btn-sm btn btn-default cms-btn"  ><span class="fa fa fa-map"></span> Generate Sitemap </a>';
					break;

				case 'reset':
					echo '<a href="#" id="btn_reset" path="" class="btn_reset btn-sm btn btn-default pull-right cms-btn"  ><span class="fa fa fa-refresh"></span> Reset </a>';
					break;

                case 'status':
                    echo '<select class="status pull-right"  title="status">
                            <option class="textholder"  selected disabled>STATUS</option>
                            <option value="1">Active</option>
                            <option value="">Inactive</option>
                        </select>';
                         
                    break;

				case 'search':
					echo '<div id="form_search" class="form-search form-horizontal pull-right">
							<div class="form-group has-feedback ">
						        <input type="text" class="form-control search-query" id="search_query" placeholder="Search.."  >
						        <span class="glyphicon glyphicon-search form-control-feedback"></span>
						      </div>
						</div>';
					break;

				case 'export':
                      echo '<a href="#" id="btn_export" class="btn_export btn-sm btn btn-default cms-btn" ><span class="fas fa-file-export"></span> Export </a>';
                      break;

                case 'date_range':
                      echo '<div class="form-group drange">
	                            <input type="text" class="range-date start-date form-control" placeholder="Date From" style="width: 95px;"  >
	                            <input type="text" class="range-date end-date form-control" placeholder="Date To" style="width: 95px;"   disabled>
	                            <button type="button" id="btn_filter" class="btn btn-default btn-filter btn-sm cms-btn"  ><i class="fa fa-filter"></i> Filter</button>
	                            <a href="#" path="" id="btn_reset" class="btn_reset btn-sm btn btn-default col-bday-4 cms-btn" ><span class="fa fa fa-refresh"></span> Reset </a>
                            </div>';
                      break;
                      
               case 'category':
                  echo '<a href="#" id="btn_category" class="btn_category btn-sm btn btn-default cms-btn"><span class="fa fa fa-plus "></span> Category</a>';
                  break;

                case 'fetch':
					echo '<a href="#" id="btn_fetch" class="btn_fetch btn-sm btn btn-default cms-btn" ><span class="fa fa fa-refresh"></span> Fetch </a>';
					break;
					
				default:
					# code...
					break;
			}
		}
	}

?>

<a href="#" data-status=1  class="status_action btn_status btn-sm btn btn-default cms-btn"><span class="fa fa-check"></span> Publish </a>
<a href="#" data-status=0 class="status_action btn_status btn-sm btn btn-default cms-btn" ><span class="fa fa-ban"></span> Unpublish </a>
<a href="#" data-status=-2 class="status_action btn_status btn-sm btn btn-default cms-btn btn_trash" ><span class="fa fa-trash"></span> Trash </a>
</div>

<style type="text/css">
	.drange{
	    display: inline-block;
	    position: relative;
	}

	.form-search{
		display: inline-block;
	    position: fixed;
	    right:2em;
	}

	.range-date.start-date {
	    width: 90px;
	    display: inline-block;
		height: 31px;
		border-radius: 7px;
	}

	.range-date.end-date {
	    width: 90px;
	    display: inline-block;
	    height: 31px;
		border-radius: 7px;
	}

	.menu-tips{
		padding: 10px;
		font-size: 13px;
		width: 260px;
		background: #fff;
		color: #444;
		font-family: 'Montserrat';
		text-align: center;
	}

	.menu-tips {
	  	top: 100%;
	}

	.menu-tips::before {
		content: " ";
		position: absolute;
		border-width: 10px;
		border-style: solid;
	}

	.menu-tips::before {
	    bottom: 100%;
	    border-color: transparent transparent white transparent;
	}

	.cms-btn{
		width: 90px;
	}

	.btn-filter, .btn_reset{
		margin-bottom: 4px;
	}

	.input-group-glue {
		width: 0;
		display: table-cell;
	}

	.input-group-glue + .form-control {
		border-left: none;
	}

	.btn_sitemap{
		width: 130px;
	}

    .form-horizontal .has-feedback .form-control-feedback {
        right: 5px;
        top: -2px;
    }


</style>

<script type="text/javascript">

	<?php 
        $url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

        $urls = explode('/', $escaped_url);
        array_pop($urls);
    ?>

    var implode_urls = '<?= implode("/", $urls);?>';

</script>

<script type="text/javascript" src="<?=base_url();?>cms/js/cms/template/buttons.js"></script>
