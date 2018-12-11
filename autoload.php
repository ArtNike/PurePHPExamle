<?php

function autoLoader(){
    foreach (glob("src/*.php") as $filename)
    {
        include $filename;
    }

    foreach (glob("src/controllers/*.php") as $filename)
    {
        include $filename;
    }

    foreach (glob("src/models/*.php") as $filename)
    {
        include $filename;
    }
}
spl_autoload_register('autoLoader');