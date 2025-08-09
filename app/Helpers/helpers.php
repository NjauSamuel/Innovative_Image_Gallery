<?php

if (!function_exists('FlashSuccess')) {
    function FlashSuccess($message)
    {
        session()->flash('flash_type', 'success');
        session()->flash('flash_message', $message);
    }
}

if (!function_exists('FlashError')) {
    function FlashError($message)
    {
        session()->flash('flash_type', 'error');
        session()->flash('flash_message', $message);
    }
}

if (!function_exists('FlashMessage')) {
    function FlashMessage($message)
    {
        session()->flash('flash_type', 'warning');
        session()->flash('flash_message', $message);
    }
}
