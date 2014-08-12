<?php
    require './../che/Yo.php';

    $token = '{API_TOKEN}';

    try {
        $yo = new \che\Yo($token);

        // send a yo to all subscribers
        $yo->sendAll('http://the.tj/'); // or you can yo without link: $yo->sendAll();

        // send a yo to one subscriber
        $yo->sendUser('COMPMAN', 'http://the.tj/'); // or you can yo without link: $yo->sendUser('COMPMAN');

        // count of subscribers
        $count = $yo->subscribersCount();
        echo 'Count: ' . $count;
    } catch (\che\YoException $e) {
        echo "Error #" . $e->getCode() . ": " . $e->getMessage();
    }
