<?php

namespace Linio;


class Main
{
    public  function execute(){

        for($i =1; $i <=100;$i++)
        {
            $calcForm = new Form();
            $result = new Result();
            $result -> number = $i;
            $result -> remainder3  = $calcForm->calcRemainder($i,3);
            $result -> remainder5  = $calcForm->calcRemainder($i,5);
            $result -> remainder35 = $calcForm->addRemainder($result->remainder3,$result->remainder5);
            $write = new Writer();
            $write->writeAnswer($result);


        }
    }

}