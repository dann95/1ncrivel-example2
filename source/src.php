<?php

class NoPing
{
    public function __debugInfo()
    {
        return [
            '1ncrivel' => 'sistemas'
        ];
    }

}

function NoPingTunnel()
{
    return new NoPing;
}