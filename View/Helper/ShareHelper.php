<?php 
/**
 * A helper for adding html around the template tags
 */
class ShareHelper extends AppHelper {
	
	public $initialized = false;
			
	public function __construct($options = array()) {
		if (!empty($options)) {
			$this->options = array_merge($this->options, $options);
		}
		$this->helpers['TagCallback'] = $this->htmlOut();
		$this->initialized = true;
	}
	
	
	public function htmlOut() {
		
		return array('afterTag' => '<iframe src="http://www.facebook.com/plugins/like.php?href='.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'&amp;send=false&amp;layout=standard&amp;width=325&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=24" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:325px; height:24px;" allowTransparency="true"></iframe><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>');

	}
}
?>