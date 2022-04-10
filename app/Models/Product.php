<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // private $_name;
    // private $_decription;
    // private $_active;
    // private $_category_id;
    // private $_date_update;
    // public function __construct($name, $decription, $active, $category_id, $date_update)
    // {
    //     $this -> _name = $name;
    //     $this -> _decription = $decription;
    //     $this -> _active = $active;
    //     $this -> _category_id = $category_id;
    //     $this -> _date_update = $date_update;
    // }



    use HasFactory;
    protected $fillable =[
        'name',
        'description',
        'active',
        'category_id',
    ];

	
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // //getter - setter
    // public function get_name(){
	// 	return $this->_name;
	// }

	// public function set_name($_name){
	// 	$this->_name = $_name;
	// }

	// public function get_decription(){
	// 	return $this->_decription;
	// }

	// public function set_decription($_decription){
	// 	$this->_decription = $_decription;
	// }

	// public function get_active(){
	// 	return $this->_active;
	// }

	// public function set_active($_active){
	// 	$this->_active = $_active;
	// }

	// public function get_category_id(){
	// 	return $this->_category_id;
	// }

	// public function set_category_id($_category_id){
	// 	$this->_category_id = $_category_id;
	// }

	// public function get_date_update(){
	// 	return $this->_date_update;
	// }

	// public function set_date_update($_date_update){
	// 	$this->_date_update = $_date_update;
	// }
}
