<?php

namespace raylib;

/**
 * Class Matrix
 * Matrix type (OpenGL style 4x4 - right handed, column major)
 * @package raylib
 *
 * @property float $m0
 * @property float $m1
 * @property float $m2
 * @property float $m3
 * @property float $m4
 * @property float $m5
 * @property float $m6
 * @property float $m7
 * @property float $m8
 * @property float $m9
 * @property float $m10
 * @property float $m11
 * @property float $m12
 * @property float $m13
 * @property float $m14
 * @property float $m15
 */
class Matrix
{
    /**
     * Color constructor.
     *
     * @param float $m0
     * @param float $m1
     * @param float $m2
     * @param float $m3
     * @param float $m4
     * @param float $m5
     * @param float $m6
     * @param float $m7
     * @param float $m8
     * @param float $m9
     * @param float $m10
     * @param float $m11
     * @param float $m12
     * @param float $m13
     * @param float $m14
     * @param float $m15
     */
    public function __construct(float $m0, float $m1, float $m2, float $m3,
                                float $m4, float $m5, float $m6, float $m7,
                                float $m8, float $m9, float $m10, float $m11,
                                float $m12, float $m13, float $m14, float $m15)
    {
    }

    /**
     * Gets the m0
     *
     * @return float
     */
    public function getM0(): float {}

    /**
     * Sets the m0
     *
     * @param float $m0
     */
    public function setM0(float $m0): void {}

    /**
     * Gets the m1
     *
     * @return float
     */
    public function getM1(): float {}

    /**
     * Sets the m1
     *
     * @param float $m1
     */
    public function setM1(float $m1): void {}

    /**
     * Gets the m2
     *
     * @return float
     */
    public function getM2(): float {}
    
    /**
     * Sets the 2
     *
     * @param float $m2
     */
    public function setM2(float $m2): void {}

    /**
     * Gets the m3
     *
     * @return float
     */
    public function getM3(): float {}

    /**
     * Sets the m3
     *
     * @param float $m3
     */
    public function setM3(float $m3): void {}

    /**
     * Gets the m4
     *
     * @return float
     */
    public function getM4(): float {}

    /**
     * Sets the m4
     *
     * @param float $m4
     */
    public function setM4(float $m4): void {}

    /**
     * Gets the m5
     *
     * @return float
     */
    public function getM5(): float {}

    /**
     * Sets the m5
     *
     * @param float $m5
     */
    public function setM5(float $m5): void {}

    /**
     * Gets the m6
     *
     * @return float
     */
    public function getM6(): float {}

    /**
     * Sets the m6
     *
     * @param float $m6
     */
    public function setM6(float $m6): void {}

    /**
     * Gets the m7
     *
     * @return float
     */
    public function getM7(): float {}

    /**
     * Sets the m7
     *
     * @param float $m7
     */
    public function setM7(float $m7): void {}

    /**
     * Gets the m8
     *
     * @return float
     */
    public function getM8(): float {}

    /**
     * Sets the m8
     *
     * @param float $m8
     */
    public function setM8(float $m8): void {}

    /**
     * Gets the m9
     *
     * @return float
     */
    public function getM9(): float {}

    /**
     * Sets the m9
     *
     * @param float $m9
     */
    public function setM9(float $m9): void {}

    /**
     * Gets the m10
     *
     * @return float
     */
    public function getM10(): float {}

    /**
     * Sets the m10
     *
     * @param float $m10
     */
    public function setM10(float $m10): void {}

    /**
     * Gets the m11
     *
     * @return float
     */
    public function getM11(): float {}

    /**
     * Sets the m11
     *
     * @param float $m11
     */
    public function setM11(float $m11): void {}

    /**
     * Gets the m12
     *
     * @return float
     */
    public function getM12(): float {}

    /**
     * Sets the m12
     *
     * @param float $m12
     */
    public function setM12(float $m12): void {}

    /**
     * Gets the m13
     *
     * @return float
     */
    public function getM13(): float {}

    /**
     * Sets the m13
     *
     * @param float $m13
     */
    public function setM13(float $m13): void {}

    /**
     * Gets the m14
     *
     * @return float
     */
    public function getM14(): float {}

    /**
     * Sets the m14
     *
     * @param float $m14
     */
    public function setM14(float $m14): void {}

    /**
     * Gets the m15
     *
     * @return float
     */
    public function getM15(): float {}

    /**
     * Sets the m15
     *
     * @param float $m15
     */
    public function setM15(float $m15): void {}
}