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
 * Model test suite.
 */
class ModelTest extends \PHPUnit_Framework_TestCase
{
    use CollectionTestTrait;

    /**
     * @var NewModel
     */
    protected $sample;

    protected function setUp()
    {
        //parent::setUp();
        $this->sample = Yii::createObject([
            'class' => NewModel::class,
            'items' => $this->items,
        ]);
    }

    protected function tearDown()
    {
        //parent::tearDown();
        $this->sample = null;
    }
}

class NewModel extends \hiqdev\yii2\collection\Model
{
}
