<?php
namespace App\Controllers;

use App\Models\Contact;
use App\Utilities\Validation;

class ContactController{
    private Contact $contactModel;

    public function __construct(){
        $this->contactModel = new Contact();
    }

    public function index(){
        global $request;
        $count = $this->contactModel->count(['Phone' => $request->input('Phone')]);
        if ($count){
            $data['already_Exists'] = true;
            viewAndDie('contact.add-result',$data);
        }

        if (!Validation::is_valid_email($request->input('email'))){
            $data = ['success' => false, 'message' => 'Invalid Email Address'];
            viewAndDie('contact.add-result',$data);
        }

        $contact_id = $this->contactModel->create([
            'name' => $request->input('name'),
            'Phone' => $request->input('Phone'),
            'email' => $request->input('email')
        ]);
        $data['contact_id'] = $contact_id;
        $data['success'] = true;
        $data['message'] = "Contact with id $contact_id created successfully";
        viewAndDie('contact.add-result',$data);


    }
    public function delete(){
        global $request;

        $id = $request->get_route_param('id');
        var_dump($id);
    }
}