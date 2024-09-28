<?php $basic_anatomy = $this->options; ?>

<form method="post" action="<?php echo esc_url(admin_url('/')); ?>admin.php?page=basic-anatomy">
<div id="anatomy-admin">

  <div id="anatomy-header">
    <p class="anatomy-shortcode"><?php esc_html_e( 'Insert this shortcode ', 'basic-anatomy' ); ?><input type="text" value="[basic_anatomy]" readonly> <?php esc_html_e( 'in any page or post to display the figure.', 'basic-anatomy' ); ?> &nbsp; | &nbsp; <span class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php esc_html_e( 'Save Changes', 'basic-anatomy' ); ?>"></span></p>
  </div>

  <div id="anatomy-preview">
    <?php include 'anatomy.php'; ?>
  </div>

  <div class="anatomy-settings areas-settings">
    <div class="box-header individ-i"><?php esc_html_e( 'Settings', 'basic-anatomy' ); ?></div>
    <div class="box-body">

      <div class="anatomy-area"><p class="area-name"><?php esc_html_e( 'HEAD', 'basic-anatomy' ); ?></p>
        <span class="chkbx"><input type="checkbox" name="enbl_1" value="1" <?php if (isset($basic_anatomy['enbl_1']) && $basic_anatomy['enbl_1'] == '1'){ echo esc_attr(" checked"); } ?>>&nbsp;<?php esc_html_e( 'Active', 'basic-anatomy' ); ?></span>
        <div class="inner-content">
          <div class="area-url">
            <p class="link"><label><?php esc_html_e( 'Link', 'basic-anatomy' ); ?></label><input type="text" name="url_1" value="<?php echo esc_url($basic_anatomy['url_1']); ?>" /></p>
            <p><label><?php esc_html_e( 'Target', 'basic-anatomy' ); ?></label>
              <select name="turl_1">
                <option value="_self" <?php if ($basic_anatomy['turl_1'] == '_self'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Same Page', 'basic-anatomy' ); ?></option>
                <option value="_blank" <?php if ($basic_anatomy['turl_1'] == '_blank'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'New Page', 'basic-anatomy' ); ?></option>
                <option value="none" <?php if ($basic_anatomy['turl_1'] == 'none'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Modal / None', 'basic-anatomy' ); ?></option>
              </select>
            </p>
          </div>
          <div class="info"><p><textarea rows="3" name="info_1"><?php echo esc_textarea($basic_anatomy['info_1']); ?></textarea></p></div>
        </div>
      </div>

      <div class="anatomy-area"><p class="area-name"><?php esc_html_e( 'NECK', 'basic-anatomy' ); ?></p>
        <span class="chkbx"><input type="checkbox" name="enbl_2" value="1" <?php if (isset($basic_anatomy['enbl_2']) && $basic_anatomy['enbl_2'] == '1'){ echo esc_attr(" checked"); } ?>>&nbsp;<?php esc_html_e( 'Active', 'basic-anatomy' ); ?></span>
        <div class="inner-content">
          <div class="area-url">
            <p class="link"><label><?php esc_html_e( 'Link', 'basic-anatomy' ); ?></label><input type="text" name="url_2" value="<?php echo esc_url($basic_anatomy['url_2']); ?>" /></p>
            <p><label><?php esc_html_e( 'Target', 'basic-anatomy' ); ?></label>
              <select name="turl_2">
                <option value="_self" <?php if ($basic_anatomy['turl_2'] == '_self'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Same Page', 'basic-anatomy' ); ?></option>
                <option value="_blank" <?php if ($basic_anatomy['turl_2'] == '_blank'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'New Page', 'basic-anatomy' ); ?></option>
                <option value="none" <?php if ($basic_anatomy['turl_2'] == 'none'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Modal / None', 'basic-anatomy' ); ?></option>
              </select>
            </p>
          </div>
          <div class="info"><p><textarea rows="3" name="info_2"><?php echo esc_textarea($basic_anatomy['info_2']); ?></textarea></p></div>
        </div>
      </div>

      <div class="anatomy-area"><p class="area-name"><?php esc_html_e( 'CHEST', 'basic-anatomy' ); ?></p>
        <span class="chkbx"><input type="checkbox" name="enbl_3" value="1" <?php if (isset($basic_anatomy['enbl_3']) && $basic_anatomy['enbl_3'] == '1'){ echo esc_attr(" checked"); } ?>>&nbsp;<?php esc_html_e( 'Active', 'basic-anatomy' ); ?></span>
        <div class="inner-content">
          <div class="area-url">
            <p class="link"><label><?php esc_html_e( 'Link', 'basic-anatomy' ); ?></label><input type="text" name="url_3" value="<?php echo esc_url($basic_anatomy['url_3']); ?>" /></p>
            <p><label><?php esc_html_e( 'Target', 'basic-anatomy' ); ?></label>
              <select name="turl_3">
                <option value="_self" <?php if ($basic_anatomy['turl_3'] == '_self'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Same Page', 'basic-anatomy' ); ?></option>
                <option value="_blank" <?php if ($basic_anatomy['turl_3'] == '_blank'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'New Page', 'basic-anatomy' ); ?></option>
                <option value="none" <?php if ($basic_anatomy['turl_3'] == 'none'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Modal / None', 'basic-anatomy' ); ?></option>
              </select>
            </p>
          </div>
          <div class="info"><p><textarea rows="3" name="info_3"><?php echo esc_textarea($basic_anatomy['info_3']); ?></textarea></p></div>
        </div>
      </div>

      <div class="anatomy-area"><p class="area-name"><?php esc_html_e( 'ABDOMEN', 'basic-anatomy' ); ?></p>
        <span class="chkbx"><input type="checkbox" name="enbl_4" value="1" <?php if (isset($basic_anatomy['enbl_4']) && $basic_anatomy['enbl_4'] == '1'){ echo esc_attr(" checked"); } ?>>&nbsp;<?php esc_html_e( 'Active', 'basic-anatomy' ); ?></span>
        <div class="inner-content">
          <div class="area-url">
            <p class="link"><label><?php esc_html_e( 'Link', 'basic-anatomy' ); ?></label><input type="text" name="url_4" value="<?php echo esc_url($basic_anatomy['url_4']); ?>" /></p>
            <p><label><?php esc_html_e( 'Target', 'basic-anatomy' ); ?></label>
              <select name="turl_4">
                <option value="_self" <?php if ($basic_anatomy['turl_4'] == '_self'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Same Page', 'basic-anatomy' ); ?></option>
                <option value="_blank" <?php if ($basic_anatomy['turl_4'] == '_blank'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'New Page', 'basic-anatomy' ); ?></option>
                <option value="none" <?php if ($basic_anatomy['turl_4'] == 'none'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Modal / None', 'basic-anatomy' ); ?></option>
              </select>
            </p>
          </div>
          <div class="info"><p><textarea rows="3" name="info_4"><?php echo esc_textarea($basic_anatomy['info_4']); ?></textarea></p></div>
        </div>
      </div>

      <div class="anatomy-area"><p class="area-name"><?php esc_html_e( 'PELVIS', 'basic-anatomy' ); ?></p>
        <span class="chkbx"><input type="checkbox" name="enbl_5" value="1" <?php if (isset($basic_anatomy['enbl_5']) && $basic_anatomy['enbl_5'] == '1'){ echo esc_attr(" checked"); } ?>>&nbsp;<?php esc_html_e( 'Active', 'basic-anatomy' ); ?></span>
        <div class="inner-content">
          <div class="area-url">
            <p class="link"><label><?php esc_html_e( 'Link', 'basic-anatomy' ); ?></label><input type="text" name="url_5" value="<?php echo esc_url($basic_anatomy['url_5']); ?>" /></p>
            <p><label><?php esc_html_e( 'Target', 'basic-anatomy' ); ?></label>
              <select name="turl_5">
                <option value="_self" <?php if ($basic_anatomy['turl_5'] == '_self'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Same Page', 'basic-anatomy' ); ?></option>
                <option value="_blank" <?php if ($basic_anatomy['turl_5'] == '_blank'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'New Page', 'basic-anatomy' ); ?></option>
                <option value="none" <?php if ($basic_anatomy['turl_5'] == 'none'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Modal / None', 'basic-anatomy' ); ?></option>
              </select>
            </p>
          </div>
          <div class="info"><p><textarea rows="3" name="info_5"><?php echo esc_textarea($basic_anatomy['info_5']); ?></textarea></p></div>
        </div>
      </div>

      <div class="anatomy-area"><p class="area-name"><?php esc_html_e( 'ARM [RT]', 'basic-anatomy' ); ?></p>
        <span class="chkbx"><input type="checkbox" name="enbl_6" value="1" <?php if (isset($basic_anatomy['enbl_6']) && $basic_anatomy['enbl_6'] == '1'){ echo esc_attr(" checked"); } ?>>&nbsp;<?php esc_html_e( 'Active', 'basic-anatomy' ); ?></span>
        <div class="inner-content">
          <div class="area-url">
            <p class="link"><label><?php esc_html_e( 'Link', 'basic-anatomy' ); ?></label><input type="text" name="url_6" value="<?php echo esc_url($basic_anatomy['url_6']); ?>" /></p>
            <p><label><?php esc_html_e( 'Target', 'basic-anatomy' ); ?></label>
              <select name="turl_6">
                <option value="_self" <?php if ($basic_anatomy['turl_6'] == '_self'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Same Page', 'basic-anatomy' ); ?></option>
                <option value="_blank" <?php if ($basic_anatomy['turl_6'] == '_blank'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'New Page', 'basic-anatomy' ); ?></option>
                <option value="none" <?php if ($basic_anatomy['turl_6'] == 'none'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Modal / None', 'basic-anatomy' ); ?></option>
              </select>
            </p>
          </div>
          <div class="info"><p><textarea rows="3" name="info_6"><?php echo esc_textarea($basic_anatomy['info_6']); ?></textarea></p></div>
        </div>
      </div>

      <div class="anatomy-area"><p class="area-name"><?php esc_html_e( 'ARM [LT]', 'basic-anatomy' ); ?></p>
        <span class="chkbx"><input type="checkbox" name="enbl_7" value="1" <?php if (isset($basic_anatomy['enbl_7']) && $basic_anatomy['enbl_7'] == '1'){ echo esc_attr(" checked"); } ?>>&nbsp;<?php esc_html_e( 'Active', 'basic-anatomy' ); ?></span>
        <div class="inner-content">
          <div class="area-url">
            <p class="link"><label><?php esc_html_e( 'Link', 'basic-anatomy' ); ?></label><input type="text" name="url_7" value="<?php echo esc_url($basic_anatomy['url_7']); ?>" /></p>
            <p><label><?php esc_html_e( 'Target', 'basic-anatomy' ); ?></label>
              <select name="turl_7">
                <option value="_self" <?php if ($basic_anatomy['turl_7'] == '_self'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Same Page', 'basic-anatomy' ); ?></option>
                <option value="_blank" <?php if ($basic_anatomy['turl_7'] == '_blank'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'New Page', 'basic-anatomy' ); ?></option>
                <option value="none" <?php if ($basic_anatomy['turl_7'] == 'none'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Modal / None', 'basic-anatomy' ); ?></option>
              </select>
            </p>
          </div>
          <div class="info"><p><textarea rows="3" name="info_7"><?php echo esc_textarea($basic_anatomy['info_7']); ?></textarea></p></div>
        </div>
      </div>

      <div class="anatomy-area"><p class="area-name"><?php esc_html_e( 'LEG [RT]', 'basic-anatomy' ); ?></p>
        <span class="chkbx"><input type="checkbox" name="enbl_8" value="1" <?php if (isset($basic_anatomy['enbl_8']) && $basic_anatomy['enbl_8'] == '1'){ echo esc_attr(" checked"); } ?>>&nbsp;<?php esc_html_e( 'Active', 'basic-anatomy' ); ?></span>
        <div class="inner-content">
          <div class="area-url">
            <p class="link"><label><?php esc_html_e( 'Link', 'basic-anatomy' ); ?></label><input type="text" name="url_8" value="<?php echo esc_url($basic_anatomy['url_8']); ?>" /></p>
            <p><label><?php esc_html_e( 'Target', 'basic-anatomy' ); ?></label>
              <select name="turl_8">
                <option value="_self" <?php if ($basic_anatomy['turl_8'] == '_self'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Same Page', 'basic-anatomy' ); ?></option>
                <option value="_blank" <?php if ($basic_anatomy['turl_8'] == '_blank'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'New Page', 'basic-anatomy' ); ?></option>
                <option value="none" <?php if ($basic_anatomy['turl_8'] == 'none'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Modal / None', 'basic-anatomy' ); ?></option>
              </select>
            </p>
          </div>
          <div class="info"><p><textarea rows="3" name="info_8"><?php echo esc_textarea($basic_anatomy['info_8']); ?></textarea></p></div>
        </div>
      </div>

      <div class="anatomy-area"><p class="area-name"><?php esc_html_e( 'LEG [LT]', 'basic-anatomy' ); ?></p>
        <span class="chkbx"><input type="checkbox" name="enbl_9" value="1" <?php if (isset($basic_anatomy['enbl_9']) && $basic_anatomy['enbl_9'] == '1'){ echo esc_attr(" checked"); } ?>>&nbsp;<?php esc_html_e( 'Active', 'basic-anatomy' ); ?></span>
        <div class="inner-content">
          <div class="area-url">
            <p class="link"><label><?php esc_html_e( 'Link', 'basic-anatomy' ); ?></label><input type="text" name="url_9" value="<?php echo esc_url($basic_anatomy['url_9']); ?>" /></p>
            <p><label><?php esc_html_e( 'Target', 'basic-anatomy' ); ?></label>
              <select name="turl_9">
                <option value="_self" <?php if ($basic_anatomy['turl_9'] == '_self'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Same Page', 'basic-anatomy' ); ?></option>
                <option value="_blank" <?php if ($basic_anatomy['turl_9'] == '_blank'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'New Page', 'basic-anatomy' ); ?></option>
                <option value="none" <?php if ($basic_anatomy['turl_9'] == 'none'){ echo esc_attr("selected"); } ?>><?php esc_html_e( 'Modal / None', 'basic-anatomy' ); ?></option>
              </select>
            </p>
          </div>
          <div class="info"><p><textarea rows="3" name="info_9"><?php echo esc_textarea($basic_anatomy['info_9']); ?></textarea></p></div>
        </div>
      </div>

    </div><!-- box-body / for areas -->
  </div><!-- anatomy-settings / for areas -->

  <input type="hidden" name="basic_anatomy">
  <?php
  settings_fields(__FILE__);
  do_settings_sections(__FILE__);
  ?>

  <p class="restore-default-btn">
    <input type="submit" name="restore_default" class="button" value="<?php esc_html_e( 'Restore Default', 'basic-anatomy' ); ?>">
  </p>
  <div class="scroll-top"><span class="scroll-top-icon"></span></div>
  <script>
    jQuery(function(){jQuery(document).on( 'scroll', function(){ if (jQuery(window).scrollTop() > 100) {jQuery('.scroll-top').addClass('show');} else {jQuery('.scroll-top').removeClass('show');}});jQuery('.scroll-top').on('click', scrollToTop);});function scrollToTop() {verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;element = jQuery('body');offset = element.offset();offsetTop = offset.top -32;jQuery('html, body').animate({scrollTop: offsetTop}, 500, 'linear');}
  </script>
</div><!-- anatomy-admin -->
</form>
