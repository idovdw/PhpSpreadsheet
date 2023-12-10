<?php

namespace PhpOffice\PhpSpreadsheet\Worksheet;

class PageMargins
{
    /**
     * Left.
     */
    private float $left = 0.7;

    /**
     * Right.
     */
    private float $right = 0.7;

    /**
     * Top.
     */
    private float $top = 0.75;

    /**
     * Bottom.
     */
    private float $bottom = 0.75;

    /**
     * Header.
     */
    private float $header = 0.3;

    /**
     * Footer.
     */
    private float $footer = 0.3;

    /**
     * Create a new PageMargins.
     */
    public function __construct()
    {
    }

    /**
     * Get Left.
     */
    public function getLeft(): float
    {
        return $this->left;
    }

    /**
     * Set Left.
     *
     * @param float $left
     *
     * @return $this
     */
    public function setLeft($left): static
    {
        $this->left = $left;

        return $this;
    }

    /**
     * Get Right.
     */
    public function getRight(): float
    {
        return $this->right;
    }

    /**
     * Set Right.
     *
     * @param float $right
     *
     * @return $this
     */
    public function setRight($right): static
    {
        $this->right = $right;

        return $this;
    }

    /**
     * Get Top.
     */
    public function getTop(): float
    {
        return $this->top;
    }

    /**
     * Set Top.
     *
     * @param float $top
     *
     * @return $this
     */
    public function setTop($top): static
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get Bottom.
     */
    public function getBottom(): float
    {
        return $this->bottom;
    }

    /**
     * Set Bottom.
     *
     * @param float $bottom
     *
     * @return $this
     */
    public function setBottom($bottom): static
    {
        $this->bottom = $bottom;

        return $this;
    }

    /**
     * Get Header.
     */
    public function getHeader(): float
    {
        return $this->header;
    }

    /**
     * Set Header.
     *
     * @param float $header
     *
     * @return $this
     */
    public function setHeader($header): static
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Get Footer.
     */
    public function getFooter(): float
    {
        return $this->footer;
    }

    /**
     * Set Footer.
     *
     * @param float $footer
     *
     * @return $this
     */
    public function setFooter($footer): static
    {
        $this->footer = $footer;

        return $this;
    }

    public static function fromCentimeters(float $value): float
    {
        return $value / 2.54;
    }

    public static function toCentimeters(float $value): float
    {
        return $value * 2.54;
    }

    public static function fromMillimeters(float $value): float
    {
        return $value / 25.4;
    }

    public static function toMillimeters(float $value): float
    {
        return $value * 25.4;
    }

    public static function fromPoints(float $value): float
    {
        return $value / 72;
    }

    public static function toPoints(float $value): float
    {
        return $value * 72;
    }
}
