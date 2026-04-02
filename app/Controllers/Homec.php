<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('form');
        return view('frm_bio');
        
        //data disimpan dalam array 
        $data1 = [
            'nama' => 'neva',
            'alamat' => 'medan',
            'email' => 'nevaafebr@gmail.com',
        ];

        $data2 =array(
            'nama' => 'rafli',
            'alamat' => 'tembung',
            'email' => 'rafli@gmail.com',
        );

        $data['nama'] = 'katty';
        $data['alamat'] = 'mekkah';
        $data['email'] = 'katty@gmail.com';


        return view('admin/demotemplate', $data);
    }

    public function homepage(){
        return view('demotemplate');
    }

    public function halamandepan(){
        $data = [
            'judul' => 'Jakarta',
            'data1' => 'Jakarta adalah ibukota negara dan pusat perekonomian yang ahnwdggeu3deguenueufgefbefbue',
            'data2' => 'Jakarta adalah ibukota negara dan pusat perekonomian yang ahnwdggeu3deguenueufgefbefbue'
        ];
        return view('template/header', $x=['negara' => 'Indonesia'])
            .view('template/sidebar')
            .view('template/content', $data)
            .view('template/footer');
    }

    public function terimadata(){
        echo 'Fungsi terima data';
        echo '<br> Nim :'.$_GET ['fnim'];
        echo '<br> Nama :'.$_GET ['fnama'];

    }

    public function terimadatamethodpost(){
        echo 'Fungsi terima data dengan method post';
        echo '<br> Nim :'.$_POST ['fnim'];
        echo '<br> Nama :'.$_POST ['fnama'];

    }

    public function login(){
        return view('LoginPassword');
    }
}