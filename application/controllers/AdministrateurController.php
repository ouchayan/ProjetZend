<?php

class AdministrateurController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $administrateur = new Application_Model_AdministrateurMapper();
        $this->view->entries = $administrateur->fetchAll();

    }

    public function findAction()
    {
        $request = $this->getRequest();
        $id = $request->getParam('id');
        $administrateur = new Application_Model_AdministrateurMapper();
        $this->view->entry = $administrateur->find($id);
    }

    public function updateAction()
    {
        // action body
    }

    public function deleteAction()
    {
      $request = $this->getRequest();
      $id = $request->getParam('id');
      $administrateur = new Application_Model_AdministrateurMapper();
      $administrateur->delete($id);
      $this->_helper->redirector('index');
    }

    public function addAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_Administrateur();
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $value=$form->getValue($name);
                $admin = new Application_Model_Administrateur('',$form->getValue('nom'),$form->getValue('prenom'),$form->getValue('email'),$form->getValue('motpasse'),12);
                $mapper  = new Application_Model_AdministrateurMapper();
                $mapper->save($admin);
                return $this->_helper->redirector('index');
            }
        }
        $this->view->form = $form;
    }


}









