<?php
return [
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => 587,
    'from' => ['address' => 'contacto.mjvc@gmail.com', 'name' => 'Ricolate'],
    'encryption' => 'tls',
    'username' => 'contacto.mjvc@gmail.com',
    'password' => 'vimobswbgtevrwat',   // it's use your google app password
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,
];