<?php
$aliases['dc.local'] = array(
  'uri' => 'dc.local',
  'root' => '/var/www/drupal7-dc',
);

# This is my local Vagrant box
# Note that it also requires some SSH config
# This complexity is specific to the Oxford Drupalcamp demo and is not
# anything to do with Drush or site aliases generally.
$aliases['dc.remote'] = array(
  'uri' => 'dc.local:4567',
  'root' => '/var/www/drupal7-dc',

  'remote-host' => 'remote',
  'remote-user' => 'vagrant',
);
