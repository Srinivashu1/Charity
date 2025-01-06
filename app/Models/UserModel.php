<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = ''; // Set default table
    protected $primaryKey = 'id';
    protected $allowedFields = ''; // Set default allowed fields

    public function data_get(string $tableName, array $allowedFields)
    {
        $this->table = $tableName; // Direct assignment
        $this->allowedFields = $allowedFields; // Direct assignment
    }

    // public function fund_card(string $tableName, array $allowedFields)
    // {
    //     $this->table = $tableName; // Direct assignment
    //     $this->allowedFields = $allowedFields; // Direct assignment
    // }
    // public function slider(string $tableName, array $allowedFields)
    // {
    //     $this->table = $tableName; // Direct assignment
    //     $this->allowedFields = $allowedFields; // Direct assignment
    // }

}

