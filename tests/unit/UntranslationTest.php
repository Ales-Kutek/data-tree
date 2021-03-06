<?php

/**
 * This file is part of the Pehape libraries (http://pehape.cz)
 * Copyright (c) 2016 Tomas Rathouz <trathouz at gmail.com>
 */

namespace Pehape\DataTree\Tests\Unit;

use Pehape\DataTree\Localization\Untranslation;


/**
 * Test Pehape\DataTree\Localization\Untranslation class.
 *
 * @author Tomas Rathouz <trathouz at gmail.com>
 */
class UntranslationTest extends \Codeception\Test\Unit
{

    /** @var \UnitTester */
    protected $tester;

    /** @var Untranslation */
    private $untranslation;


    /** Before. */
    protected function _before()
    {
        $this->untranslation = new Untranslation();
    }


    /** Untranslation class must implement \Nette\Localization\ITranslator. */
    public function testImplementsInterface()
    {
        $this->tester->assertInstanceOf('\Nette\Localization\ITranslator', $this->untranslation);
    }


    /** Nothing should be translated. */
    public function testTranslationIsSame()
    {
        $firstWord = 'word';
        $this->tester->assertEquals($firstWord, $this->untranslation->translate($firstWord));
        $this->tester->assertEquals($firstWord, $this->untranslation->translate($firstWord, 2));

        $secondWord = 'second.word';
        $this->tester->assertEquals($secondWord, $this->untranslation->translate($secondWord));

        $thirdWord = '-THIRD-WORD-';
        $this->tester->assertEquals($thirdWord, $this->untranslation->translate($thirdWord));
    }


}
