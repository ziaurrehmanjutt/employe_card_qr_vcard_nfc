<?php

namespace App\Controllers\User;

use App\Controllers\User\User_Base;
use App\Models\User\User_Contact_Model;
use CodeIgniter\Files\File;

class User_Contacts extends User_Base
{
    public function add()
    {
        if (isset($_POST['add_card'])) {
            $pData = array(
                "user_id" => $this->session->get('user_login'),
                "card_url" => random_string('alnum', 12),
                "name_title" => $this->request->getVar('name_title'),
                "first_name" => $this->request->getVar('first_name'),
                "last_name" => $this->request->getVar('last_name'),
                "nick_name" => $this->request->getVar('nick_name'),
                "card_note" => $this->request->getVar('card_note'),
                "anniversary" => $this->request->getVar('anniversary'),
                "mobile_number_code" => $this->request->getVar('mobile_number_code'),
                "mobile_number" => $this->request->getVar('mobile_number'),
                "home_contact_code" => $this->request->getVar('home_contact_code'),
                "home_mobile" => $this->request->getVar('home_mobile'),
                "fax_number" => $this->request->getVar('fax_number'),
                "other_number_type" => $this->request->getVar('other_number_type'),
                "other_number" => $this->request->getVar('other_number'),
                "home_address" => json_encode($this->request->getVar('address')),
                "other_settings" => $this->request->getVar('other_settings'),
                "birthday" => $this->request->getVar('birthday'),
                "home_email" => $this->request->getVar('home_email'),
                "home_url" => $this->request->getVar('home_url'),

                "company_name" => $this->request->getVar('company_name'),
                "job_title" => $this->request->getVar('job_title'),
                "job_position" => $this->request->getVar('job_position'),
                "company_fax" => $this->request->getVar('company_fax'),
                "company_website" => $this->request->getVar('company_website'),
                "company_email" => $this->request->getVar('company_email'),
                "company_mobile_code" => $this->request->getVar('company_mobile_code'),
                "company_mobile" => $this->request->getVar('company_mobile'),
                "company_address" => json_encode($this->request->getVar('company_address')),
            );
            $this->shared->insertData("all_user_contacts", $pData);
            return redirect()->route('contact/list');

            ///insertData($table,$data)
        }
        $data['countries'] = $this->shared->all_countries();
        return $this->loadViews('contacts/add', $data, "contacts/add_js");
    }
    public function list()
    {
        $funcs = get_defined_functions();
echo count($funcs['internal']);
die;
        $user_id = $this->session->get('user_login');
        $mdl = new User_Contact_Model();
        $data['list'] = $mdl->get_all_cards($user_id);
        return $this->loadViews('cards/list', $data, "cards/list_js");
    }
    public function detail($link)
    {
        $mdl = new User_Contact_Model();
        if (isset($_POST['card_picture_upload'])) {
            $img = $this->request->getFile('card_image');
            if ($img) {
                $validationRule = [
                    'card_image' => [
                        'label' => 'Card Image',
                        'rules' => 'uploaded[card_image]'
                            . '|is_image[card_image]'
                            . '|mime_in[card_image,image/jpg,image/jpeg,image/jpg,image/png,image/webp]'
                            . '|max_size[card_image,600]',
                    ],
                ];
                if (!$this->validate($validationRule)) {

                    $dataToast = [
                        "type" => "error",
                        "message" => json_encode($this->validator->getErrors()),
                    ];
                } else {
                    if ($img->isValid() && !$img->hasMoved()) {

                        // Get random file name
                        $newName = $img->getRandomName();

                        // Store file in public/uploads/ folder
                        $img->move('../public'.CARD_IMAGE_PATH, $newName);

                        $pData =["card_image" => $newName];
                        $mdl->updateData('all_user_contacts',$pData,["card_url"=>$link]);

                        $dataToast = [
                            "type" => "success",
                            "message" => "Card Image Updated Successfully",
                        ];
                    } else {
                        $dataToast = [
                            "type" => "error",
                            "message" => "Something wrong",
                        ];
                    }
                }
            } else {
                $dataToast = [
                    "type" => "error",
                    "message" => "No File Selected",
                ];
            }
            session()->setFlashdata('toaster', $dataToast);
            return redirect()->to('contact/detail/' . $link);
        }
        elseif (isset($_POST['banner_picture_upload'])) {
            $img = $this->request->getFile('banner_image');
            if ($img) {
                $validationRule = [
                    'banner_image' => [
                        'label' => 'Card Image',
                        'rules' => 'uploaded[banner_image]'
                            . '|is_image[banner_image]'
                            . '|mime_in[banner_image,image/jpg,image/jpeg,image/jpg,image/png,image/webp]'
                            . '|max_size[banner_image,600]',
                    ],
                ];
                if (!$this->validate($validationRule)) {

                    $dataToast = [
                        "type" => "error",
                        "message" => json_encode($this->validator->getErrors()),
                    ];
                } else {
                    if ($img->isValid() && !$img->hasMoved()) {

                        // Get random file name
                        $newName = $img->getRandomName();

                        // Store file in public/uploads/ folder
                        $img->move('../public'.BANNER_IMAGE_PATH, $newName);

                        $pData =["banner_image" => $newName];
                        $mdl->updateData('all_user_contacts',$pData,["card_url"=>$link]);

                        $dataToast = [
                            "type" => "success",
                            "message" => "Card Image Updated Successfully",
                        ];
                    } else {
                        $dataToast = [
                            "type" => "error",
                            "message" => "Something wrong",
                        ];
                    }
                }
            } else {
                $dataToast = [
                    "type" => "error",
                    "message" => "No File Selected",
                ];
            }
            session()->setFlashdata('toaster', $dataToast);
            return redirect()->to('contact/detail/' . $link);
        }
        $user_id = $this->session->get('user_login');

        $data['detail'] = $mdl->get_single_card($link);
        if (!$data['detail'] || $data['detail']['user_id'] != $user_id) {
            return $this->not_found("Card Not Found");
        }
        $this->headerTitle = "Card Detail | " . $data['detail']['first_name'];
        $this->headerDescription = "Card Detail";
        $data['countries'] = $this->shared->all_countries();

        return $this->loadViews('cards/detail', $data);
    }
}
