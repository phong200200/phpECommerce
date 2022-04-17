<?php

namespace App\BusinessHelper;

use App\Http\Services\Product\CategoryService;
use App\Models\Category;
use App\Models\Product;

class BusinessMappingHelper{

    public static function product($produdcs){
        $html = '';

        $cate_services = new CategoryService;

        foreach($produdcs as $key => $prod){
            //if($prod -> category_id == $parent_id){
                $checkbox = '';

                $_id = $prod -> id;
                $_name = $prod -> name;
                $_active = $prod -> active;
                $_updated = $prod -> updated_at;
                $_category = $cate_services -> getNameCateById($prod -> category_id)[0] -> name;

                if($_active == 1){
                    $checkbox .= '<input type="checkbox" id="isactive" name="isactive" checked=true>';
                }else{
                    $checkbox .= '<input type="checkbox" id="isactive" name="isactive">';
                }

                $html .= '
                <tr>
                    <td>' . $_id . '</td>
                    <td>' . $_name . '</td>
                    <td>' . $checkbox . '</td>
                    <td>' . $_updated . '</td>
                    <td>' . $_category . '</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/product/edit/'. $prod -> id . '">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#"
                            onclick="RemoveRow('. $prod -> id . ',\'/admin/product/destroy\')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                ';
            //};
        }
        return $html;
    }

    public static function cart($produdcs){
        $html = '';

        $cate_services = new CategoryService;

        foreach($produdcs as $key => $prod){
            //if($prod -> category_id == $parent_id){
                $checkbox = '';

                $_id = $prod -> id;
                $_name = $prod -> name;
                $_active = $prod -> active;
                $_updated = $prod -> updated_at;
                $_category = $cate_services -> getNameCateById($prod -> category_id)[0] -> name;

                if($_active == 1){
                    $checkbox .= '<input type="checkbox" id="isactive" name="isactive" checked=true>';
                }else{
                    $checkbox .= '<input type="checkbox" id="isactive" name="isactive">';
                }

                $html .= '
                <tr>
                    <td>' . $_id . '</td>
                    <td>' . $_name . '</td>
                    <td>' . $checkbox . '</td>
                    <td>' . $_updated . '</td>
                    <td>' . $_category . '</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/product/edit/'. $prod -> id . '">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" href="#"
                            onclick="RemoveRow('. $prod -> id . ',\'/admin/product/destroy\')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                ';
            //};
        }
        return $html;
    }
}