<?php

namespace raylib;


/**
 * Class Camera3D
 * Basic shapes collision detection functions
 * @package raylib
 */
class Collision
{

    /**
     * Check collision between two rectangles
     *
     * @param \raylib\Rectangle $rec1 The rectangle to check
     * @param \raylib\Rectangle $rec2 The rectangle to check
     *
     * {@internal RLAPI bool CheckCollisionRecs(Rectangle rec1, Rectangle rec2); }}
     *
     * @return bool
     */
    public static function checkRecs(Rectangle $rec1, Rectangle $rec2): bool
    {
    }

    /**
     * Check collision between two circles
     *
     * @param \raylib\Vector2 $center1
     * @param float   $radius1
     * @param \raylib\Vector2 $center2
     * @param float   $radius2
     *
     * {@internal RLAPI bool CheckCollisionCircles(Vector2 center1, float radius1, Vector2 center2, float radius2); }}
     *
     * @return bool
     */
    public static function checkCircles(Vector2 $center1, float $radius1, Vector2 $center2, float $radius2): bool
    {
    }

    /**
     * Check collision between circle and rectangle
     *
     * {@internal RLAPI bool CheckCollisionCircleRec(Vector2 center, float radius, Rectangle rec); }}
     *
     * @param \raylib\Vector2   $center
     * @param float             $radius
     * @param \raylib\Rectangle $rec
     *
     * @return bool
     */
    public static function checkCircleRec(Vector2 $center, float $radius, Rectangle $rec): bool
    {
    }

    /**
     * Check if point is inside circle
     *
     * {@internal RLAPI bool CheckCollisionPointCircle(Vector2 point, Vector2 center, float radius); }}
     *
     * @param \raylib\Vector2 $point
     * @param \raylib\Vector2 $center
     * @param float           $radius
     *
     * @return bool
     */
    public static function checkPointCircle(Vector2 $point, Vector2 $center, float $radius): bool
    {
    }

    /**
     * Check if point is inside rectangle
     *
     * @param \raylib\Vector2 $point The point to check
     * @param \raylib\Rectangle $rec   The rectangle to check
     *
     * {@internal RLAPI bool CheckCollisionPointRec(Vector2 point, Rectangle rec) }}
     *
     * @return bool
     */
    public static function checkPointRec(Vector2 $point, Rectangle $rec): bool
    {
    }

    /**
     * Check if point is inside a triangle
     *
     * {@internal RLAPI bool CheckCollisionPointTriangle(Vector2 point, Vector2 p1, Vector2 p2, Vector2 p3); }}
     *
     * @param \raylib\Vector2 $point
     * @param \raylib\Vector2 $p1
     * @param \raylib\Vector2 $p2
     * @param \raylib\Vector2 $p3
     *
     * @return bool
     */
    public static function checkPointTriangle(Vector2 $point, Vector2 $p1, Vector2 $p2, Vector2 $p3): bool
    {
    }

    /**
     * Check the collision between two lines defined by two points each, returns collision point by reference
     *
     * {@internal RLAPI bool CheckCollisionLines(Vector2 startPos1, Vector2 endPos1, Vector2 startPos2, Vector2 endPos2, Vector2 *collisionPoint); }}
     *
     * @param \raylib\Vector2 $startPos1
     * @param \raylib\Vector2 $endPos1
     * @param \raylib\Vector2 $startPos2
     * @param \raylib\Vector2 $endPos2
     * @param \raylib\Vector2 $collisionPoint
     *
     * @return bool
     */
    public static function checkLines(Vector2 $startPos1, Vector2 $endPos1, Vector2 $startPos2, Vector2 $endPos2, Vector2 $collisionPoint): bool
    {
    }

    /**
     * Get collision rectangle for two rectangles collision
     *
     * @param \raylib\Rectangle $rec1
     * @param \raylib\Rectangle $rec2
     *
     * @return \raylib\Rectangle
     */
    public static function getRec(Rectangle $rec1, Rectangle $rec2): Rectangle
    {
    }
}
