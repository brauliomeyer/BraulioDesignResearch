<?php

// REQUIRED
// Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
date_default_timezone_set('Europe/Amsterdam'); 
// Include the store hours class
require('StoreHours.class.php');

// REQUIRED
// Define daily open hours
// Must be in 24-hour format, separated by dash 
// If closed for the day, leave blank (ex. sunday)
// If open multiple times in one day, enter time ranges separated by a comma
  $hours = array(
	  'mon' => array('09:00-18:00'),
	  'tue' => array('09:00-18:00'),
	  'wed' => array('09:00-18:00'), 
	  'thu' => array('09:00-18:00'), // Open late
	  'fri' => array('09:00-18:00'),
	  'sat' => array('09:00-18:00'),
	  'sun' => array('') // Closed all day
	);

  // OPTIONAL
  // Add exceptions (great for holidays etc.)
  // MUST be in format month/day
  // Do not include the year if the exception repeats annually
  $exceptions = array(
    '12/05' => array('09:00-15:00'),
    '12/24' => array(''),
    '12/25' => array(''),
    '12/26' => array(''),      
    //'10/18' => array('11:00-16:00', '18:00-20:30')
  );

  // OPTIONAL
  // Place HTML for output below. This is what will show in the browser.
  // Use {%hours%} shortcode to add dynamic times to your open or closed message.
  $template = array(
    'open' => "<h3>Yes, we're open!" ."<br/>". " Today's hours are {%hours%}.</h3>",
    'closed' => "<h3>Sorry, we're closed. Today's hours are {%hours%}.</h3>",
    'closed_all_day' => "<h3>Sorry, we're closed today.</h3>",
    'separator' => " - ",
    'join' => " and ",
    'format' => "g:ia", // options listed here: http://php.net/manual/en/function.date.php
    'hours' => "{%open%}{%separator%}{%closed%}"
  );

  // Instantiate class and call render method to output content
	$store_hours = new StoreHours($hours, $exceptions, $template);
	$store_hours->render();
	?>
	
	</body>
	
</html>