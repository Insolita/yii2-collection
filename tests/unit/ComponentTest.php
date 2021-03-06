<?php
/**
 * Collection library for Yii2
 *
 * @link      https://github.com/hiqdev/yii2-collection
 * @package   yii2-collection
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\collection\tests\unit;

use Yii;

/**
 * Component test suite.
 */
class ComponentTest extends \PHPUnit_Framework_TestCase
{
    use CollectionTestTrait;

    /**
     * @var NewComponent
     */
    protected $sample;

    protected function setUp()
    {
        //parent::setUp();
        $this->sample = Yii::createObject([
            'class' => NewComponent::class,
            'items' => $this->items,
        ]);
    }

    protected function tearDown()
    {
        //parent::tearDown();
        $this->sample = null;
    }
}

class NewComponent extends \hiqdev\yii2\collection\Component
{
}
