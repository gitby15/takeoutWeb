<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
  public function showUserPage(){
  
  
	
	
  
	$restaurant = D('Restaurant');
	$data = $restaurant->getRestaurants();
	foreach($data as $key=>$value)
	{
		$rid[$key] = $key;
		$rname[$key] = $value;
		
	}
	
	
	/*
		//dump($rid);
		array(5) {
		  [1] => int(1)
		  [2] => int(2)
		  [3] => int(3)
		  [4] => int(4)
		  [5] => int(5)
		}

		//dump($rname);
		array(5) {
		  [1] => string(27) "最不好吃的四川菜馆"
		  [2] => string(12) "上海菜馆"
		  [3] => string(24) "最好吃的广东菜馆"
		  [4] => string(12) "东北菜馆"
		  [5] => string(12) "新疆菜馆"
		}
		﻿*/
	
	
	
	
	
	
	$this->assign('rid',$rid);
	$this->assign('rname',$rname);
	//echo "this is User page!";
	 
//	dump($data);
	$this->display("home");
  
  }
  
  
  
  
  public function searchRestaurant(){
  
	$word = $_POST['word'];
	$restaurant = D('Restaurant');
	$data = $restaurant->searchRestauraneByName($word);
	foreach($data as $key=>$value)
	{
		$rid[$key] = $key;
		$rname[$key] = $value;
		
	}
	
	//dump($rid);
	//dump($rname);
	
	
	$this->assign('rid',$rid);
	$this->assign('rname',$rname);
	$this->display("home");//查到字段就显示在模板中，没有被搜到的餐厅不会显示
  
  
  }
  
  
  
  
  public function getRestaurant()
  {
	$rid = $_GET['rid'];
	$rname = $_GET['rname'];
	//dump($rid);
	
	/*
	switch($rid){//测试用
	
		case 1: {echo 'id =11';break;}
		case 2: {echo 'id =22';break;}
		case 3: {echo 'id =33';break;}
		case 4: {echo 'id =44';break;}
		case 5: {echo 'id =55';break;}
	default:$this->display("home");
	
	}
		*/
	/*
	$this->assign('rname',$rname);
	$this->assign('dishName2','value2');
	$this->assign('oPrice2','value22');
	$this->display('restaurant');
  */
  
	$dish = D('Dish');
	$data = $dish->getDishByRid($rid);
	//dump($data);
	
	
	
	foreach($data as $key=>$value)
	{
		$dname[$key+1] = $value['dname'];
		$oprice[$key+1] = $value['oprice'];
		$nprice[$key+1] = $value['nprice'];
		$did[$key+1] = $value['did'];
	
	}
	
	$this->assign('dname',$dname);
	$this->assign('oprice',$oprice);
	$this->assign('nprice',$nprice);
	$this->assign('did',$did);
	$this->display('restaurant');
  
  }
  
  
  
  
  
  public function getOrder(){
  
	$did = $_GET['did'];//did = dish ID
	$dish = M('Dish');
	
	$data = $dish->where('did='.$did)->find();
	
//	dump($data);
//	echo 'method getOrder';
	
	$this->assign($data);
	//dump(session('login_user'));
	$this->display('order');
  
  }
  
  
  
  
  
  
  public function finishOrder(){
  
	//dump($_POST);
	$url = U('User/showUserPage');
	$order = M('Order');
	
	
	$data['dishid'] = $_POST['did'];
	$data['username'] = session('login_user');
	$data['phone'] = $_POST['phone'];
	$data['address'] = $_POST['address'];
	$order->create($data);
	$order->add();
	//dump($data);
	
	
	$this->success('下单成功了哦！<br/>即将返回首页！',$url,3);
  
  
  
  }
  
  
  
  
}