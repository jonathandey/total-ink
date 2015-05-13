@extends('layouts.master')

@section('content')
	<header>
		<h1>I Launched Something - Beta Release</h1>
		<strong class="text-muted">20/01/2014</strong>
	</header>
	<div id="main">
		<p>For the first time the other day I released my first side project <a href="http://totalink.co.uk" alt="TotalInk">TotalInk</a>. After reading '<a href="http://greig.cc/journal/2014/1/i-never-finish-anyth" alt="I never finish anyth">I never finish anyth</a>' I felt inspired to go back to what I'd started partway through last year and finish it. I always intended it to be a quick project but never got around to finishing it.</p> 
		<p>The whole experience was interesting and this is what happened on that day...</p>
		<p>I finished off writing the last bits of code in the morning, which was a little difficult because of the couple of beers I'd had the night before but I'd set a deadline in my mind and I was sticking to it! I crawled out of bed, grabbed a bacon sandwich and drink then began tapping away at my keyboard. The next task was to test, test and test a little more to make sure it didn't fall down when the initial few tried using it. There may be some bugs but I haven't seen them yet!</p>
		<p>I proceeded to run my script that would email everyone that registered their interest last year and asked my friend <a href="https://twitter.com/StevenBriscoe" alt="Steven">Steven</a> to check for a message, he'd got it, unfortunately however it'd gone in spam, damn. I'll have to be more cautious with this next time. Anyway, this didn’t deter me, I posted a link on <a href="https://news.ycombinator.com/item?id=7080782" alt="Hacker News">Hacker News</a> and <a href="http://www.reddit.com/r/webdev/comments/1vio2m/ive_just_put_my_first_api_in_to_beta_its_built_to/" alt="Reddit">Reddit</a>, then sat back to watch. Not a lot happened. Then someone up-voted my link on HN and that's when things really began!</p>
		<p>I knew there were bots on Twitter for HN that tweeted links but I wasn't aware how many, even though I'd only got 2 points (1 being the automatic one from myself) the bots started tweeting and people started clicking. This is what Twitter looked like when you searched <a href="https://twitter.com/search?q=totalink.co.uk&src=typd&f=realtime" alt="Twitter Search">'totalink.co.uk'</a>.</p>
		<p>{{ HTML::image('img/twitter-search.png', 'Twitter Search', array('class' => 'img-thumbnail img-responsive')) }}</p>
		<p>The real time counter on Google Analytics crept up and my excitement bubbled, I saw the counter reach 31, I know it's not a lot but it's more then I thought I'd ever get.</p>
		<p>{{ HTML::image('img/ga-realtime.png', 'Google Analytics Real Time', array('class' => 'img-thumbnail img-responsive')) }}</p>
		<p>I published my links around 10:00 GMT and as the day faded away (around 18:00 GMT) the counter fell below 5 but throughout the afternoon it never fell below 10 and averaged 20. The total visits for the day stood at 740 (723 unique), most visitors came from the US followed by the UK. A total of 61 countries visited. I may consider in future projects including a translation tool. From these visits I've converted ~10 to registrations, excluding the people who registered their interest last year. So far 0 API requests have been made.</p>
		<p>{{ HTML::image('img/ga-hourly.png', 'Google Analytics Real Time', array('class' => 'img-thumbnail img-responsive')) }}</p>
		<p>{{ HTML::image('img/ga-map.png', 'Google Analytics Real Time', array('class' => 'img-thumbnail img-responsive')) }}</p>
		<p>If you're a <em>tech savy</em> person you'll have noticed the site has been built on <a href="http://getbootstrap.com/" alt="Twitter Bootstrap">Twitter Bootstrap</a>, which I don't think you can beat when you're wanting to put something together very quickly. Twitter Bootstrap 3 was built to be mobile compatible first and the responsive CSS is a godsend! The site fits nicely on most devices, which turned out to be an important factor as 199 visits where from a mobile device and 72 from a tablet, combined that's nearly half the visits. The top 5 mobile devices used to view the site where:
		<ol>
			<li>Apple iPhone</li>
			<li>Apple iPad</li>
			<li>Google Nexus 4</li>
			<li>LG Nexus 5</li>
			<li>Google Nexus 7</li>
		</ol>
		I'll be Twitter Bootstrapping my next project for sure!	
		</p>
		<p>In conclusion I'm glad I persisted and launched, it's a good feeling. Thank you <a href="http://greig.cc/" alt="greig">James Greig</a> for your inspirational words. As I wrap this article up I can safely say that this in itself, is the second thing of this nature I've completed in the last couple of days, so hoary! I'm not going to make any suggestions on what to do for yourself, this is my first time, I wouldn't be the best person to advise. Although if you do have something you're thinking about launching I can guarantee you'll have some fun and learn a little on the way!</p>
		
		<p>- <a href="https://twitter.com/jonathandey" alt="Jonathan">Jonathan</a>
	</div>
@endsection
