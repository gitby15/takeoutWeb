<?php

namespace Home\Model;
use Think\Model;
class RestaurantModel extends Model {
	
	protected $fields = array( 'id', 'rname','rid');
	public function getRestaurants(){
	
		return $this->getField('rid,rname',true);
	
	}

	public function searchRestauraneByName($word){
	
	
		return $this->where('rname like "%'.$word.'%"')->getField('rid,rname',true);
	
	}

	public function searchRestaurantByRid($rid)
	{
	
	
		return $this->where('rid='.$rid)->getField('rid,rname',true);
	
	
	}

}







?>