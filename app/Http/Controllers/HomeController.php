<?php

namespace App\Http\Controllers;

use App\Design;
use App\DesignCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     *
     * @return string
     */
    public function index () {
        $designs = Design::with(["image","user"])->get();
        $designCategories = DesignCategory::get();
        return view("home", [
            "designs"           =>$designs,
            "designCategories"  => $designCategories
        ]);
    }

    /**
     * Display design detail with products available
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function product ($id) {
        $design = Design::with(["image","user"])->find($id);
        $designs = Design::with(["image","user"])->where("user_id", "=", $id)->get();
        return view("product", [
            "design"        => $design,
            "designs"       =>$designs,
        ]);
    }
    public function search (Request $request) {
        $name = $request->get("name");
        $designs = Design::with(["image","user"])->where("title", "like","%{$name}%")->get();
        $designCategories = DesignCategory::get();
        return view("home", [
            "designs"           =>$designs,
            "designCategories"  => $designCategories
        ]);
    }
}
