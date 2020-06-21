<?php
namespace SeanMorris\CanWorms;
class InstructionsView extends \SeanMorris\Theme\View
{
	public function index($router)
	{
		return 'Welcome to CanWorms.';
	}
}

__halt_compiler();?>

<pre class = "hero">

<u>Generating your 🌎🐟 is easy:</u>

* Covert mode links will show an image.
* Error mode links will show a fake error message.

<u>To generate a covert link:</u>

1. Enter your subdomain in the first field.

2. Enter the link you'd like to turn into a 🌎🐟.

3. Press Submit, and send the FIRST URL to your target.

4. Unmask the dickhead by using the SECOND URL to monitor your hits.

   You'll see a list of IPs that have recently requested the
   current URL in the folowing form. Most recent entries will
   be on top.

   {
       ip: "XX.XXX.XX.XX",
       url: "...",
       time: 1590000000000,
       human: "Mon Jun 15 2020 23:52:52 GMT+0000 (Coordinated Universal Time)"
   }

5. Find out where he lives:

   Take the IP from the previous step (XX.XXX.XX.XX) and plug it into
   one of the following tools:

	https://tools.keycdn.com/geo
	https://www.ip2location.com/
	https://ipgeolocation.io/
</pre>
