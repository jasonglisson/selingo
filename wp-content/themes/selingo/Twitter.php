<?php	
	
	$token = '204508339-LY12yiaKm9tVix6jZkjHItJvIXz0gOihKisoausj';
	$token_secret = 'jUiSn8PoEr2pKSTbyg4kRwnGPNIMyCHMjv7VufyOTAoWC';
	$consumer_key = 'zdx1ThGYDAVjz2399agvjG15e';
	$consumer_secret = 'NTESItOhi4HvZPDfxutb3JzgeO61Y8bL8zQCub82XN2dTGw402';
	
	$host = 'api.twitter.com';
	$method = 'GET';
	$path = '/1.1/statuses/user_timeline.json'; // api call path
	
	$query = array( // query parameters
	    'screen_name' => 'jselingo',
	    'count' => '3'
	);
	
	$oauth = array(
	    'oauth_consumer_key' => $consumer_key,
	    'oauth_token' => $token,
	    'oauth_nonce' => (string)mt_rand(), // a stronger nonce is recommended
	    'oauth_timestamp' => time(),
	    'oauth_signature_method' => 'HMAC-SHA1',
	    'oauth_version' => '1.0'
	);
	
	$oauth = array_map("rawurlencode", $oauth); // must be encoded before sorting
	$query = array_map("rawurlencode", $query);
	
	$arr = array_merge($oauth, $query); // combine the values THEN sort
	
	asort($arr); // secondary sort (value)
	ksort($arr); // primary sort (key)
	
	// http_build_query automatically encodes, but our parameters
	// are already encoded, and must be by this point, so we undo
	// the encoding step
	$querystring = urldecode(http_build_query($arr, '', '&'));
	
	$url = "https://$host$path";
	
	// mash everything together for the text to hash
	$base_string = $method."&".rawurlencode($url)."&".rawurlencode($querystring);
	
	// same with the key
	$key = rawurlencode($consumer_secret)."&".rawurlencode($token_secret);
	
	// generate the hash
	$signature = rawurlencode(base64_encode(hash_hmac('sha1', $base_string, $key, true)));
	
	// this time we're using a normal GET query, and we're only encoding the query params
	// (without the oauth params)
	$url .= "?".http_build_query($query);
	
	$oauth['oauth_signature'] = $signature; // don't want to abandon all that work!
	ksort($oauth); // probably not necessary, but twitter's demo does it
	
	// also not necessary, but twitter's demo does this too
	function add_quotes($str) { return '"'.$str.'"'; }
	$oauth = array_map("add_quotes", $oauth);
	
	// this is the full value of the Authorization line
	$auth = "OAuth " . urldecode(http_build_query($oauth, '', ', '));
	
	// if you're doing post, you need to skip the GET building above
	// and instead supply query parameters to CURLOPT_POSTFIELDS
	$options = array( CURLOPT_HTTPHEADER => array("Authorization: $auth"),
	                  //CURLOPT_POSTFIELDS => $postfields,
	                  CURLOPT_HEADER => false,
	                  CURLOPT_URL => $url,
	                  CURLOPT_RETURNTRANSFER => true,
	                  CURLOPT_SSL_VERIFYPEER => false);
	
	// do our business
	$feed = curl_init();
	curl_setopt_array($feed, $options);
	$json = curl_exec($feed);
	curl_close($feed);
	
	$twitter_data = json_decode($json);
	
	function linkify_tweet($twitter_data) {
	
		//Convert urls to <a> links
		$twitter_data = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a target=\"_blank\" href=\"$1\">$1</a>", $twitter_data);
		
		//Convert hashtags to twitter searches in <a> links
		$twitter_data = preg_replace("/#([A-Za-z0-9\/\.]*)/", "<a target=\"_new\" href=\"http://twitter.com/search?q=$1\">#$1</a>", $twitter_data);
		
		//Convert attags to twitter profiles in <a> links
		$twitter_data = preg_replace("/@([A-Za-z0-9\/\.]*)/", "<a target=\"_blank\" href=\"http://www.twitter.com/$1\">@$1</a>", $twitter_data);
		
		return $twitter_data;

	}
	
/* 	print_r($twitter_data); */
?>	