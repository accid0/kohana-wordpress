<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name widgets\kadapter.php
 *@packages Wordpress/Widget/Form
 *@subpackage Widget
 *@category Widget
 *@author Andrew Scherbakov
 *@copyright created  2012 - 06 Jun - 29 Fri
 */?>
 
      
      <p>
        <label for="<?php echo $name_title; ?>"><?php echo $label_title; ?> </label> 
        <input class="widefat" id="<?php echo $id_title; ?>" name="<?php echo $name_title; ?>" type="text" value="<?php echo $value_title; ?>" 
        />
      </p>  
        
      <p>
        <label for="<?php echo $name_request; ?>"><?php echo $label_request; ?> </label> 
        <input class="widefat" id="<?php echo $id_request; ?>" name="<?php echo $name_request; ?>" type="text" value="<?php echo $value_request; ?>" 
        />
      </p>  
  
