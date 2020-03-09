<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="VerkkoNet Developer Training - Demo">
<meta name="author" content="Sam Solomon Prabu | VerkkoNet">
<link rel="icon" href="https://www.verkkonet.com/blog/wp-content/uploads/2017/08/verkkonet_logo.png" sizes="32x32" />
<link rel="icon" href="https://www.verkkonet.com/blog/wp-content/uploads/2017/08/verkkonet_logo.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.verkkonet.com/blog/wp-content/uploads/2017/08/verkkonet_logo.png" />
<meta name="msapplication-TileImage" content="http://www.verkkonet.com/blog/wp-content/uploads/2017/08/verkkonet_logo.png" />
<title>Countdown Clock in JS - Demo</title>
<script type="888264f85fb98aa34f4a89ee-text/javascript" src="blockadblock.js"></script>
<style type="text/css">
	    #freezeLayer {
	        position: fixed;
	        top: 0;
	        left: 0;
	        width: 100%;
	        height: 100vh;
	        background: #fff;
	        
	        display: flex;
	        align-items: center;
	        justify-content: center;
	        font-size: 20px;
	    }
	    #freezeLayer.msg{
	        width: 900px;
            margin-bottom: 30px;
            padding: 20px 10px;
            background: #D30000;
            text-align: center;
            font-weight: bold;
            color: #fff;
            border-radius: 5px;
            height: 200px;
            flex-direction: column;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
	    }
	</style>
</head>
<body>
<div id="freezeLayer">Loading...</div>
<div id="container">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="888264f85fb98aa34f4a89ee-text/javascript"></script>
<ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-7904480779756074" data-ad-slot="4236341022"></ins>
<script type="888264f85fb98aa34f4a89ee-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<iframe id="mainContent" frameborder=0 width="100%" height="550" src="demo/javascript/2/"></iframe>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="888264f85fb98aa34f4a89ee-text/javascript"></script>
<h2>Support VerkkoNet by your PayPal donations.</h2>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="donate.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="888264f85fb98aa34f4a89ee-text/javascript"></script>
<ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-7904480779756074" data-ad-slot="5436053538"></ins>
<script type="888264f85fb98aa34f4a89ee-text/javascript">
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script type="888264f85fb98aa34f4a89ee-text/javascript">
 ready(function() {
    
    // Function called if AdBlock is not detected
    function adBlockNotDetected() {
    	document.getElementById('freezeLayer').style.display = 'none';
    }
    
    // Function called if AdBlock is detected
    function adBlockDetected() {
        var f = document.getElementById('freezeLayer');
        f.classList.add('msg');
        f.innerHTML='<p>Our website is made possible by displaying online advertisements to our visitors.</p><p>Please consider supporting us by disabling your ad blocker.</p>';
    	document.getElementById('container').innerHTML = '';
    }
    
    // Recommended audit because AdBlock lock the file 'blockadblock.js' 
    // If the file is not called, the variable does not exist 'blockAdBlock'
    // This means that AdBlock is present
    if(typeof blockAdBlock === 'undefined') {
    	adBlockDetected();
    } else {
    	blockAdBlock.onDetected(adBlockDetected);
    	blockAdBlock.onNotDetected(adBlockNotDetected);
    	// and|or
    	blockAdBlock.on(true, adBlockDetected);
    	blockAdBlock.on(false, adBlockNotDetected);
    	// and|or
    	blockAdBlock.on(true, adBlockDetected).onNotDetected(adBlockNotDetected);
    }
}, false);
 
</script>

<script type="888264f85fb98aa34f4a89ee-text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5be92d7970ff5a5a3a71ba56/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-93486751-1" type="888264f85fb98aa34f4a89ee-text/javascript"></script>
<script type="888264f85fb98aa34f4a89ee-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-93486751-1');
</script>
</div>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="888264f85fb98aa34f4a89ee-|49" defer=""></script></body>
</html>