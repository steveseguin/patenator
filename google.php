<html>
<head>
<title>Google ScreenSaver</title>
<meta name="description" content="Google Search, but enhanced with a screensaver.  Takes effect after 15-seconds of idle use. Protect your privacy, save power and prolong the life of your display. " />
<meta name="keywords" content="Google Search, Google, Search, privacy, screen saver, screensaver, black, timeout, sleep, power, savings, protection" />
<link rel="icon" type="image/ico" href="../wask/favicon2.ico">

<script language=javascript>

  document.onmousemove = fnTimeOut;
  document.onmousedown = fnTimeOut;
  document.onkeydown = fnTimeOut;
  document.onmousedown = fnTimeOut;

  var t = null;
  var r = null;
  var s = null;
  var f = new Number (0);
  var ff = new Number (0);
  function hidediv()
  {
	 clearTimeout ( s );
	 document.getElementById("divid").style.width="0px";
	 s = setTimeout('opendiv()', 5000 );
  }

  function opendiv()
  {
         document.getElementById("divid").style.width="100%";
  }

  function fade()
  {
	if (f>1){clearInterval ( r );}
	f=f+0.01
	ff=f*100;
	document.getElementById("divid").style.opacity = f.toString();
	if (navigator.appName.indexOf("Microsoft")!= -1 && parseInt(navigator.appVersion)>=4)
        { document.getElementById("divid").filters.alpha.opacity = ff.toString();}


  }

  function fnAlert()
  {
      r = setInterval('fade()',20);
  }

  function fnTimeOut()
  {
      hidediv();
      f=0;
      clearTimeout( t );
      clearInterval( r );
      document.getElementById("divid").style.opacity = "0";
        if (navigator.appName.indexOf("Microsoft")!= -1 && parseInt(navigator.appVersion)>=4)
        { document.getElementById("divid").filters.alpha.opacity ="0";}
      t = setTimeout( fnAlert, 15000 );
  }

</script>
<style type="text/css">
html {
height:100%
}
body {
margin:0;
height:100%;
overflow:hidden
}
</style>
</head>

<body onload="fnTimeOut();">
<div id="divid" name="divid" style="background-color:black; filter:alpha(opacity=0); opacity:0; position:absolute; width:100%; height:100%; top:0px; left:0px; z-index:5;"></div>
<iframe allowtransparency=true frameborder=0 id=rf sandbox="allow-same-origin allow-forms allow-scripts" scrolling=auto src="http://google.com" style="width:100%;height:100%"></iframe>
</body>
</html>
