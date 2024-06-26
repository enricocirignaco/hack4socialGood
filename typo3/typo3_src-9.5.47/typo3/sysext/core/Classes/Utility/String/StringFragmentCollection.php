<?php

declare(strict_types = 1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\Core\Utility\String;

/**
 * @internal
 */
class StringFragmentCollection implements \Countable
{
    /**
     * @var list<StringFragment>
     */
    protected $fragments;

    /**
     * Length of all fragment strings
     * @var int
     */
    protected $length = 0;

    public function __construct(StringFragment ...$fragments)
    {
        $lengths = array_map(
            static function (StringFragment $fragment) {
                return $fragment->getLength();
            },
            $fragments
        );
        $this->length = array_sum($lengths);
        $this->fragments = $fragments;
    }

    public function __toString(): string
    {
        return implode('', array_map('strval', $this->fragments));
    }

    public function count(): int
    {
        return count($this->fragments);
    }

    public function with(StringFragment ...$fragments): self
    {
        $target = clone $this;
        foreach ($fragments as $fragment) {
            $target->length += $fragment->getLength();
            $target->fragments[] = $fragment;
        }
        return $target;
    }

    public function withOnlyType(string $type): self
    {
        $fragments = array_filter(
            $this->fragments,
            static function (StringFragment $item) use ($type) {
                return $item->getType() === $type;
            }
        );
        return new self(...$fragments);
    }

    public function withoutType(string $type): self
    {
        $fragments = array_filter(
            $this->fragments,
            static function (StringFragment $item) use ($type) {
                return $item->getType() !== $type;
            }
        );
        return new self(...$fragments);
    }

    /**
     * @return list<StringFragment>
     */
    public function getFragments(): array
    {
        return $this->fragments;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function diff(self $other): self
    {
        $otherFragmentIdents = $other->getFragmentIdents();
        $differentFragments = array_filter(
            $this->fragments,
            static function (StringFragment $item) use ($otherFragmentIdents) {
                return !in_array($item->getIdent(), $otherFragmentIdents, true);
            }
        );
        return new self(...$differentFragments);
    }

    public function intersect(self $other): self
    {
        $otherFragmentIdents = $other->getFragmentIdents();
        $sameFragments = array_filter(
            $this->fragments,
            static function (StringFragment $item) use ($otherFragmentIdents) {
                return in_array($item->getIdent(), $otherFragmentIdents, true);
            }
        );
        return new self(...$sameFragments);
    }

    /**
     * @return list<string>
     */
    protected function getFragmentIdents(): array
    {
        return array_map(
            static function (StringFragment $item) {
                return $item->getIdent();
            },
            $this->fragments
        );
    }
}
