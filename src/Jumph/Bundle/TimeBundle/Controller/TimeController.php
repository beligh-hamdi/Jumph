<?php

/**
 * This file is part of the Jumph package.
 *
 * (c) Peter Nijssen
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jumph\Bundle\TimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TimeController extends Controller
{

    /**
     * @Template("JumphProjectBundle:Project:overview.html.twig")
     *
     * Project overview page
     *
     *
     * @return Response A Response instance
     */
    public function overviewAction()
    {
        return array();
    }
}
