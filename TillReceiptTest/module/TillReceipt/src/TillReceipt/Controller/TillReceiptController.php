<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace TillReceipt\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TillReceiptController extends AbstractActionController
{
    private $tillReceiptTable;
    public function indexAction()
    {
        return new ViewModel(array(
             'tillReceiptTable' => $this->tillReceiptTable()->getResult(),
         ));
    }
    public function tillReceiptTable()
     {
         if (!$this->tillReceiptTable) {
             $sm = $this->getServiceLocator();
             $this->tillReceiptTable = $sm->get('TillReceipt\Model\TillReceipt');
         }
         return $this->tillReceiptTable;
     }
    public function addAction()
     {

     }

     public function editAction()
     {
     }

     public function deleteAction()
     {
     }
}


