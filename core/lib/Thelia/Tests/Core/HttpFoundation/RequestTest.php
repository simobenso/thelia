<?php

namespace Thelia\Tests\Core\HttpFoundation;



/**
 * the the helpers addinf in Request class
 *
 * Class RequestTest
 * @package Thelia\Tests\Core\HttpFoundation
 * @author Manuel Raynaud <mraynaud@openstudio.fr>
 */
class RequestTest extends \PHPUnit_Framework_TestCase
{

    public function testGetUriAddingParameters()
    {
        $request = $this->getMock(
            "Thelia\Core\HttpFoundation\Request",
            array("getUri", "getQueryString")
        );

        $request->expects($this->any())
                ->method("getUri")
                ->will($this->onConsecutiveCalls(
                "http://localhost/",
                "http://localhost/?test=fu"
            ));

        $request->expects($this->any())
                ->method("getQueryString")
                ->will($this->onConsecutiveCalls(
                "",
                "test=fu"
            ));

        $result = $request->getUriAddingParameters(array("foo" => "bar"));

        $this->assertEquals("http://localhost/?foo=bar", $result);

        $result = $request->getUriAddingParameters(array("foo" => "bar"));

        $this->assertEquals("http://localhost/?test=fu&foo=bar", $result);

    }

}
