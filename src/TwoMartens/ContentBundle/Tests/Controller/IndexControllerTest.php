<?php

/*
 * This file is part of the TwoMartens package.
 *
 * (c) Jim Martens <github@2martens.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TwoMartens\ContentBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Tests the Index Controller.
 *
 * @author    Jim Martens <github@2martens.de>
 * @copyright 2013-2014 Jim Martens
 * @license   http://www.gnu.org/licenses/lgpl-3.0 GNU Lesser General Public License, version 3
 */
class IndexControllerTest extends WebTestCase {
    
    public function testIndex()
    {
        $client = static::createClient();
        
        $crawler = $client->request('GET', '/');
        // verify that the request was successful
        $this->assertTrue($client->getResponse()->isSuccessful());
        // verify that the language is English
        $this->assertCount(1, $crawler->filter('address:contains("Germany")'));

        $crawler = $client->request('GET', '/de/');
        // verify that the request was successful
        $this->assertTrue($client->getResponse()->isSuccessful());
        // verify that the language is English
        $this->assertCount(0, $crawler->filter('address:contains("Germany")'));

        $crawler = $client->request('GET', '/en/');
        // verify that the request was successful
        $this->assertTrue($client->getResponse()->isSuccessful());
        // verify that the language is English
        $this->assertCount(1, $crawler->filter('address:contains("Germany")'));
    }
}
 
