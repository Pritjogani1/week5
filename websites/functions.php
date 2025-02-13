<?php
function isurl($value)
{
    return ($_SERVER['REQUEST_URI'] === $value);
}