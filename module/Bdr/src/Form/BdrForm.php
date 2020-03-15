<?php

namespace Bdr\Form;

use Zend\Form\Form;

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
        $this->add([
            'name' => 'picture',
            'type' => 'text',
            'options' => [
                'label' => 'Picture',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Go',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}
