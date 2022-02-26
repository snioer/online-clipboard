<?php
return array(
    'redis' => array(
        'host'  => getenv('DB_PORT_6379_TCP_ADDR')?getenv('DB_PORT_6379_TCP_ADDR'):'ec2-44-194-37-188.compute-1.amazonaws.com',
        'port'  => getenv('DB_PORT_6379_TCP_PORT')?getenv('DB_PORT_6379_TCP_PORT'):'20430',
        'db'    => getenv('DB_NAME')?getenv('DB_NAME'):'',
        'pass'  => getenv('REDIS_PASSWORD')?getenv('REDIS_PASSWORD'):'p7be6a71ce079016356ede575ae45507aa034351c286c2e22426f6915a72de472'
    )
);
