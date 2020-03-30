<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\File;
use App\Model\Settings;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function setting()
    {
        return view('admin.settings', ['title' => trans('admin.settings')]);
    }

    public function setting_save()
    {
        $data = $this->validate(request(), [
            'logo' => vImage(),
            'icon' => vImage(),
            'status'              => '',
            'description'         => '',
            'keywords'            => '',
            'main_lang'           => '',
            'message_maintenance' => '',
            'email'               => '',
            'sitename_en'         => '',
            'sitename_ar'         => '',],
            [],
            [
                'logo' => trans('admin.logo'),
                'icon' => trans('admin.icon')
            ]);
       // $data = request()->except(['_token', '_method']);
        if (request()->hasFile('logo')) {
            $data['logo'] = up()->upload([
                'file'        => 'logo',
                'path'        => 'settings',
                'upload_type' => 'single',
                'delete_file' => setting()->logo,
            ]);
        }

        if (request()->hasFile('icon')) {
            $data['icon'] = up()->upload([
                'file'        => 'icon',
                'path'        => 'settings',
                'upload_type' => 'single',
                'delete_file' => setting()->icon,
            ]);
        }

        Settings::orderBy('id', 'desc')->update($data);
        session()->flash('success', trans('admin.updated_record'));
        return redirect(aurl('settings'));
    }
}
