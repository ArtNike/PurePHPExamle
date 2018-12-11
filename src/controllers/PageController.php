<?php
namespace App;
//require('Controller.php');
use App\Controller;
class PageController extends Controller
{
    function getMainPage(){
        include './src/views/index.html';
    }
}