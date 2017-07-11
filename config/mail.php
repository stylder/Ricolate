<?php
return [
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => 587,
    'from' => ['address' => 'ricolate.contacto@gmail.com', 'name' => 'Ricolate'],
    'encryption' => 'tls',
    'username' => 'ricolate.contacto@gmail.com',
    'password' => 'ujhfdlfskvvwlwes',   // it's use your google app password
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
];