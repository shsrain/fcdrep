<?php

namespace User\Behavior;

interface Behavior{

    public function create()
    {
        return true;
    }

    public function handle()
    {
        return true;
    }
    
    public function fire()
    {
        return true;
    }
}