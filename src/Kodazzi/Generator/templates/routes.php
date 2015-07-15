[?php
/*
 * This file is part of the Kodazzi Framework.
 *
 * (c) Jorge Gaitan <jgaitan@kodazzi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\Routing\Route;

$routes->add(
    '<?php echo $options['route'] ?>',
    new Route('/<?php echo $options['route'] ?>', array('controller' => '<?php echo $options['bundle'] ?>:Home:index'))
);