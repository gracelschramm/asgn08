<?php
/*
/database connection information
*/
if($_SERVER['HTTP_HOST'] == "grschramm.com")
{
  define('SERVER', 'localhost' );
  define('USER', 'gracelschramm' );
  define('PW', '@Rosey630' );
  define('DB', 'grschramm_test' );
}

else
{
  define('SERVER', 'localhost' );
  define('USER', 'wbip' );
  define('PW', 'wbip123' );
  define('DB', 'test' );
}