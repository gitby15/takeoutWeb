<?php

namespace Home\Model;
use Think\Model;
class DishModel extends Model {
		protected $fields = array( 'id', 'dname','oprice','nprice','rid','did');


		public function getDishByRid($rid)
		{
			return $this->where('rid='.$rid)->select();
		
		}

}







?>