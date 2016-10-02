<?php header("X-Clacks-Overhead: GNU Terry Pratchett"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif' rel='stylesheet' type='text/css' />
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="styles/master.css" />
    <!-- ICONS -->
    <link rel="apple-touch-icon" href="images/icon.png"/>
    <link rel="icon" type="image/png" href="graphics/myself-tiny.png" />
    <title>
      Viktor Seč
    </title>
    <!-- GOOGLE ANALYTICS -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-26642593-2']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $("li.mail").hover(function(){
          $("body").css("background-color", "#FF8800");
          $("div#site").css("background-color", "#FF8800");
          $('img.avatar').attr('src', '/graphics/myself-mail.png');
        });
        $("li.linkedin").hover(function(){
          $("body").css("background-color", "#4875B4");
          $("div#site").css("background-color", "#4875B4");
          $('img.avatar').attr('src', '/graphics/myself-linkedin.png');
        });
        $("li.facebook").hover(function(){
          $("body").css("background-color", "#3B5998");
          $("div#site").css("background-color", "#3B5998");
          $('img.avatar').attr('src', '/graphics/myself-twitter.png');
        });
        $("li.youtube").hover(function(){
          $("body").css("background-color", "#FF3333");
          $("div#site").css("background-color", "#FF3333");
          $('img.avatar').attr('src', '/graphics/myself-vimeo.png');
        });
        $("li.vimeo").hover(function(){
          $("body").css("background-color", "#aad450");
          $("div#site").css("background-color", "#aad450");
          $('img.avatar').attr('src', '/graphics/myself-vimeo.png');
        });
        $("li.tumblr").hover(function(){
          $("body").css("background-color", "#2B4964");
          $("div#site").css("background-color", "#2B4964");
          $('img.avatar').attr('src', '/graphics/myself-tumblr.png');
        });
        $("li.twitter").hover(function(){
          $("body").css("background-color", "#33CCFF");
          $("div#site").css("background-color", "#33CCFF");
          $('img.avatar').attr('src', '/graphics/myself-twitter.png');
        });
        $("li.spotify").hover(function(){
          $("body").css("background-color", "#81b71a");
          $("div#site").css("background-color", "#81b71a");
          $('img.avatar').attr('src', '/graphics/myself-spotify.png');
        });
        $("li.lastfm").hover(function(){
          $("body").css("background-color", "#D01F3C");
          $("div#site").css("background-color", "#D01F3C");
          $('img.avatar').attr('src', '/graphics/myself-lastfm.png');
        });
        $("li.goodreads").hover(function(){
          $("body").css("background-color", "rgb(51, 36, 20)");
          $("div#site").css("background-color", "rgb(51, 36, 20)");
          $('img.avatar').attr('src', '/graphics/myself-goodreads.png');
        });
        $("li.instagram").hover(function(){
          $("body").css("background-color", "#517fa4");
          $("div#site").css("background-color", "#517fa4");
          $('img.avatar').attr('src', '/graphics/myself-instagram.png');
        });
        $("li.geocaching").hover(function(){
          $("body").css("background-color", "rgb(123, 88, 56)");
          $("div#site").css("background-color", "rgb(123, 88, 56)");
          $('img.avatar').attr('src', '/graphics/myself-geocaching.png');
        });
        $("li.reddit").hover(function(){
          $("body").css("background-color", "#ff8b60");
          $("div#site").css("background-color", "#ff8b60");
          $('img.avatar').attr('src', '/graphics/myself-reddit.png');
        });
        $("li.steam").hover(function(){
          $("body").css("background-color", "rgb(19, 21, 27)");
          $("div#site").css("background-color", "rgb(19, 21, 27)");
          $('img.avatar').attr('src', '/graphics/myself-steam.png');
        });
        $("li.cucumbertown").hover(function(){
          $("body").css("background-color", "rgb(251, 43, 96)");
          $("div#site").css("background-color", "rgb(251, 43, 96)");
          $('img.avatar').attr('src', '/graphics/myself-cucumbertown.png');
        });
        $("li.oldprojects").hover(function(){
          $("body").css("background-color", "rgb(68, 46, 40)");
          $("div#site").css("background-color", "rgb(68, 46, 40)");
          $('img.avatar').attr('src', '/graphics/myself-oldprojects.png');
        });
        $("li.netiketa").hover(function(){
          $("body").css("background-color", "#730C82");
          $("div#site").css("background-color", "#730C82");
          $('img.avatar').attr('src', '/graphics/myself-netiketa.png');
        });

        $('img.avatar').hover(function () {
          this.src = '/graphics/myself.png';
        });
      });
    </script>
  </head>
  <body>
    <div id="site">
      <div class="mainframe">
        <div id="header">
					<div class="flex">
						<img class="avatar" src="graphics/myself.png" width="128" height="128" alt="Viktor Sec's avatar" />
						<h1>Hi, I'm Viktor Seč</h1>
					</div>
					<p class="bio">
						Software Engineer at&nbsp;<a href="https://vacuumlabs.com/">Vacuumlabs</a>,<br />
						Cognitive Science Master's Student at&nbsp;<a href="http://fmph.uniba.sk/">Comenius University</a>,
						Maker & Lector at&nbsp;<a href="http://lab.cafe/">Lab</a>
					</p>
				</div>
        <div id="list">
      <ul>
		    <li class="mail">
			    <a href="mailto:hey@viktorsec.com">hey@viktorsec.com</a>
		    </li>
        <li class="linkedin">
          <a href="https://sk.linkedin.com/in/yorulis">LinkedIn</a>
        </li>
        <li class="facebook">
          <a href="http://facebook.com/yorulis">Facebook</a>
        </li>
        <li class="youtube">
          <a href="http://youtube.com/YregYorulis">YouTube</a>
        </li>
        <li class="vimeo">
          <a href="https://vimeo.com/yreg">Vimeo</a>
        </li>
        <li class="tumblr">
          <a href="http://blog.viktorsec.com/">tumblr</a>
        </li>
        <li class="twitter">
          <a href="http://twitter.com/yorulis">Twitter</a>
        </li>
        <li class="spotify">
          <a href="https://open.spotify.com/user/yorulis">Spotify</a>
        </li>
        <li class="lastfm">
          <a href="http://www.last.fm/user/Yreg">last.fm</a>
        </li>
        <li class="goodreads">
          <a href="https://www.goodreads.com/yreg">goodreads</a>
        </li>
        <li class="instagram">
          <a href="https://www.instagram.com/vividpeanut/">Instagram</a>
        </li>
        <li class="geocaching">
          <a href="http://www.geocaching.com/seek/nearest.aspx?ul=yregyorulis">Geocaching</a>
        </li>
        <li class="reddit">
          <a href="https://www.reddit.com/user/yreg">reddit</a>
        </li>
        <li class="steam">
          <a href="http://steamcommunity.com/id/yreg/">Steam</a>
        </li>
        <li class="cucumbertown">
          <a href="http://yreg.cucumbertown.com/">Cucumbertown</a>
        </li>
        <li class="oldprojects">
          <a href="http://yreg.me/hi.php">old projects</a>
        </li>
        <li class="netiketa">
          <a href="http://netiketa.yreg.me/home.php">Netiketa</a>
        </li>
      </ul>
        </div>
      </div> <!-- /mainframe -->
    </div><!-- /site -->
	<div id="site-bank">
    <div class="mainframe">
      <ul>
        <li>
          IBAN: SK69 1100 0000 0026 1946 1176
        </li>
        <li>
          Bitcoin: 1YregghjnUei789Gtxw8bEN4LyJifV8nK
        </li>
        <li>
          PayPal: <a href="https://www.paypal.com/sk/webapps/mpp/send-money-online">viktor.sec@gmail.com</a>
        </li>
		<li>
		  <p class="small">ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAgQC3B5pl7Ge8UWj9aaiJESGxwIIUhqQO4sGMnydSofh7vx/SzxF0Q+WRg0UoQ2KMcaiTnPul6WqT53V5c3sIH/fURa0VF8WTjOEm5d2Hm06YgLem0NNPIe2IXxuObAsAQ4+csANmXD7ht5Fz10Jtdo2kHSbWAIeFAI7OFfgBXNLRwQ== Viktor_Sec</p>
		</li>
      </ul>
    </div>
	</div>
  </body>
</html>
