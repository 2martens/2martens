<?php

/*
 * This file is part of the TwoMartens package.
 *
 * (c) Jim Martens <github@2martens.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TwoMartens\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Handles the index actions.
 * 
 * @author    Jim Martens <github@2martens.de>
 * @copyright 2013-2014 Jim Martens
 * @license   http://www.gnu.org/licenses/lgpl-3.0 GNU Lesser General Public License, version 3
 */
class IndexController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function indexAction()
    {
        return $this->render('TwoMartensContentBundle:Index:index.html.twig',
            array(
                'lang' => $this->get('translator')->trans('lang')
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function webplatformAction()
    {
        return $this->render('TwoMartensContentBundle:Index:webplatform.html.twig');
    }

    /**
     * {@inheritdoc}
     */
    public function talksAction()
    {
        return $this->render('TwoMartensContentBundle:Index:talks.html.twig');
    }

    /**
     * {@inheritdoc}
     */
    public function fileAction($name)
    {
        $filename = $this->get('kernel')->getRootDir() . '/files/'.$name.'.pdf';
        $response = new BinaryFileResponse($filename);
       
        $d = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $filename);
        $response->headers->set('Content-Disposition', $d);
       
        return $response;
    }    
}
