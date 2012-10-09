<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kadapter\kohana-options.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 06 Jun - 24 Sun
 */?>
<div class="postbox" id="<?php echo $blockname?>">
	<div class="inside">
	            
      <div class="form-field form-required">    
        <label for="kohana_front_loader"><strong>Your Kohana Front Loader is</strong></label>
        <br/>
        <a href="<?php echo $my_kohana_front?>"><?php echo $my_kohana_front?></a>
	  </div>
	            
      <div class="form-field form-required">    
        <label for="kohana_application_path"><strong>Kohana Application Path</strong></label>
        <br/>
  	  	<input readonly type="text" name = "kohana_application_path" value = "<?php echo $__kohana_application_path?>"/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="kohana_module_path"><strong>Kohana Module Path</strong></label>
        <br/>
  	  	<input readonly type="text" name = "kohana_module_path" value = "<?php echo $__kohana_module_path?>"/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="kohana_system_path"><strong>Kohana System Path</strong></label>
        <br/>
  	  	<input readonly type="text" name = "kohana_system_path" value = "<?php echo $__kohana_system_path?>"/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="kohana_bootstrap_path"><strong>Custom Bootstrap Path</strong></label>
        <br/>
  	  	<input readonly type="text" name = "kohana_bootstrap_path" value = "<?php echo $__kohana_bootstrap_path?>"/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="kohana_ext"><strong>Kohana File Extension</strong></label>
        <br/>
  	  	<input readonly type="text" name = "kohana_ext" value = "<?php echo $__kohana_ext?>"/>
	  </div>        
	  
      <div class="form-field form-required">    
        <label for="kohana_base_url"><strong>Prefix Uris string for Kohana request</strong></label>
        <br/>
        <input type="text" name = "kohana_base_url" value = "<?php echo $__kohana_base_url?>"/>
        <p> If you checked the option 'Process all URIs' than all uri must started from this string</p>
      </div>  
              
      <div class="form-field form-required">    
        <label for="kohana_default_placement"><strong>Default Placement</strong></label>
        <br/>
        <select name="kohana_default_placement">
          <option value="<?php echo Kadapter::ATTR_NONE?>" <?php if( $__kohana_default_placement == Kadapter::ATTR_NONE) echo 'selected="true"'; ?>>None Content</option> 
          <option value="<?php echo Kadapter::ATTR_BEFORE?>" <?php if( $__kohana_default_placement == Kadapter::ATTR_BEFORE) echo 'selected="true"'; ?>>Before Page Content</option> 
          <option value="<?php echo Kadapter::ATTR_AFTER?>" <?php if( $__kohana_default_placement == Kadapter::ATTR_AFTER) echo 'selected="true"'; ?>>After Page Content</option> 
          <option value="<?php echo Kadapter::ATTR_REPLACE?>" <?php if( $__kohana_default_placement == Kadapter::ATTR_REPLACE) echo 'selected="true"'; ?>>Replace Page Content</option> 
        </select>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="kohana_modules"><strong>Kohana Modules</strong></label>
        <br/>
  	  	<input readonly type="text" name = "kohana_modules" value = "<?php echo $__kohana_modules?>"/>
        <p>Enter a comma seperated list of Kohana modules that are referenced by your application</p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="kohana_default_controller"><strong>Kohana Default Controller</strong></label>
        <br/>
  	  	<input required type="text" name = "kohana_default_controller" value = "<?php echo $__kohana_default_controller?>"/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="kohana_default_action"><strong>Kohana Default Action</strong></label>
        <br/>
  	  	<input required type="text" name = "kohana_default_action" value = "<?php echo $__kohana_default_action?>"/>
	  </div> 
         
      <div class="form-field form-required">    
        <label for="kohana_default_action"><strong>Kohana Default ID**</strong></label>
        <br/>
        <input required type="text" name = "kohana_default_id" value = "<?php echo $__kohana_default_id?>"/>
      </div>        
	            
      <div class="form-field form-required">    
        <label for="kohana_front_loader_in_nav"><strong>Include Kohana Front Loader in Wordpress Navigation</strong></label>
        <br/>
  	  	<input type="checkbox" name = "kohana_front_loader_in_nav" value = "1" <?php if ($__kohana_front_loader_in_nav) echo 'checked';?>/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="kohana_process_all_uri"><strong>Process all URIs</strong></label>
        <br/>
  	  	<input type="checkbox" name = "kohana_process_all_uri" value = "1" <?php if ($__kohana_process_all_uri) echo 'checked';?>/>
	  </div>        
	  		
	</div>
<?php foreach( $__submits as $submit):?>
<p class="submit"><input type="submit" class="block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>" value="<?php echo $submit?>" name="do"
/></p>
<?php endforeach;?>
</div>