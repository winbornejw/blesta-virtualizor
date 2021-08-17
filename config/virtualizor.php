<?php
// Sets whether or not to generate passwords randomly or to allow the user to set their own
Configure::set('Virtualizor.generate_random_password', false);

// If you enable this, the OS will need to be set in the Virtualizor Plan
// or using the 'osid' or 'os_name' config option
Configure::set('Virtualizor.no_OS_field', false);
