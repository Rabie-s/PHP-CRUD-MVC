<?php

function Sanitize($string){
    return htmlspecialchars(trim($string));
}