<?php

if (! function_exists('alert')) {
    /**
     * Arrange for an alert message.
     *
     * @param  string|null $message
     * @param string $title
     */
    function alert($message = null, $title = '')
    {
        $notifier = app('infinety.sweetalert');
        if (! is_null($message)) {
            return $notifier->message($message, $title);
        }
        return $notifier;
    }
}