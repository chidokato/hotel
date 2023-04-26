<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
// use Request;
use Session;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\DistrictTranslation;
use App\Models\WardTranslation;

class AjaxController extends Controller
{
    public function change_cate_lang($id)
    {
        $data = CategoryTranslation::where('category_id',$id)->get();
        foreach ($data as $key => $value) {
    		echo '<input value="'.$value->id.'" name="category_id:'.$value->locale.'" type="hidden">';
        }
    }

    public function change_province($id)
    {
        $data = DistrictTranslation::where('province_id',$id)->get();
        echo '<option value="">...</option>';
        foreach ($data as $key => $value) {
    		echo '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
    }

    public function change_district($id)
    {
        $data = WardTranslation::where('district_id',$id)->get();
        foreach ($data as $key => $value) {
            echo '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
    }

    public function change_SortBy($sort_by)
    {
        $locale = Session::get('locale');
        $data = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)->where('sort_by',$sort_by)->get();
            echo '<option value=""> --Root-- </option>';
        foreach ($data as $key => $value) {
            echo '<option value="'.$value->id.'">'.$value->name.'</option>';
        }
    }
    public function change_SortBy_parent($sort_by)
    {
        echo '<input type="hidden" value="0" name="category:en">
            <input type="hidden" value="0" name="category:vi">
            <input type="hidden" value="0" name="category:cn">';
    }

    public function change_parent($id)
    {
        $locale = Session::get('locale');
        $data = CategoryTranslation::where('category_id',$id)->get();
        foreach ($data as $key => $value) {
            echo '<input value="'.$value->id.'" type="hidden" name="category:'.$value->locale.'">';
        }
    }
}
