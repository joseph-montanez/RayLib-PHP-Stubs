<?php

namespace raylib;

/**
 * Class Ray
 * Ray type (useful for raycast)
 * @package raylib
 *
 * @property \raylib\Vector3 $position         Ray position (origin)
 * @property \raylib\Vector3 $direction        Ray direction
 */
class Ray
{
    /**
     * Ray constructor.
     *
     * @param \raylib\Vector3 $position  Ray position (origin)
     * @param \raylib\Vector3 $direction Ray direction
     */
    public function __construct(\raylib\Vector3 $position, \raylib\Vector3 $direction)
    {
    }

    /**
     * Gets the ray position (origin)
     *
     * @return \raylib\Vector3
     */
    public function getPosition(): \raylib\Vector3
    {
    }

    /**
     * Sets the ray position (origin)
     *
     * @param \raylib\Vector3 $position
     */
    public function setPosition(\raylib\Vector3 $position): void
    {
    }

    /**
     * Gets the ray direction
     *
     * @return \raylib\Vector3
     */
    public function getDirection(): \raylib\Vector3
    {
    }

    /**
     * Sets the ray direction
     *
     * @param \raylib\Vector3 $direction
     */
    public function setDirection(\raylib\Vector3 $direction): void
    {
    }
}