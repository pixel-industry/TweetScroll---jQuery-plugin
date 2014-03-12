TweetScroll jQuery plugin
===========================

TweetScroll is jQuery widget that displays latest tweets from your Twitter account or multiple accounts 
using new oAuth API 1.1. 

Author: Pixel Industry<br />
Website: pixel-industry.com<br />
Licence: GPL<br />
Version: 1.2.4

Wordpress version is available in [Wordpress Plugins Repository](http://wordpress.org/plugins/tweetscroll-widget/).

<h3>Description:<h3>
<p>
TweetScroll is widget that displays latest tweets from your Twitter account or multiple accounts using new 
oAuth API 1.1. This simple widget can be used in any website/blog. Twitter recently shutdown their API 1.0 
and forces usage new API 1.1. Because of that change plugin requires creating Twitter application on Twitter 
Devs which is used for API calls. We made this plugin because of lack of simple plugin with some animation options.</p>

<h3>Installation:</h3>
<p>
Recent updates to Twitter API (API v1.1) requires authentication to fetch Tweets. Please follow the steps below to start using TweetScroll widget:</p>
1. Navigate to Twitter Developers Page using your twitter credentials. 2. Select ‘Create new application’ and enter the application details.
a. The name and description can be anything you like really, but you can’t use ‘Twitter’ in the name.
b. The website field can be your main website and doesn’t have to be the site where your Twitter feed or feeds are located.
c. Callback URL can be left blank.
3. Enter the CAPTCHA info and click create
4. On the next details screen, click ‘create my access token’. You may need to refresh the page after a few seconds if it doesn’t appear automatically.
5. Make a note of the Consumer key, Consumer secret, Access token and Access token secret


Next step is to enter keys in file. Open CleanBIZ/js/twitter/tweets.php file. Enter keys you get from Twitter Developers page:
 consumerkey
 consumersecret
 accesstoken
 accesstokensecret

<h3>HTML STRUCTURE & JQUERY CODE:</h3>
<p>
You can use this widget in any place of your website and in any column size. To use it, 
simply make HTML structure as shown below: </p>
<pre>
<code>
 &#60;article id="tweet-scroll-wrapper" class="clearfix"&#62;
     &#60;div class="tweets-list-container"&#62;&#60;/div&#62;
&#60;/article&#62;
</code>
</pre>

<p>
Include files:
<pre>
<code>
<!-- jQuery -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- TweetScroll Stylesheet -->
<link href="css/tweetscroll.css" media="all" rel="stylesheet" type="text/css"/>

<!-- TweetScroll Script -->
<script src="jquery.tweetscroll.js" type='text/javascript'></script>
</code>
</pre>

Last step is to setup plugin with desired options. Below is script with default options: </p>
<pre>
<code>
/* ================ TWEETS SCROLL ================ 
$('.tweets-list-container').tweetscroll({ 
    limit: 5,
    visible_tweets: 2,
    speed : 600,
    delay: 3000,
    username: 'envatowebdesign',
    time: false,
    replies: false,
    date_format: 'style1',
    animation: 'slide_up',
    url_new_window: false,
    request_url: 'twitter/tweets.php',
    logo: false 
});

</code>
</pre>

<p>CSS Styling</p>
<pre>
.tweets-list-container{
    width: 100%;
    overflow: hidden;
}

.tweet-list {
    position: relative;
    list-style-type: none;
    padding: 0;
}

.tweet-list li {
    padding-bottom: 10px;
}

/* Twitter logo before tweet */

.tweet-list.twitter-logo li {
    background: url('../img/tweet.png') no-repeat;
    padding-left: 40px;
}
</pre>

<p>
There are eight parameter in this plugin which can be changed by your needs.</p>
<ul>
<li>username - your username or list of usernames</li>
<li>time - include time when tweet was published</li>
<li>limit - how many tweets you want to show</li>
<li>replies - set this to true if you want to show "Replay" link</li>
<li>data_format - 'style1' - DD/MM/YYYY or 'style2' - MM/DD/YYYY</li>
<li>position - how you want to show tweets, append or prepend</li>
<li>animation - how you want to animate your tweets. There are four different options: [slide_up, slide_down, fade, false]. False means that tweets won't scroll</li>
<li>visible_tweets - how many tweets you want to be visible in one time</li>
<li>speed - scroll animation speed</li>
<li>delay - time between scrolls</li>
<li>url_new_window - open URLS in new window</li>
<li>request_url- URL to PHP file where request is sent (by default tweets.php)</li>
<li>logo - enable twitter logo to be place before tweet</li>
</ul>
