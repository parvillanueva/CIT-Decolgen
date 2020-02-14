 <?php
    $faqs_details = str_replace(base_url(), "", $this->load->details("pckg_faqs_details",1));
    $faqs = $this->load->active_list("pckg_faqs_questions", "status = 1", "id", "asc");
    $banner = str_replace(base_url(), "", $this->load->details("pckg_landing_banner",1));
?> 
       <!-- SECTION 5 -->
        <div class="dc-section" id="faqs">
            <div class="dc-fade-blue dc-noise">
                <div class="dc-container">
                    <div class="text-center">
                        <span class="dc-h3"><?= $faqs_details[0]->faqs_title;?></span>
                        <p class="dc-main-desc"><?= $faqs_details[0]->faqs_description;?></p>
                    </div>
                   <?php
                      $form = "<div class='row dc-faq'>";
                      $form .='<div style="padding: 0px;" class="col-sm-6">' . "\n";
                      $count = 1;
                      $total_count = round(count($faqs) / 2);
                          
                      $faq_count = 1;
                       foreach($faqs as $key=>$f){
                       
                         $form .= '<div class="tr dc-accordion" >
                                      <button type="button" class="dc-faq-question collapsed" data-toggle="collapse" data-target="#faq-'.$faq_count.'" class="td">'; // always open column
                       
                         $form .= $f->question;
                         $form .= '</button><div id="faq-'.$faq_count.'" class="dc-faq-answer collapse">
                                                              <div class="dc-inner">
                                                                  <p>'.$f->answer.'</p>
                                                              </div>
                                            </div></div>' . "\n";
                       
                         if($count == $total_count) {
                              $form .= '</div><div style="padding: 0px;" class="col-sm-6">';

                          }
                         $count++;
                         $faq_count++;
                      }
                       
                      $form .= "\n" . '</div></div>';
                      echo $form;
                      ?>
                </div>
                <span class="dc-asc"><?= $banner[0]->landing_asc;?></span>
            </div>
        </div>

<script type="text/javascript">

    $(".dc-nav-item").click(function() {
        $(".dc-nav-item").removeClass("active");
        $(this).addClass("active");
    });

    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 1000) {
            $('.dc-to-top').fadeIn();
        } else {
            $('.dc-to-top').fadeOut();
        }
    });
</script>