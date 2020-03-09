<html><head>
     <title>Primer Script de JavaScript</title>
    <script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://partner.googleadservices.com/gampad/cookie.js?domain=oscaruhp.github.io&amp;callback=_gfp_s_&amp;client=ca-pub-4331617637495482"></script><script src="https://pagead2.googlesyndication.com/pagead/js/r20200303/r20190131/show_ads_impl.js" id="google_shimpl"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/timer.jquery.min.js"></script>
   <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="preload" href="https://adservice.google.com.mx/adsid/integrator.js?domain=oscaruhp.github.io" as="script"><script type="text/javascript" src="https://adservice.google.com.mx/adsid/integrator.js?domain=oscaruhp.github.io"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=oscaruhp.github.io" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=oscaruhp.github.io"></script></head>
    <body>
        <div class="container-fluid">
           
                
        <div class="jumbotron col-md-4 ">
            
            <h1 id="timerDiv">00:00:00</h1>
        </div>
                
                <div class="row continer">
                    <div class="col-md-4 col-md-offset-4 ">
                        
            <samp class="col-md-4">
                Hora
            <input class="form-control" type="number" id="h" value="0" min="0" max="60">
            </samp>
            <samp class="col-md-4">
                Minutos
            <input class="form-control" type="number" value="1" min="0" max="60" id="m">
            </samp>
            <samp class="col-md-4">
                Segundos
            <input class="form-control" type="number" min="0" max="60" value="60" id="s">
            </samp>
                  <div class="col-md-12">
                   <br>   
                  <button type="button" class="btn btn-success btn-lg btn-block" onclick="empezar()">Empezar</button>
                      </div>  
                       
            </div>
            </div>
      
                <br>
                <br>
                <div class="col-md-12 text-center">
	
		<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Header -->
<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-4331617637495482" data-ad-slot="2764029251" data-adsbygoogle-status="done"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent;"><ins id="aswift_0_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent;"><iframe width="728" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0px;width:728px;height:90px;"></iframe></ins></ins></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
                </div>
       </div>
        
<script>
audio = new Audio("sound/alarma.mp3"); 
function empezar(){
   audio.pause();
   audio.currentTime = 0;
  $('#timerDiv').timer('remove');
  $('#timerDiv').timer({
    countdown: true,
    duration: $('#h').val()+"h"+$('#m').val()+"m"+$('#s').val()+'s',     
    callback: function() {  
        audio.addEventListener('ended', function() {
    this.currentTime = 0;
    this.play();
}, false);
        audio.play();
    },
    format: '%H:%M:%S'  
});
    }
</script>
	    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-74824848-1', 'auto');
  ga('send', 'pageview');
</script>

	    
    

<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><ins id="aswift_1_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0px;width:0px;height:0px;"></iframe></ins></ins></ins><iframe id="google_osd_static_frame_1034974231347" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe
></body><iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20200303/r20190131/zrt_lookup.html#" data-ad-client="ca-pub-4331617637495482" style="display: none;"></iframe></html>