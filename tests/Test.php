<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class PickPeaksTest extends TestCase
{
    public function testItFindsPeaks()
    {
        $this->assertEquals(['pos' => [3,7], 'peaks' => [6,3]], pickPeaks([1,2,3,6,4,1,2,3,2,1]));
    }
}