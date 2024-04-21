<?php

namespace app\controllers;

use app\manager\Controller;
use app\manager\Application;
use app\models\QrUser;
use app\db\Database;

class QrController extends Controller
{
    /**
     * Returns home view
     *
     * @return string
     */
    public static function actionCreateUserQr()
    {
        $user = Application::getUser();

        $request = self::getRequest();
        $qrUser = new QrUser();
        if ($request->isPost()) {
            $qrUser->load($request->getPost());
            $qrUser->setUserId($user->getId());
            $qrUser->setCompanyId(1);

            $uploadDir = 'src/assets/img/upload/';

            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            if (isset($_FILES['drop_material'])) {
                $uploadFileDropMaterial = $uploadDir . basename($_FILES['drop_material']['name']);
                if (move_uploaded_file($_FILES['drop_material']['tmp_name'], $uploadFileDropMaterial)) {
                    $qrUser->setDropMaterial($uploadFileDropMaterial);
                } else {
                    echo "Upload failed for drop_material.";
                }
            }

            if (isset($_FILES['danger_issue_image'])) {
                $uploadFileDangerIssueImage = $uploadDir . basename($_FILES['danger_issue_image']['name']);
                if (move_uploaded_file($_FILES['danger_issue_image']['tmp_name'], $uploadFileDangerIssueImage)) {
                    $qrUser->setDangerIssueImage($uploadFileDangerIssueImage);
                } else {
                    echo "Upload failed for danger_issue_image.";
                }
            }

            if (isset($_FILES['feedback_image'])) {
                $uploadFileFeedbackImage = $uploadDir . basename($_FILES['feedback_image']['name']);
                if (move_uploaded_file($_FILES['feedback_image']['tmp_name'], $uploadFileFeedbackImage)) {
                    $qrUser->setFeedbackImage($uploadFileFeedbackImage);
                } else {
                    echo "Upload failed for feedback_image.";
                }
            }

            $qrUser->save();
            $db = Database::getInstance();
            $sql = 'UPDATE `user` SET latest_user_qr = :latest_user_qr WHERE id = :id';
            $params = [
                ':latest_user_qr' => $qrUser->getId(),
                ':id' => $user->getId()
            ];
            $db->query($sql, $params);
        }

        return self::render('userCreate', ['user' => $user]);
    }

    /**
     * Returns home view
     *
     * @return string
     */
    public static function actionUpdateUserQr()
    {
        $user = Application::getUser();
        $latestUserQr = $user->getLatestUserQr();
        $userQr = [];
        if ($latestUserQr) {
            $userQr = QrUser::get(['id' => $latestUserQr]);
        }
        $request = self::getRequest();
        $qrUser = new QrUser();
        if ($request->isPost()) {
            $qrUser->load($request->getPost());
            $qrUser->setUserId($user->getId());
            $qrUser->setCompanyId(1);

            $uploadDir = 'src/assets/img/upload/';

            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            if (isset($_FILES['drop_material'])) {
                $uploadFileDropMaterial = $uploadDir . basename($_FILES['drop_material']['name']);
                if (move_uploaded_file($_FILES['drop_material']['tmp_name'], $uploadFileDropMaterial)) {
                    $qrUser->setDropMaterial($uploadFileDropMaterial);
                } else {
                    echo "Upload failed for drop_material.";
                }
            }

            if (isset($_FILES['danger_issue_image'])) {
                $uploadFileDangerIssueImage = $uploadDir . basename($_FILES['danger_issue_image']['name']);
                if (move_uploaded_file($_FILES['danger_issue_image']['tmp_name'], $uploadFileDangerIssueImage)) {
                    $qrUser->setDangerIssueImage($uploadFileDangerIssueImage);
                } else {
                    echo "Upload failed for danger_issue_image.";
                }
            }

            if (isset($_FILES['feedback_image'])) {
                $uploadFileFeedbackImage = $uploadDir . basename($_FILES['feedback_image']['name']);
                if (move_uploaded_file($_FILES['feedback_image']['tmp_name'], $uploadFileFeedbackImage)) {
                    $qrUser->setFeedbackImage($uploadFileFeedbackImage);
                } else {
                    echo "Upload failed for feedback_image.";
                }
            }

            $qrUser->save();

            $db = Database::getInstance();
            $sql = 'UPDATE `user` SET latest_user_qr = :latest_user_qr WHERE id = :id';
            $params = [
                ':latest_user_qr' => $qrUser->getId(),
                ':id' => $user->getId()
            ];
            $db->query($sql, $params);
        }

        return self::render('userUpdate', ['userQr' => $userQr]);
    }
}
