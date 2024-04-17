<?php

namespace app\models;

use app\manager\Model;

class User extends Model
{

    public static function tableName(): string
    {
        return 'user';
    }

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $birthday;
    /**
     * @var string
     */
    protected $address;
    /**
     * @var string
     */
    protected $password_hash;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var string
     */
    protected $emergency_contact_name;
    /**
     * @var string
     */
    protected $emergency_contact_phone;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */

    public function validate(): bool
    {
        if (empty($this->name)) {
            $this->setErrors('Nome', '"Nome" é um campo obrigatório');
        }

        if (!is_birthday_valid($this->birthday)) {
            $this->setErrors('Data de nascimento', 'Insira uma data de Nascimento válida');
        }

        // if (empty($this->address)) {
        //     $this->setErrors('Endereço', 'Insira um endereço válido');
        // }

        if (empty($this->password_hash)) {
            $this->setErrors('Senha', '"Senha" é um campo obrigatório.');
        }

        return empty($this->getErrors());
    }

    /**
     * Set password_hash
     *
     * @param string $password
     * @param string $confirmPassword
     * @return void
     */
    public function setPassword($password, $confirmPassword): void
    {
        if ($password !== $confirmPassword) {
            $this->setErrors('Senha', 'Senhas diferentes');
        } else {
            $this->password_hash = password_hash($password, PASSWORD_DEFAULT);
        }
    }

    public function validatePassword($password): bool
    {
        return password_verify($password, $this->password_hash);
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }
    public function setStatus($status): void
    {
        $this->status = $status;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address): void
    {
        $this->address = $address;
    }
    public function setPasswordHash($password_hash): void
    {
        $this->password_hash = $password_hash;
    }
    public function setEmergencyContactName($emergency_contact_name): void
    {
        $this->emergency_contact_name = $emergency_contact_name;
    }
    public function setEmergencyContactPhone($emergency_contact_phone): void
    {
        $this->emergency_contact_phone = $emergency_contact_phone;
    }
    public function getPasswordHash()
    {
        return $this->password_hash;
    }
}
