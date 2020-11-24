<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index() {
        $menus0 = Menu::where('type','header-main')->orderby('order')->get()->toArray();
        $arr_menus = [];
        foreach($menus0 as $menu0){
            $arr_menus[$menu0['parent_id']][] = $menu0;

        }

        //list cha
        echo '<ul>';
            foreach($arr_menus[0] as $mp) {
                echo '<li>'
                . $mp['name']. '--' .$mp['id'];
                if(isset($arr_menus[$mp['id']])) 
                {
                    echo '<ul>';
                    foreach($arr_menus[$mp['id']] as $mp_c) 
                    {
                        echo'<li>' . $mp_c['name'] . '--' . $mp_c['id'];

                        if(isset($arr_menus[$mp['id']]))


                        echo '</li>';
                    }
                    echo '</ul>';
                }
                echo '</li>';
            }
        echo '</ul>';
        dd($arr_menus);



        view()->share('menus0', $menus0);

        return view('pages.index');
    }
}
