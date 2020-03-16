<?php

namespace Bdr\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Bdr\Model\BdrTable;
use Zend\View\Model\ViewModel;
use Bdr\Form\BdrForm;
use Bdr\Form\UploadForm;
use Bdr\Model\Bdr;

class BdrController extends AbstractActionController
{
    private $table;

    public function __construct(BdrTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {
        return new ViewModel([
            'clients' => $this->table->fetchAll(),
        ]);
    }

    public function addAction() {
        $form = new BdrForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();

        if (! $request->isPost()) {
            return ['form' => $form];
        }

        $bdr = new Bdr();
        $form->setInputFilter($bdr->getInputFilter());
        $form->setData($request->getPost());

        if (! $form->isValid()) {
            return ['form' => $form];
        }

        $bdr->exchangeArray($form->getData());
        $this->table->saveBdr($bdr);
        return $this->redirect()->toRoute('bdr');
    }

    public function  editAction() {
        $id = (int) $this->params()->fromRoute('id', 0);

        if (0 === $id) {
            return $this->redirect()->toRoute('bdr', ['action' => 'add']);
        }

        try {
            $bdr = $this->table->getBdr($id);
        } catch (\Exception $e) {
            return $this->redirect()->toRoute('bdr', ['action' => 'index']);
        }

        $form = new BdrForm();
        $form->bind($bdr);
        $form->get('submit')->setAttribute('value', 'Save');

        $request = $this->getRequest();
        $viewData = ['id' => $id, 'form' => $form];

        if (! $request->isPost()) {
            return $viewData;
        }

        $post = array_merge_recursive(
        $request->getPost()->toArray(),
        $request->getFiles()->toArray()
        );

        $form->setInputFilter($bdr->getInputFilter());
        $form->setData($post);

        if (! $form->isValid()) {
            return $viewData;
        }

        $fileProperties = [];
        $data = $form->getData();
        
        foreach ($data as $item) {
              $fileProperties[] = $item;
        }

        $bdr->picture = $fileProperties[4]['name'];

        $this->table->saveBdr($bdr);

        return $this->redirect()->toRoute('bdr', ['action' => 'index']);
    }

    public function deleteAction() {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('bdr');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                $this->table->deleteBdr($id);
            }

            return $this->redirect()->toRoute('bdr');
        }

        return [
            'id'    => $id,
            'bdr' => $this->table->getBdr($id),
        ];
    }
}

