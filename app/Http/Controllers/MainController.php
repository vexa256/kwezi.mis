<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Albums;
use App\Models\Events;
use App\Models\Slider;
use App\Models\Release;
use App\Models\Biography;
use App\Models\OrderForm;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function AdminCP() {

        $users = User::all();
        $Admins          = User::count();
        $Events          = Events::count();
        $Albums          = Albums::count();
        $Biography          = Biography::count();
        $News          = News::count();
        $Release          = Release::count();
        $Slider          = Slider::count();
        $OrderForm          = OrderForm::count();
       


        $data = [
            "Page"            => "stats.stats",
            "Title"           => "Admin Dashboard",
            "users"           => $users,
            "Events"           => $Events,
            "Admins"           => $Admins,
            "Albums"           => $Albums,
            "Biography"           => $Biography,
            "News"           => $News,
            "Release"           => $Release,
            "Slider"           => $Slider,
            "OrderForm"           => $OrderForm,
          

        ];

        return view('index', $data);

    }

    public function Home()
    {
        /* $Destinations = Destinations::orderByDesc('created_at')
        ->limit(2)
        ->get(); */
        $Sliders = Slider::all();

        $data = [
            "Page" => "index",
            "Title" => "Welcome",
            "Sliders" => $Sliders,

        ];

        return view('index', $data);
    }
}
