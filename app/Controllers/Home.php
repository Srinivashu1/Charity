<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $volunteerModel = new UserModel();
        $volunteerModel->data_get('volunteers', ['volunteer_name', 'image', 'role']);
        $data['volunteers'] = $volunteerModel->orderBy('id', 'DESC')->findAll();

        // For Fund Card
        $fundModel = new UserModel();
        $fundModel->data_get('fund_raise_card', ['fund_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $data['fundcard'] = $fundModel->orderBy('id', 'DESC')->findAll();

        // For Fund Card
        $projectModel = new UserModel();
        $projectModel->data_get('project_fund_card', ['project_title' . 'sub_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $data['project'] = $projectModel->orderBy('id', 'DESC')->first();
        
        // For Donor say 
        $donorModel = new UserModel();
        $donorModel->data_get('donors', ['donor_name', 'job', 'experience', 'image']);
        $data['donors'] = $donorModel->orderBy('id', 'DESC')->findAll();

        // For Event
        
        $eventModel = new UserModel();
        $eventModel->data_get('upcoming_events', ['event_name', 'event_date', 'start_time','end_time', 'location', 'image']);
        $data['event'] = $eventModel->orderBy('id', 'DESC')->first();

        // Gallery 
        $galleryModel = new UserModel();
        $galleryModel->data_get('gallery', ['image']);
        $data['gallery'] = $galleryModel->orderBy('id', 'DESC')->findAll();

        // Load view with data
        return view('index', $data);

    }
    // Admin section
    public function admin()
    {
        return view('admin/index');
    }

    public function dashboard()
    {
        return view('admin/text');
    }
    // Volunteers
    public function vol_image()
    {
        $userModel = new UserModel();
        $userModel->data_get('volunteers', ['volunteer_name', 'image', 'role']);

        $data['volunteers'] = $userModel->orderBy('id', 'DESC')->findAll();

        return view('admin/volunteer', $data);
    }
    // Insert Page start

    public function volunteer_save()
    {
        $userModel = new UserModel();
        $file = $this->request->getFile('vol_image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            // Handle the case where no file is uploaded or the file is invalid
            return redirect()->back()->with('error', 'Please upload a valid image.');
        }
        $data = [
            'volunteer_name' => $this->request->getPost('volunteer_name'),
            'role' => $this->request->getPost('volunteer_role'),
            'image' => $imageName,
        ];
        $userModel->data_get('volunteers', ['volunteer_name', 'role', 'image']);
        if ($userModel->insert($data)) {
            return redirect('volunteer');

        } else {
            return "Failed to insert data.";
        }

    }

    // Update Page start
    public function vol_editf($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('volunteers', ['volunteer_name', 'image', 'role']);
        $data['row'] = $userModel->find($id);
        if (!$data['row']) {
            return redirect()->to('volunteer/')->with('error', 'volunteer not found.');
        }
        return view('admin/volunteer_edit', $data);
    }

    public function volunteer_editf($id)
    {

        $userModel = new UserModel();
        $userModel->data_get('volunteers', ['volunteer_name', 'image', 'role']);
        $file = $this->request->getFile('vol_image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            $data = [
                'volunteer_name' => $this->request->getPost('volunteer_name'),
                'role' => $this->request->getPost('volunteer_role'),
            ];

            if ($userModel->update($id, $data)) {
                return redirect('volunteer');
            } else {
                return "Failed to insert data.";
            }

        }
        $data = [
            'volunteer_name' => $this->request->getPost('volunteer_name'),
            'role' => $this->request->getPost('volunteer_role'),
            'image' => $imageName,

        ];

        if ($userModel->update($id, $data)) {
            return redirect('volunteer');

        } else {
            return "Failed to insert data.";
        }
    }
    // Update Page end

    // Delete Page
    public function vol_deletef($id = null)
    {
        $userModel = new UserModel();
        $userModel->data_get('volunteers', ['volunteer_name', 'image', 'role']);
        $userModel->delete($id);
        return redirect()->back()->with('status', 'data deleted successfully');
    }
    // fund card
    public function fund_card()
    {
        $userModel = new UserModel();
        $userModel->data_get('fund_raise_card', ['fund_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $data['fundcard'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('admin/fundraise', $data);
    }
    public function fund_card_save()
    {
        $userModel = new UserModel();
        $userModel->data_get('fund_raise_card', ['fund_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $file = $this->request->getFile('fund_image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            // Handle the case where no file is uploaded or the file is invalid
            return redirect()->back()->with('error', 'Please upload a valid image.');
        }
        $data = [
            'fund_title' => $this->request->getPost('fund_title'),
            'description' => $this->request->getPost('description'),
            'goal_fund' => $this->request->getPost('goal_fund'),
            'fund_raised' => $this->request->getPost('fund_raised'),
            'image' => $imageName,
        ];

        if ($userModel->insert($data)) {
            return redirect()->back()->with('status', 'data deleted successfully');

        } else {
            return "Failed to insert data.";
        }

    }

    public function fund_edit($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('fund_raise_card', ['fund_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $data['fund'] = $userModel->find($id);
        if (!$data['fund']) {
            return redirect()->to('fund_raise/')->with('error', 'Fund raise not found.');
        }
        return view('admin/fundraise_edit', $data);
    }

    public function fund_update($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('fund_raise_card', ['fund_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            $data = [
                'fund_title' => $this->request->getPost('fund_title'),
                'description' => $this->request->getPost('description'),
                'goal_fund' => $this->request->getPost('goal_fund'),
                'fund_raised' => $this->request->getPost('fund_raised'),
            ];

            if ($userModel->update($id, $data)) {
                return redirect()->to('fund_raise/')->with('error', ' not found.');

            } else {
                return "Failed to insert data.";
            }

        }
        $data = [
            'fund_title' => $this->request->getPost('fund_title'),
            'goal_fund' => $this->request->getPost('goal_fund'),
            'description' => $this->request->getPost('description'),
            'fund_raised' => $this->request->getPost('fund_raised'),
            'image' => $imageName,
        ];

        if ($userModel->update($id, $data)) {
            return redirect()->to('fund_raise/')->with('error', ' not found.');

        } else {
            return "Failed to insert data.";
        }
    }
    public function fund_delete($id = null)
    {
        $userModel = new UserModel();
        $userModel->data_get('fund_raise_card', ['fund_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $userModel->delete($id);
        return redirect()->back()->with('status', 'data deleted successfully');
    }
    // Project card
    public function project_card()
    {
        $userModel = new UserModel();
        $userModel->data_get('project_fund_card', ['project_title', 'sub_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $data['project_card'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('admin/project', $data);
    }
    public function project_card_save()
    {
        $userModel = new UserModel();
        $userModel->data_get('project_fund_card', ['project_title', 'sub_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $file = $this->request->getFile('fund_image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            // Handle the case where no file is uploaded or the file is invalid
            return redirect()->back()->with('error', 'Please upload a valid image.');
        }
        $data = [
            'project_title' => $this->request->getPost('project_title'),
            'sub_title' => $this->request->getPost('sub_title'),
            'description' => $this->request->getPost('description'),
            'goal_fund' => $this->request->getPost('goal_fund'),
            'fund_raised' => $this->request->getPost('fund_raised'),
            'image' => $imageName,
        ];

        if ($userModel->insert($data)) {
            return redirect()->back()->with('status', 'data deleted successfully');

        } else {
            return "Failed to insert data.";
        }

    }
    public function project_edit($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('project_fund_card', ['project_title', 'sub_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $data['fund'] = $userModel->find($id);
        if (!$data['fund']) {
            return redirect()->to('project/')->with('error', 'Fund raise not found.');
        }
        return view('admin/project_edit', $data);
    }

    public function project_update($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('project_fund_card', ['project_title', 'sub_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            $data = [
                'project_title' => $this->request->getPost('project_title'),
                'sub_title' => $this->request->getPost('sub_title'),
                'description' => $this->request->getPost('description'),
                'goal_fund' => $this->request->getPost('goal_fund'),
                'fund_raised' => $this->request->getPost('fund_raised'),
            ];

            if ($userModel->update($id, $data)) {
                return redirect()->to('project/')->with('error', ' not found.');

            } else {
                return "Failed to insert data.";
            }

        }
        $data = [
            'project_title' => $this->request->getPost('project_title'),
            'sub_title' => $this->request->getPost('sub_title'),
            'goal_fund' => $this->request->getPost('goal_fund'),
            'description' => $this->request->getPost('description'),
            'fund_raised' => $this->request->getPost('fund_raised'),
            'image' => $imageName,
        ];

        if ($userModel->update($id, $data)) {
            return redirect()->to('fund_raise/')->with('error', ' not found.');

        } else {
            return "Failed to insert data.";
        }
    }
    public function project_delete($id = null)
    {
        $userModel = new UserModel();
        $userModel->data_get('project_fund_card', ['project_title', 'sub_title', 'description', 'goal_fund', 'fund_raised', 'image']);
        $userModel->delete($id);
        return redirect()->back()->with('status', 'data deleted successfully');
    }

    // Project card
    public function donor()
    {
        $userModel = new UserModel();
        $userModel->data_get('donors', ['donor_name', 'job', 'experience', 'image']);
        $data['donors'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('admin/donor', $data);
    }
    public function donor_save()
    {
        $userModel = new UserModel();
        $userModel->data_get('donors', ['donor_name', 'job', 'experience', 'image']);

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            // Handle the case where no file is uploaded or the file is invalid
            return redirect()->back()->with('error', 'Please upload a valid image.');
        }
        $data = [
            'donor_name' => $this->request->getPost('donor_name'),
            'experience' => $this->request->getPost('description'),
            'job' => $this->request->getPost('job'),
            'image' => $imageName,
        ];

        if ($userModel->insert($data)) {
            return redirect()->back()->with('status', 'data deleted successfully');

        } else {
            return "Failed to insert data.";
        }

    }
    public function donor_edit($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('donors', ['donor_name', 'job', 'experience', 'image']);

        $data['row'] = $userModel->find($id);
        if (!$data['row']) {
            return redirect()->to('donor/')->with('error', 'Fund raise not found.');
        }
        return view('admin/donor_edit', $data);
    }

    public function donor_update($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('donors', ['donor_name', 'job', 'experience', 'image']);

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            $data = [
                'donor_name' => $this->request->getPost('donor_name'),
                'experience' => $this->request->getPost('description'),
                'job' => $this->request->getPost('job'),
            
            ];

            if ($userModel->update($id, $data)) {
                return redirect()->to('donor/')->with('error', ' not found.');

            } else {
                return "Failed to insert data.";
            }

        }
        $data = [
            'donor_name' => $this->request->getPost('donor_name'),
            'experience' => $this->request->getPost('description'),
            'job' => $this->request->getPost('job'),
            'image' => $imageName,
       
        ];

        if ($userModel->update($id, $data)) {
            return redirect()->to('donor/')->with('error', ' not found.');

        } else {
            return "Failed to insert data.";
        }
    }

    public function donor_delete($id = null)
    {
        $userModel = new UserModel();
        $userModel->data_get('donors', ['donor_name', 'job', 'experience', 'image']);
        $userModel->delete($id);
        return redirect()->back()->with('status', 'data deleted successfully');
    }
    public function general_form()
    {
        $userModel = new UserModel();
        $userModel->data_get('upcoming_events', ['event_name', 'event_date', 'start_time','end_time', 'location', 'image']);
        $data['event'] = $userModel->orderBy('id', 'DESC')->first();
        return view('admin/general_form',$data);
    }

    public function event_update($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('upcoming_events', ['event_name', 'event_date', 'start_time','end_time', 'location', 'image']);

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            $data = [
                'event_name' => $this->request->getPost('event_name'),
                'event_date' => $this->request->getPost('event_date'),
                'start_time' => $this->request->getPost('start_time'),
                'end_time' => $this->request->getPost('end_time'),
                'event_date' => $this->request->getPost('event_date'),
                'location' => $this->request->getPost('location'),
            
            
            ];
        

            if ($userModel->update($id, $data)) {
                return redirect()->to('general/')->with('error', ' not found.');

            } else {
                return "Failed to insert data.";
            }

        }
        $data = [          
            'event_name' => $this->request->getPost('event_name'),
            'event_date' => $this->request->getPost('event_date'),
            'start_time' => $this->request->getPost('start_time'),
            'end_time' => $this->request->getPost('end_time'),
            'event_date' => $this->request->getPost('event_date'),
            'location' => $this->request->getPost('location'),
            'image' => $imageName,
       
        ];

        if ($userModel->update($id, $data)) {
            return redirect()->to('general/')->with('error', ' not found.');

        } else {
            return "Failed to insert data.";
        }
    }

    public function gallery()
    {
        $userModel = new UserModel();
        $userModel->data_get('gallery', ['image']);
        $data['gallery'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('admin/gallery',$data);
    }

    public function gallery_save()
    {
        $userModel = new UserModel();
        $userModel->data_get('gallery', ['image']);

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            // Handle the case where no file is uploaded or the file is invalid
            return redirect()->back()->with('error', 'Please upload a valid image.');
        }
        $data = ['image' => $imageName];

        if ($userModel->insert($data)) {
            return redirect()->back()->with('status', 'data deleted successfully');

        } else {
            return "Failed to insert data.";
        }

    }
    public function gallery_edit($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('gallery', ['image']);

        $data['row'] = $userModel->find($id);
        if (!$data['row']) {
            return redirect()->to('gallery/')->with('error', 'Fund raise not found.');
        }
        return view('admin/gallery_edit', $data);
    }

    public function gallery_update($id)
    {
        $userModel = new UserModel();
        $userModel->data_get('gallery', ['image']);

        $file = $this->request->getFile('image');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            return redirect()->to('gallery/')->with('error', ' not found.');


        }
        $data = ['image' => $imageName];

        if ($userModel->update($id, $data)) {
            return redirect()->to('gallery/')->with('error', ' not found.');

        } else {
            return "Failed to insert data.";
        }
    }

    public function gallery_delete($id = null)
    {
        $userModel = new UserModel();
        $userModel->data_get('gallery', ['image']);

        $userModel->delete($id);
        return redirect()->back()->with('status', 'data deleted successfully');
    }
 
  




    
}
