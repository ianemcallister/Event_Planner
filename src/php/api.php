<?php

	//assign passed values to the variables
	//$eventNumber = $_POST['eventNumber'];

	
	//declare the models
	$allEvents = array
	(
		'Angelina_and_Francesco' => array
			(
				'title' => 'Angelina & Francesco\'s Wedding',
				'testimonials' => array
				(
					'one' => array
					(
						'copy' => 'We would like to take this time to thank you for all the hard work and dedication you put into our wedding. You\'ve exceeded our expectations for making sure our day went smoothly. I have recommended you to many people for their day of wedding planner. It was a pleasure to work with you and we appreciate all you did. It was a wedding of over 500 people and you didn\'t miss a beat, from your little touches, to your suggestions. It was extremely nice to know we had nothing to worry about during our reception. Our day was amazing and we are glad we choose you to be part of it.',
						'author' => 'Angelina & Francesco Frano'
					),
					'two' => array
					(
						'copy' => 'We would like to take this time to thank you for all the hard work and dedication you put into our wedding. You\'ve exceeded our expectations for making sure our day went smoothly. I have recommended you to many people for their day of wedding planner. It was a pleasure to work with you and we appreciate all you did. It was a wedding of over 500 people and you didn\'t miss a beat, from your little touches, to your suggestions. It was extremely nice to know we had nothing to worry about during our reception. Our day was amazing and we are glad we choose you to be part of it.',
						'author' => 'Angelina & Francesco Frano'
					),
					'three' => array
					(
						'copy' => 'We would like to take this time to thank you for all the hard work and dedication you put into our wedding. You\'ve exceeded our expectations for making sure our day went smoothly. I have recommended you to many people for their day of wedding planner. It was a pleasure to work with you and we appreciate all you did. It was a wedding of over 500 people and you didn\'t miss a beat, from your little touches, to your suggestions. It was extremely nice to know we had nothing to worry about during our reception. Our day was amazing and we are glad we choose you to be part of it.',
						'author' => 'Angelina & Francesco Frano'
					)
				),
				'vendors' => array
				(
					'Reception' => 'Paramount Conference and Event Venue', 
					'Photographer' => 'Dmitri Markine ',
					'Videographer' => 'Goody Cambay',
					'Florist' => 'Gatto Flowers Distributing Inc.',
					'Limousine' => 'Luxury Coach',
					'Entertainment' => 'S4 Sound Sensations',
					'Entertainment' => 'Bongo B ',
					'Entertainment' => 'Zero Gravity Circus Productions ',
					'Decor' => 'Under Wraps Decor',
					'Photobooth' => 'Never Forget Photo'
				),
				'images' => array
				(
					1 => 'src/img/Angelina_and_Francesco/01.jpg',
					2 => 'src/img/Angelina_and_Francesco/thumb_01.jpg',
				)
			),
		'Chelsea_and_Keith' => array
			(
				'title' => 'Chelsea & Keith\'s Wedding',
				'testimonials' => array
				(
					'text' => array
					(
						'copy' => 'Who would have thought that going to visit our hall we would walk out saying \"we need to hire them!\" Seeing the work they did and speaking for only 10 minutes I was very well assured that Serendipity would be a great choice! Hiring Serendipity & Co was the best decision my husband and I made. It gave us a peace of mind that on the day of we would not have to worry about anything except enjoy our wedding! Jessica was amazing from start to finish. Our appointments were very well organized and we left every time reassured that everything will be perfect! Anytime I had a question, Jessica was only one text away. Whether it be an idea I had or a question on how something would look, I got a very professional and honest answer within minutes! The day of our wedding, Jessica and her assistant Natalie did an amazing job with everything! They were very organized and professional throughout the whole night and we got many compliments on their great work. Working with Jessica for a year prior to our wedding she was able to know exactly how we envisioned our wedding to be just by getting to know us. She took our vision and created a hall more beautiful than we could have ever imagined! Thanks to Jessica and Natalie our wedding was truly a dream come true! ',
						'author' => 'Chelsea & Keith DaSilva'
					)
				),
				'vendors' => array
				(
					'Reception' => 'Renaissance by the Creek', 
					'Photographer' => 'Blue Monkey Pictures Inc. ',
					'Videographer' => 'Derek Rucas',
					'Florist' => 'Precious Flowers N\' Things',
					'Limousine' => 'Privately Yours',
					'Entertainment' => 'BB Blanc',
					'Entertainment' => 'Dance Migration',
					'Decor' => 'Elegante Decor  ',
					'Cake' => 'La Crème Cakes',
					'Hair and Make-up' => 'Lore Dana\'s Hair Studio & Spa'
				),
				'images' => array
				(
					1 => 'src/img/Chelsea_and_Keith/01.jpg',
					2 => 'src/img/Chelsea_and_Keith/thumb_01.jpg',
				)
			),
		'Sabrina_and_Felicio' => array
			(
				'title' => 'Sabrina & Felicio\'s Wedding'
			),
		'Morsel_and_James' => array
			(
				'title' => 'Morsel & James\'s Wedding'
			)
	);

	//based on the event passed convert the appropriate object to json and return via echo
	echo json_encode($allEvents);
?>