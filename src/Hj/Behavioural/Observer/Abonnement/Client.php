<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\Abonnement;

require_once '../../../../../vendor/autoload.php';

class Client
{
    public function test()
    {
        $abonne1 = new AbonneFoo();
        $abonne2 = new AbonneFoo();

        $edition = new LesEditionsHelloWorld();
        $edition->attach($abonne1);
        $edition->attach($abonne2);
        $edition->parutionMagazine('Un nouveau numero est paru');
    }

}

$client = new Client();
$client->test();