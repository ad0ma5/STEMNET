<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace TillReceipt;

return array(
     'controllers' => array(
         'invokables' => array(
             'TillReceipt\Controller\TillReceipt' => 'TillReceipt\Controller\TillReceiptController',
         ),
     ),
          // The following section is new and should be added to your file
     'router' => array(
         'routes' => array(
             'tillReceipt' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/tillReceipt[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'TillReceipt\Controller\TillReceipt',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'tillReceipt' => __DIR__ . '/../view',
         ),
     ),
);
