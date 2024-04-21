<?php

namespace app\models;

use app\manager\Model;

class QrUser extends Model
{

    public static function tableName(): string
    {
        return 'qr_users';
    }

    /**
     * @var integer
     */
    protected $id;
    /**
     * @var integer
     */
    protected $user_id;
    /**
     * @var integer
     */
    protected $company_id;
    /**
     * @var string
     */
    protected $address;
    /**
     * @var string
     */
    protected $supervisor_name;
    /**
     * @var string
     */
    protected $supervisor_number;
    /**
     * @var string
     */
    protected $work_today;
    /**
     * @var string
     */
    protected $preform_today;
    /**
     * @var string
     */
    protected $number_people;
    /**
     * @var string
     */
    protected $drop_material;
    /**
     * @var string
     */
    protected $danger_issue_content;
    /**
     * @var string
     */
    protected $danger_issue_image;
    /**
     * @var string
     */
    protected $feedback_content;
    /**
     * @var string
     */
    protected $feedback_image;
    /**
     * @var string
     */
    protected $created_at;
    /**
     * @var string
     */
    protected $updated_at;

    public function validate(): bool
    {
        // if (empty($this->address)) {
        //     $this->setErrors('Endereço', 'Insira um endereço válido');
        // }
        return empty($this->getErrors());
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getUserId()
    {
        return $this->user_id;
    }
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }
    public function getCompanyId()
    {
        return $this->company_id;
    }
    public function setCompanyId($company_id): void
    {
        $this->company_id = $company_id;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address): void
    {
        $this->address = $address;
    }
    public function getSupervisorName()
    {
        return $this->supervisor_name;
    }
    public function setSupervisorName($supervisor_name): void
    {
        $this->supervisor_name = $supervisor_name;
    }
    public function getSupervisorNumber()
    {
        return $this->supervisor_number;
    }
    public function setSupervisorNumber($supervisor_number): void
    {
        $this->supervisor_number = $supervisor_number;
    }
    public function getWorkToday()
    {
        return $this->work_today;
    }
    public function setWorkToday($work_today): void
    {
        $this->work_today = $work_today;
    }
    public function getpreformToday()
    {
        return $this->preform_today;
    }
    public function setPreformToday($preform_today): void
    {
        $this->preform_today = $preform_today;
    }
    public function setNumberPeople($number_people): void
    {
        $this->number_people = $number_people;
    }
    public function getNumberPeople()
    {
        return $this->number_people;
    }
    public function setDropMaterial($drop_material): void
    {
        $this->drop_material = $drop_material;
    }
    public function getDropMaterial()
    {
        return $this->drop_material;
    }
    public function setDangerIssueContent($danger_issue_content): void
    {
        $this->danger_issue_content = $danger_issue_content;
    }
    public function getDangerIssueContent()
    {
        return $this->danger_issue_content;
    }
    public function setDangerIssueImage($danger_issue_image): void
    {
        $this->danger_issue_image = $danger_issue_image;
    }
    public function getDangerIssueImage()
    {
        return $this->danger_issue_image;
    }
    public function setFeedbackContent($feedback_content): void
    {
        $this->feedback_content = $feedback_content;
    }
    public function getFeedbackContent()
    {
        return $this->feedback_content;
    }
    public function setFeedbackImage($feedback_image): void
    {
        $this->feedback_image = $feedback_image;
    }
    public function getFeedbackImage()
    {
        return $this->feedback_image;
    }
    public function setCreatedAt($created_at): void
    {
       $this->created_at = date('Y-m-d', strtotime($created_at));
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
