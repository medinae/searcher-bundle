<?php

namespace KGzocha\Bundle\SearcherBundle\Test\Searcher\Factory;

use KGzocha\Bundle\SearcherBundle\Searcher\Factory\SearcherFactory;
use KGzocha\Bundle\SearcherBundle\Test\SearchingContextStub;
use KGzocha\Searcher\Event\Dispatcher\EventDispatcherInterface;
use KGzocha\Searcher\FilterImposer\Collection\FilterImposerCollection;

/**
 * @author Krzysztof Gzocha <krzysztof@propertyfinder.ae>
 * @package KGzocha\Bundle\SearcherBundle\Test\Searcher\Factory
 */
class SearcherFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildMethod()
    {
        $factory = new SearcherFactory();

        $this->assertInstanceOf(
            'KGzocha\Searcher\SearcherInterface',
            $factory->build(new FilterImposerCollection(), new SearchingContextStub(true))
        );
    }
}
