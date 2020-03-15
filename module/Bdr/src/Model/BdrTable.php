<?php

namespace Bdr\Model;

use Doctrine\ORM\Mapping as ORM;
use RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * @ORM\Entity
 */
class BdrTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getBdr($id)
    {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' => $id]);
        $row = $rowset->current();
        if (! $row) {
            throw new RuntimeException(sprintf(
                'Could not find row with identifier %d',
                $id
            ));
        }

        return $row;
    }

    public function saveBdr(Bdr $bdr)
    {
        $data = [
            'name' => $bdr->name,
            'email'  => $bdr->email,
            'phone' => $bdr->phone,
            'picture' => $bdr->picture
        ];

        $id = (int) $bdr->id;

        if ($id === 0) {
            $this->tableGateway->insert($data);
            return;
        }

        try {
            $this->getBdr($id);
        } catch (RuntimeException $e) {
            throw new RuntimeException(sprintf(
                'Cannot update Bdr Client with identifier %d; does not exist',
                $id
            ));
        }

        $this->tableGateway->update($data, ['id' => $id]);
    }

    public function deleteBdr($id)
    {
        $this->tableGateway->delete(['id' => (int) $id]);
    }
}

