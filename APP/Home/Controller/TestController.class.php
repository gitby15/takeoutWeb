<?php
namespace Home\Controller;
use Think\Controller;

class TestController extends Controller {
    public function index(){
	$user = M('User');
	$restaurant = D('Restaurant');
	//$restaurant = new \Home\Model\RestaurantModel();
	//dump($user);
	//$test = $user->query('show tables'); 
	//$test=$user->execute('create table user1(username varchar(25),password varchar(40))');
	$data['username']='denghuan';
	$data['password']='32323';
	//$data['status']=1;
	$status = $user->create($data);
	//dump($status);
	//dump($user->getDbFields());
	//dump($user->add());
	
	//$data = $user->where('username="root"')->find();
	echo 222222;
	$data = $restaurant->getRestaurants();
	dump($data);
	
	}
	public function insert(){
	
	}
	
}
?>