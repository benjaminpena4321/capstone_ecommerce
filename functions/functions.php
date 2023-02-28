<?php

function getfileextension($file, $name) {
    $parts = pathinfo($file[$name]['name']);
    return $parts['extension'];
}

function generateimagename($extension, $target_directory='images/products/') {
    $name = uniqid();
    return "{$target_directory}{$name}.{$extension}";
}

function isselected($value, $expected) {
    if ($value == $expected) {
        return "selected";
    }
    return "";
}