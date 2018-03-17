<?php

namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppBundle extends Bundle
{

    public function getData($id){
        $json = file_get_contents('http://sitebetatest.fr/index.php/json/result/'. $id);
        $data = json_decode($json);
        var_dump($data);
        return $data;
    }
}
