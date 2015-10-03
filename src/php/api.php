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
					array
					(
						'copy' => 'We would like to take this time to thank you for all the hard work and dedication you put into our wedding. You\'ve exceeded our expectations for making sure our day went smoothly. I have recommended you to many people for their day of wedding planner. It was a pleasure to work with you and we appreciate all you did. It was a wedding of over 500 people and you didn\'t miss a beat, from your little touches, to your suggestions. It was extremely nice to know we had nothing to worry about during our reception. Our day was amazing and we are glad we choose you to be part of it.',
						'author' => 'Angelina & Francesco Frano'
					)
				),
				'vendors' => array
				(
					array
					(
						'type' => 'Reception',
						'name' => 'Paramount Conference and Event Venue'
					),
					array
					(
						'type' => 'Photographer',
						'name' => 'Dmitri Markine '
					),
					array
					(
						'type' => 'Videographer',
						'name' => 'Goody Cambay'
					),
					array
					(
						'type' => 'Florist',
						'name' => 'Gatto Flowers Distributing Inc.'
					),
					array
					(
						'type' => 'Limousine',
						'name' => 'Luxury Coach'
					),
					array
					(
						'type' => 'Entertainment',
						'name' => 'S4 Sound Sensations'
					),
					array
					(
						'type' => 'Entertainment',
						'name' => 'Bongo B'
					),
					array
					(
						'type' => 'Entertainment',
						'name' => 'Zero Gravity Circus Productions '
					),
					array
					(
						'type' => 'Decor',
						'name' => 'Under Wraps Decor'
					),
					array
					(
						'type' => 'Photobooth',
						'name' => 'Never Forget Photo'
					)
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
					array
					(
						'copy' => 'Who would have thought that going to visit our hall we would walk out saying "we need to hire them!" Seeing the work they did and speaking for only 10 minutes I was very well assured that Serendipity would be a great choice! Hiring Serendipity & Co was the best decision my husband and I made. It gave us a peace of mind that on the day of we would not have to worry about anything except enjoy our wedding! Jessica was amazing from start to finish. Our appointments were very well organized and we left every time reassured that everything will be perfect! Anytime I had a question, Jessica was only one text away. Whether it be an idea I had or a question on how something would look, I got a very professional and honest answer within minutes! The day of our wedding, Jessica and her assistant Natalie did an amazing job with everything! They were very organized and professional throughout the whole night and we got many compliments on their great work. Working with Jessica for a year prior to our wedding she was able to know exactly how we envisioned our wedding to be just by getting to know us. She took our vision and created a hall more beautiful than we could have ever imagined! Thanks to Jessica and Natalie our wedding was truly a dream come true! ',
						'author' => 'Chelsea & Keith DaSilva'
					)
				),
				'vendors' => array
				(
					array
					(
						'type' => 'Reception',
						'name' => 'Renaissance by the Creek'
					),
					array
					(
						'type' => 'Photographer',
						'name' => 'Blue Monkey Pictures Inc. '
					),
					array
					(
						'type' => 'Videographer',
						'name' => 'Derek Rucas'
					),
					array
					(
						'type' => 'Florist',
						'name' => "Precious Flowers N' Things"
					),
					array
					(
						'type' => 'Limousine',
						'name' => 'Privately Yours'
					),
					array
					(
						'type' => 'Entertainment',
						'name' => 'BB Blanc'
					),
					array
					(
						'type' => 'Entertainment',
						'name' => 'Dance Migration'
					),
					array
					(
						'type' => 'Decor',
						'name' => 'Elegante Decor'
					),
					array
					(
						'type' => 'Cake',
						'name' => 'La Crème Cakes'
					),
					array
					(
						'type' => 'Hair and Make-up',
						'name' => "Lore Dana's Hair Studio & Spa"
					)
				),
				'images' => array
				(
					1 => 'src/img/Chelsea_and_Keith/01.jpg',
					2 => 'src/img/Chelsea_and_Keith/thumb_01.jpg',
				)
			),
		'Sabrina_and_Felicio' => array
			(
				'title' => 'Sabrina & Felicio\'s Wedding',
				'testimonials' => array
				(
					array
					(
						'copy' => 'This past July marked one year that I married my husband. It was a long process of planning and preparations, but it was totally worth it, especially hiring a wedding planner. Jessica Cabral did not only coordinate my wedding, but she was there for every step I needed to get through the planning process. Everything from theme ideas, vendors, colours, décor, budget control, stationary, and just having someone to talk to, she had everything under control. She guided me on great ideas for the centerpieces, came with me to purchase the centerpieces and décor items for the reception, organized them to be all set up ready to go in the hall. She would come to every vendor appointment and was great with her ideas and specialties.',
						'author' => 'Sabrina Medeiros'
					)
				),
				'vendors' => array
				(
					array
					(
						'type' => 'Reception',
						'name' => 'Portuguese Cultural Centre of Mississauga'
					),
					array
					(
						'type' => 'Photo and Video',
						'name' => 'Digital Dreams Productions'
					),
					array
					(
						'type' => 'Florist',
						'name' => 'Exotic Flowers & Gifts'
					),
					array
					(
						'type' => 'Limousine',
						'name' => 'L.A. Limousines'
					),
					array
					(
						'type' => 'Entertainment',
						'name' => 'Dynamix Sound Solutions'
					),
					array
					(
						'type' => 'Decor',
						'name' => "Vivian's Decor & Designs"
					),
					array
					(
						'type' => 'Cake',
						'name' => "Diana's Dream Cakes"
					)
				),
				'images' => array
				(
					1 => 'src/img/Sabrina_and_Felicio/01.jpg',
					2 => 'src/img/Sabrina_and_Felicio/thumb_01.jpg',
				)
			),
		'Morsel_and_James' => array
			(
				'title' => 'Morsel & James\'s Wedding',
				'testimonials' => array
				(
					array
					(
						'copy' => "Jessica and the team at Serendipity & Co. Inc. we're amazing with the planning and execution of our wedding. She went above and beyond our expectations and I could not have done it without her. Thanks to her we had great vendors and didn't have to worry because Jessica was 10 steps ahead! We love you guys and gave me the wedding of my dreams and kept me on budget! Thanks for putting up with James and I for 2.5 years!",
						'author' => 'Morsel & James Rhodes'
					)
				),
				'vendors' => array
				(
					array
					(
						'type' => 'Reception',
						'name' => 'Presedante Banquet Hall'
					),
					array
					(
						'type' => 'Photographer',
						'name' => 'Chris Liehmann'
					),
					array
					(
						'type' => 'Florist',
						'name' => "Flowers N' Things"
					),
					array
					(
						'type' => 'Limousine',
						'name' => 'Enchanted Limo '
					),
					array
					(
						'type' => 'Entertainment',
						'name' => 'Good Vibrations'
					),
					array
					(
						'type' => 'Decor',
						'name' => "Posh Styling's Inc."
					),
					array
					(
						'type' => 'Cake',
						'name' => 'Karen Totten'
					),
					array
					(
						'type' => 'Officiate',
						'name' => 'Jonathan Gallo'
					),
					array
					(
						'type' => 'Musicians',
						'name' => 'Alexandar Gajic'
					),
					array
					(
						'type' => 'Photobooth',
						'name' => 'Never Forget Photo'
					)
				),
				'images' => array
				(
					1 => 'src/img/Sabrina_and_Felicio/01.jpg',
					2 => 'src/img/Sabrina_and_Felicio/thumb_01.jpg',
				)
			)
	);

	//based on the event passed convert the appropriate object to json and return via echo
	echo json_encode($allEvents);
?>