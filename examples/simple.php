<?php
    require './../src/Yo.php';

    $token = '{API_TOKEN}';

    try {
        $yo = new \che\Yo($token);

        // send a yo to all subscribers
        $yo->sendAll();
        // with link
        $yo->sendAll(array('link' => 'http://the.tj/'));

        // send a yo to one subscriber
        $yo->sendUser('COMPMAN');
        // with link
        $yo->sendUser('COMPMAN', array('link' => 'http://the.tj/'));
        // with location
        $yo->sendUser('COMPMAN', array('location' => array(59.939364,30.316040)));

        // count of subscribers
        $count = $yo->subscribersCount();
        echo 'Count: ' . $count;
    } catch (\che\YoException $e) {
        echo "Error #" . $e->getCode() . ": " . $e->getMessage();
    }
