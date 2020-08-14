<?php
/**
 * @package         Hello_World
 * @author          Will Beltran <wbeltran@beltranc.com>
 * @copyright       Copyright (c) 2020 BeltranC (http://beltranc.com)
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Drupal\hello_world\Controller;

class HelloWorldController
{
  public function hello()
  {
    return array(
      '#theme' => 'hello_world',
      '#title' => 'Hello, World!'
    );
  }
}
