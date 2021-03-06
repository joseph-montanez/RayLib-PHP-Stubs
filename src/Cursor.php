<?php


namespace raylib;


/**
 * Class Cursor
 * @package raylib
 */
class Cursor
{

    /**
     * Shows cursor
     */
    public static function show() : void {}

    /**
     * Hides cursor
     */
    public static function hide() : void {}

    /**
     * Check if cursor is not visible
     *
     * @return bool
     */
    public static function isHidden() : bool {}

    /**
     * Enables cursor (unlock cursor)
     */
    public static function enable() : void {}

    /**
     * Disables cursor (lock cursor)
     */
    public static function disable() : void {}

    /**
     * Check if cursor is on the current screen.
     *
     * @return bool
     */
    public static function isOnScreen() : bool {}
}