<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnaType ='object';
    protected $useSoftDeleted = true;

    protected $allowedFields = ['name', 'email', 'password', 'created_at', 'update_at'];

    protected $useTimestamps = false;

    protected $createdField = 'created_at';

    protected $updatedField = 'updated_at';

    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}