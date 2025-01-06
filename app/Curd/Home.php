<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

		$data['volunteers'] = $userModel->findAll();

		return view('index',$data);

    }
    
    public function admin()
    {
        return view('admin/index');
    }
    public function dashboard()
    {
        return view('calendar');
    }
    public function vol_image()
    {
        $userModel = new UserModel();

		$data['volunteers'] = $userModel->findAll();

		return view('admin/volunteer',$data);
    }
    // Insert Page start


    public function volunteer_save()
    {
        $userModel= new UserModel();
        $file = $this->request->getFile('vol_image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            // Handle the case where no file is uploaded or the file is invalid
            return redirect()->back()->with('error', 'Please upload a valid image.');
        }
        $data=[
            'volunteer_name'=>$this->request->getPost('volunteer_name'),
            'role'=>$this->request->getPost('volunteer_role'),
            'image'=>$imageName,
        ];
        if ($userModel->insert($data)) {
            return redirect('volunteer');


        } else {
            return "Failed to insert data.";
        }


     
    }
    // Listing Page start

    public function volunteer_list()
	{
		$userModel = new UserModel();

		$data['volunteers'] = $userModel->findAll();

		return view('volunteer',$data);
 	}
    // Listing Page end

    // Update Page start
     public function vol_editf($id)
     {
        $userModel = new UserModel();
        $data['row'] = $userModel->find($id);
        if (!$data['row']) {
            return redirect()->to('volunteer/')->with('error', 'volunteer not found.');
        }
        return view('admin/volunteer_edit', $data);
    }
     
    public function volunteer_editf($id)
    {
     
        $userModel= new UserModel();
        $file = $this->request->getFile('vol_image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            $data=[
                'volunteer_name'=>$this->request->getPost('volunteer_name'),
                'role'=>$this->request->getPost('volunteer_role'),    
            ];
         
            if ($userModel->update($id,$data)) {
                return redirect('volunteer');
            } else {
                return "Failed to insert data.";
            }

        }
        $data=[
            'volunteer_name'=>$this->request->getPost('volunteer_name'),
            'role'=>$this->request->getPost('volunteer_role'),
            'image'=>$imageName,

        ];
     
        if ($userModel->update($id,$data)) {
            return redirect('volunteer');


        } else {
            return "Failed to insert data.";
        }      
    }
    // Update Page end




 
    // Delete Page 

 
     public function vol_deletef($id=null)
    {
        $userModel=new UserModel();
        $userModel->delete($id);
        return redirect()->back()->with('status','data deleted successfully');
    }

}
