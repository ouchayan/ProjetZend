<?php

class Application_Form_Administrateur extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post');
        $this->addElement('text', 'nom', array(
            'label'      => 'Votre nom:',
            'required'   => true,
            'filters'    => array('StringTrim'),
        ));
        
        $this->addElement('text', 'prenom', array(
            'label'      => 'Votre prenom:',
            'required'   => true,
            'filters'    => array('StringTrim'),
        ));
        
        $this->addElement('text', 'email', array(
            'label'      => 'Votre Email:',
            'required'   => true,
        ));
        
        $this->addElement('text', 'motpasse', array(
            'label'      => 'Votre Mot de passe:',
            'required'   => true,
        ));
        
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Ajouter administrateur',
        ));
    }


}

