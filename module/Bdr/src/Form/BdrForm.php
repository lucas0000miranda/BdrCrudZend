<?php

namespace Bdr\Form;

use Zend\Form\Form;
use Zend\Form\Element;

class BdrForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('bdr');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);
        $this->add([
            'name' => 'name',
            'type' => 'text',
            'options' => [
                'label' => 'Name',
            ],
        ]);
        $this->add([
            'name' => 'email',
            'type' => 'text',
            'options' => [
                'label' => 'Email',
            ],
        ]);
        $this->add([
            'name' => 'phone',
            'type' => 'text',
            'options' => [
                'label' => 'Phone',
            ],
        ]);
        $file = new Element\File('picture');
        $file->setLabel('Profile Avatar')
             ->setAttribute('type', 'text')
             ->setAttribute('id', 'picture');
        $this->add($file);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Upload',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}
