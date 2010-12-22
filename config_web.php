<?php
	//This is a configuration file that is not tracked by git. The difference is that
	//there is a different configuration file locally and on the web.
	
	define('BASE_DIR', dirname(__FILE__));
	
	//$sunetid = $_ENV['WEBAUTH_USER'];
	//$username = strtolower($username);
	
	define('POSITION_STUDENT', 1);
	define('POSITION_APPLICANT', 2);
	define('POSITION_COURSE_HELPER', 3);
	define('POSITION_SECTION_LEADER', 4);
	define('POSITION_TEACHING_ASSISTANT', 5);
	define('POSITION_LECTURER', 6);
	define('POSITION_COORDINATOR', 7);
	
	$username = "jkeeshin";
	$classname = "cs106a";
	$dummy = "karel";
	
	define('DUMMYDIR', $dummy);
	define('USERNAME', $username);
	define('CLASSNAME', $classname);
	
	$submissions = '/afs/ir/class/'.$classname.'/submissions';
	
	define('SUBMISSIONS_DIR', $submissions);
	define('ROOT_URL', 'http://stanford.edu/class/cs198/cgi-bin/paperless/');
	
	define('MYSQL_HOST', 'mysql-user.stanford.edu');
	define('MYSQL_USERNAME', 'ccs198paperless');
	define('MYSQL_PASSWORD', 'chauweif');
	define('MYSQL_DATABASE', 'c_cs198_paperless');
	
	define('ASSIGNMENT_COMMENT_TABLE', "AssignmentComments");
	define('ASSIGNMENT_FILE_TABLE', 'AssignmentFiles');
	
	?>