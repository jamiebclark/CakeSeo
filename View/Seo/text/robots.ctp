<?php
// ~/app/views/seo/text/robots.ctp  
?>
User-agent: *  
<?php  
foreach ($disallowUrls as $url) {
	echo 'Disallow: '.$url."\n";  
}