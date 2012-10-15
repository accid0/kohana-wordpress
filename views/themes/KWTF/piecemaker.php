<Piecemaker>
  <Contents>
<?php
    require_once 'mimetype.php';
		foreach( $slides as $id => $slide ) :
			                                                  
			$image_id = $slide['image_id'];      
			$image_url = $slide['image_url'];     
			$image_title = stripslashes( $slide['slide_title'] ); 
			$content = wpautop( stripslashes( $slide['tooltip_content'] ) );
			$content = str_replace( "\n", '', $content );
			$title = $core->string_( '<h1>', $image_title, '</h1>', false );
			//$the_image_ = wp_get_attachment_metadata( $image_id );
			
			//$finfo = new finfo(FILEINFO_MIME_TYPE);
			$mime_type = $mimetype->getType( $image_url );
			//finfo_close($finfo);
			
			$core->links_sliders( $link, $link_url, $slide );
			
			if( preg_match( '/image\/(.*)/', $mime_type ) )
			{ 
			    echo "    <Image Source=\"$image_url\" Title=\"$image_title\">";
          $core->string_( "\n" . '      <Text>' . $title, $content, '</Text>' . "\n    " );
			    if( $link ) echo "  <Hyperlink URL=\"$link_url\" Target=\"_blank\" />\n    ";
			    echo "</Image>\n";
		    } 
			
			if( $mime_type == 'application/x-shockwave-flash' )
			{
			   	echo "    <Flash Source=\"$image_url\" Title=\"$image_title\">
      <Image Source=\"".get_template_directory_uri()."/images/flash-preview.png\" />
  </Flash>\n";
		    }                        
			
			if( preg_match( '/video\/(.*)/', $mime_type ) )
			{
			    //echo "  <Video Source=\"$image_url\" Title=\"$image_title\" Width=\"$the_image_[width]\" Height=\"$the_image_[height]\" Autoplay=\"true\">
			    echo "  <Video Source=\"$image_url\" Title=\"$image_title\" Autoplay=\"true\">
    <Image Source=\"".get_template_directory_uri()."/images/video-preview.jpg\" />
  </Video>\n";
		    } 
		    
    	endforeach;
  	echo "  </Contents>\n";
  


  $core->string_( '  <Settings ', implode( ' ', $settings ), '></Settings>' );
	

             
  echo "\n  <Transitions>\n";
  echo "    <Transition " . implode( ' ', $transitions ) . "></Transition>\n";
  echo "  </Transitions>\n";
echo "</Piecemaker>";
?>         