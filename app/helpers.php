<?php
use Illuminate\Http\Request;

function set_active($path, $active='active')
{
    $request = Request::capture();
    return $request->is($path) ? $active : '';
}