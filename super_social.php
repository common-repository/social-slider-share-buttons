<?php ob_start();
//define all variables the needed alot
//Get The Plugins URL as http://www.yrsite.com/dir/subdir
	$pluginsurl = plugins_url( '', __FILE__ );

/** Start of Load Scripts in Footer of WordPress Theme */
if(!function_exists('my_wp_scripts'))
{
	function my_wp_scripts()
	{ ?>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<?php
	}
}
if (function_exists('add_action')) {
add_action('wp_header', 'my_wp_scripts');
}
/** End of Load Scripts in Footer of WordPress Theme */
?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

</div>
<?php endif; ?>
<div class="shr_ss shr_publisher shareaholic-show-on-load" style="position: fixed;">
<div class="sharediv shareWrapperViewport">
  <div id=circle-mod>
  <div id=container-circle>
    <div id=button-1 class="btnss">
      <div><span><a rel="nofollow" class="external" onclick="window.open(this.href,'super share','toolbar=0,status=0,width=626,height=436'); return false;" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" name="supersharefacebook">fb</a></span></div>
    </div>
    <div id=button-2 class="btnss">
      <div><span><a rel="nofollow" class="external" onclick="window.open(this.href,'super share','toolbar=0,status=0,width=626,height=436'); return false;" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink();?>%2F%23.UGIZB60eHsE.google_plusone_share&t=<?php the_title(); ?>" name="supershareplus1">+1</a></span></div>
    </div>
    <div id=button-3 class="btnss">
      <div><span><a rel="nofollow" class="external" onclick="window.open(this.href,'super share','toolbar=0,status=0,width=626,height=436'); return false;" target="_blank" href="http://twitter.com/home?status=see this+-+<?php the_permalink();?>" name="supersharetwitter">t</a></span></div>
    </div>
    <div id=button-4 class="btnss">
      <div><span><a rel="nofollow" class="external" onclick="window.open(this.href,'super share','toolbar=0,status=0,width=626,height=436'); return false;" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink();?>%2F%23.UGIbi7yAR78.pinterest&media=<?php echo $image[0];?>&description=<?php the_title(); ?>" name="supersharetwitter">pin</a></span></div>
    </div>
    <div id=button-5 class="btnss" >
      <div><span><a href="javascript:addtofavshow();">&hearts;</a></span></div>
    </div>
    <div id=base-button>
      <div><span>share</span></div>
    </div>
  </div>
  </div>
</div>
</div>
<script>
function plusoneshow()
{
document.getElementById('lightbox_content').innerHTML = '<div class="g-plus" data-action="share" data-annotation="bubble" data-height="24">999999</div>';
}
function facebookshow()
{
document.getElementById('lightbox_content').innerHTML = '<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Facebook share button" target="blank">Share on Facebook</a>';
}
function twittershow()
{
document.getElementById('lightbox_content').innerHTML = 'twittershow';
}
function pinterestshow()
{
document.getElementById('lightbox_content').innerHTML = 'pinterestshow';
}
function addtofavshow()
{
	title = "<?php the_title(); ?>"; 
	url = "<?php the_permalink();?>";
	if (window.sidebar) { // Mozilla Firefox Bookmark
		window.sidebar.addPanel(title, url,"");
	} else if( window.external ) { // IE Favorite
		window.external.AddFavorite( url, title); }
	else if(window.opera && window.print) { // Opera Hotlist
		var elem = document.createElement('a');
          elem.setAttribute('href',url);
          elem.setAttribute('title',title);
          elem.setAttribute('rel','sidebar');
          elem.click();
		return true; }
}
</script>

<div onclick="document.getElementById('lightbox').style.display='none';" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.8); display: none;" id="lightbox">
<table style="width:100%; height:100%;">
<tbody><tr>
<td align="center" style="vertical-align:middle;">
<div style="width:500px; background-color:white; border:5px solid black; padding:10px" id="lightbox_content">
<!-- Here we place the like codes by javascript functions -->
</div>
</td>
</tr>
</tbody></table>
</div>

<?php
$out = ob_get_clean();
return $out;
?>