<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>MillstoneVapes - News</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">


	</script>
</head>
<body>

	<!-- BANNER -->

	<div>
			<center><img src="Banner.png" alt="MillstoneVapes Banner"/></center>
	</div>

	<!-- BUTTONS -->
	<div align="center">
			<img src="homeButton.png" alt="Home Button" onclick="window.location.href='index.php'"/>
			<img src="productsButton.png" alt="Products Button" onclick="window.location.href='millstoneVapesProducts.php'"/>
			<img src="contactButton.png" alt="Contact Us Button" onclick="window.location.href='millstoneVapesContact.php'"/>
			<img src="newsButton.png" alt="News Button" onclick="window.location.href='millstoneVapesNews.php'"/>
	</div >

	<center><div style="background-color:#258930;width:850px;color:white;font-family:verdana;text-align:left;">
<!-- start feedwind code -->

<div align="center">
<script type="text/javascript" src="http://output58.rssinclude.com/output?type=js&amp;id=1112178&amp;hash=281824adb0f52a1f9f634277208697f6"></script>
           <a class="twitter-timeline"  href="https://twitter.com/hashtag/vaping" data-widget-id="808828637214605312">#vaping Tweets</a>
</div>

<script align="center">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);
js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script>!function getTweets($hash_tag) {

    $url = 'http://search.twitter.com/search.atom?q='.urlencode($hash_tag) ;
    echo "<p>Connecting to <strong>$url</strong> ...</p>";
    $ch = curl_init($url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $xml = curl_exec ($ch);
    curl_close ($ch);

    $affected = 0;
    $twelement = new SimpleXMLElement($xml);
    foreach ($twelement->entry as $entry) {
        $text = trim($entry->title);
        $author = trim($entry->author->name);
        $time = strtotime($entry->published);
        $id = $entry->id;
        echo "<p>Tweet from ".$author.": <strong>".$text."</strong>  <em>Posted ".date('n/j/y g:i a',$time)."</em></p>";
</center>
    }

    return true ;
}

getTweets('#Vaping');
</script>



	</div></center>
</body>
</html>
