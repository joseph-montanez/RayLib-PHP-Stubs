<?php

namespace raylib;


/**
 * Class Camera3D
 * @package raylib
 *
 * @property-read array $position
 * @property-read array $target
 * @property-read array $up
 * @property-read float $fovy
 * @property-read int $type
 */
class Camera3D
{
    const PERSPECTIVE = 0;
    const ORTHOGRAPHIC = 1;

    /**
     * Returns a ray trace from mouse position
     *
     * @param \raylib\Vector2 $mousePosition
     *
     * @return \raylib\Ray
     */
    public function getMouseRay(Vector2 $mousePosition) : Ray {}

    /**
     * Returns camera transform matrix (view matrix)
     *
     * @return \raylib\Matrix
     */
    public function getMatrix() : Matrix {}

    /**
     * Returns the screen space position for a 3d world space position
     *
     * @param \raylib\Vector3 $position
     *
     * @return \raylib\Vector2
     */
    public function getWorldToScreen(Vector3 $position) : Vector2 {}

    /**
     * Returns size position for a 3d world space position
     *
     * @param \raylib\Vector3 $position
     * @param int             $width
     * @param int             $height
     *
     * @return \raylib\Vector2
     */
    public function getWorldToScreenEx(Vector3 $position, int $width, int $height) : Vector2 {}
}