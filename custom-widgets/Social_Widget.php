<?php
/**
 * Social Widget class.
 *
 * @package framework
 */

class Social_Widget extends WP_Widget{
     
	/**
	 * Construct.
	 */
	function Social_Widget(){

        $widget_ops = array(
            'classname'=>'social_networks',
            'description' => __('Widget for social networks buttons','framework')
            );
        $control_ops = array(
            'width' => 300,
            'height' => 350,
            'id_base' => 'social-widget'
        );
        $this->WP_Widget('social-widget', __('Social Widget( by Zdravko Lukic)','framework'),$widget_ops,$control_ops);
    }

    function widget($args,$instance){
                
                $title = apply_filters('widget_title',$instance['title']);
                $facebook = $instance['facebook'];
                $twitter = $instance['twitter'];
                $google = $instance['google'];
                $linked = $instance['linked'];
                $instagram = $instance['instagram'];
                $flickr = $instance['flickr'];
                $pinterest = $instance['pinterest'];
                $tumblr = $instance['tumblr'];
                $dribbble = $instance['dribbble'];
                $rss = $instance['rss'];
                $youtube = $instance['youtube'];
                $vimeo = $instance['vimeo'];
  
                $facebook_profile = '<a class="fb-like" href="'.$facebook.'"><div class="fb-icon-bg"></div><div class="fb-bg"></div></a>';
                $twitter_profile = '<a class="tweet-like" href="'.$twitter.'"><div class="twi-icon-bg"></div><div class="twi-bg"></div></a>';
                $google_profile = '<a class="gplus-like" href="'.$google.'"><div class="g-icon-bg"></div><div class="g-bg"></div></a>';
                $linked_profile = '<a class="linked-like" href="'.$linked.'"><div class="linked-icon-bg"></div><div class="linked-bg"></div></a>';
                $instagram_profile = '<a class="instagram-like" href="'.$instagram.'"><div class="insta-icon-bg"></div><div class="insta-bg"></div></a>';
                $flickr_profile = '<a class="flickr-like" href="'.$flickr.'"><div class="flickr-icon-bg"></div><div class="flickr-bg"></div></a>';
                $pinterest_profile = '<a class="pinterest-like" href="'.$pinterest.'"><div class="pint-icon-bg"></div><div class="pint-bg"></div></a>';
                $tumblr_profile = '<a class="tumblr-like" href="'.$tumblr.'"><div class="tumblr-icon-bg"></div><div class="tumblr-bg"></div></a>';
                $dribbble_profile = '<a class="dribbble-like" href="'.$dribbble.'"><div class="dribbble-icon-bg"></div><div class="dribbble-bg"></div></a>';
                $rss_profile = '<a class="rss-like" href="'.$rss.'"><div class="rss-icon-bg"></div><div class="rss-bg"></div></a>';
                $youtube_profile = '<a class="youtube-like" href="'.$youtube.'"><div class="youtube-icon-bg"></div><div class="youtube-bg"></div></a>';
                $vimeo_profile = '<a class="vimeo-like" href="'.$vimeo.'"><div class="vimeo-icon-bg"></div><div class="vimeo-bg"></div></a>';
                
                echo $args['before_widget'];
                if(!empty($title)){
                    echo $args['before_title'] . $title . $args['after_title']; 
                }
                echo '<div id="social-icons" style="width: 320px; height: 160px">';
                echo (!empty($facebook)) ? $facebook_profile : null;
                echo (!empty($twitter)) ? $twitter_profile : null;
                echo (!empty($google)) ? $google_profile : null;
                echo (!empty($linked)) ? $linked_profile : null;
                echo (!empty($instagram)) ? $instagram_profile : null;
                echo (!empty($flickr)) ? $flickr_profile : null;
                echo (!empty($pinterest)) ? $pinterest_profile : null;
                echo (!empty($tumblr)) ? $tumblr_profile : null;
                echo (!empty($dribbble)) ? $dribbble_profile : null;
                echo (!empty($rss)) ? $rss_profile : null;
                echo (!empty($youtube)) ? $youtube_profile : null;
                echo (!empty($vimeo)) ? $vimeo_profile : null;
                echo '</div>';
                echo $args['after_widget'];
            }
            
            function update($new_instance, $old_instance){
                $instance = array();
                $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
                $instance['facebook'] = (!empty($new_instance['facebook'])) ? strip_tags($new_instance['facebook']) : '';
                $instance['twitter'] = (!empty($new_instance['twitter'])) ? strip_tags($new_instance['twitter']) : '';
                $instance['google'] = (!empty($new_instance['google'])) ? strip_tags($new_instance['google']) : '';
                $instance['linked'] = (!empty($new_instance['linked'])) ? strip_tags($new_instance['linked']) : '';
                $instance['instagram'] = (!empty($new_instance['instagram'])) ? strip_tags($new_instance['instagram']) : '';
                $instance['flickr'] = (!empty($new_instance['flickr'])) ? strip_tags($new_instance['flickr']) : '';
                $instance['pinterest'] = (!empty($new_instance['pinterest'])) ? strip_tags($new_instance['pinterest']) : '';
                $instance['tumblr'] = (!empty($new_instance['tumblr'])) ? strip_tags($new_instance['tumblr']) : '';
                $instance['dribbble'] = (!empty($new_instance['dribbble'])) ? strip_tags($new_instance['dribbble']) : '';
                $instance['rss'] = (!empty($new_instance['rss'])) ? strip_tags($new_instance['rss']) : '';
                $instance['youtube'] = (!empty($new_instance['youtube'])) ? strip_tags($new_instance['youtube']) : '';
                $instance['vimeo'] = (!empty($new_instance['vimeo'])) ? strip_tags($new_instance['vimeo']) : '';
                
                return $instance;
            }
            
            function form($instance){
                 


                isset($instance['title']) ? $title = $instance['title'] : null;
                empty($instance['title']) ? $title = 'Social Profile' : null;
                
                //social options
                $facebook = isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
                $twitter = isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
                $google = isset($instance['google']) ? $google = $instance['google'] : null;
                $linked = isset($instance['linked']) ? $linked = $instance['linked'] : null;
                $instagram = isset($instance['instagram']) ? $instagram = $instance['instagram'] : null;
                $flickr = isset($instance['flickr']) ? $flickr = $instance['flickr'] : null;
                $pinterest = isset($instance['pinterest']) ? $pinterest = $instance['pinterest'] : null;
                $tumblr = isset($instance['tumblr']) ? $tumblr = $instance['tumblr'] : null;
                $dribbble = isset($instance['dribbble']) ? $dribbble = $instance['dribbble'] : null;
                $rss = isset($instance['rss']) ? $rss = $instance['rss'] : null;
                $youtube = isset($instance['youtube']) ? $youtube = $instance['youtube'] : null;
                $vimeo = isset($instance['vimeo']) ? $vimeo = $instance['vimeo'] : null;
                ?>
                <p>
                    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google Plus:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('linked'); ?>"><?php _e('Linkedin:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('linked'); ?>" name="<?php echo $this->get_field_name('linked'); ?>" type="text" value="<?php echo esc_attr($linked); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo esc_attr($instagram); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e('Flickr:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php echo esc_attr($flickr); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('tumblr'); ?>"><?php _e('Tumblr:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('dribbble'); ?>"><?php _e('Dribbble:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('dribbble'); ?>" name="<?php echo $this->get_field_name('dribbble'); ?>" type="text" value="<?php echo esc_attr($dribbble); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('rss'); ?>"><?php _e('Rss:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php echo esc_attr($rss); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>">
                </p>
                <p>
                    <label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e('Vimeo:'); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" type="text" value="<?php echo esc_attr($vimeo); ?>">
                </p>
           <?php }

}