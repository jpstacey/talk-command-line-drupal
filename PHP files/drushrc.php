<?php

$options['shell-aliases'] = array(
  'u'              => '!uname',
  'apache-restart' => 
    '!sudo service apache2 restart',
  'mysql-restart'  => 
    '!sudo /etc/init.d/mysql restart',
  'apache-ensite' =>
    '!sudo a2ensite',
);
