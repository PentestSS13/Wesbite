<?php 
    // Connection settings:
     
    $servers = Array();
     
    /*
    Example: (copy paste this to somewhere AFTER the comment and fill with your own information)
    If you have multiple servers, list them one after the other. Change the id to the server name used on the indexpage etc. tho.
     
    "address" and "port": is the ip or url you use to connect: Normally you see
    byond://123.123.123.123:56372. The 123.123.123.123 part is the address, the 56372
    part is the port. Fill with your own information, obviously. If you use an url
    and you connect to something like byond://game.mysite.com:1234, then
    game.mysite.com is the address and 1234 the port
    "servername": is just a string that gets written on the image. Can be
    pretty much anything
     
    //My Server
    $servers['ftl13'] = Array();
    $servers['ftl13']["address"] = "192.168.0.100";
    $servers['ftl13']["port"] = 56372;
    $servers['ftl13']["servername"] = "SS13: My Server";
     
    */
     
    //Copy paste the code above to after this line
	//Pentest
    $servers["1"] = Array();
    $servers["1"]['address'] = 'us.pentest.com.co';
    $servers["1"]['port'] = 1337;
    $servers["1"]['servername'] = 'Pentest [US-East]';

	//Pentest again because it hates me
    $servers["2"] = Array();
    $servers["2"]['address'] = 'us.pentest.com.co';
    $servers["2"]['port'] = 1337;
    $servers["2"]['servername'] = 'Pentest [US-East]';

?>
