<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
   // /APP/Home/View/User/
	
	//echo U('User2/index');
	$this->display('Login:login');
	
	}
	public function insert(){
	
	//$url = U('Test/index');//测试SQL以及各模块
	$url = U('User/showUserPage');
	//$url = U('Test/index');
	//$this->success('',$url);
	
	
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user = M('User');
	$data = $user->where('username="'.$username.'"')->find();//取出整条符合这个用户名的数据

	if($username == 'root'&&$password == '1234')
	{
	
	
		//到时候直接登陆到后台，后期再加
		session('login_user',$username);
		$this->success('管理员！',$url);
		exit;
	
	
	}

	if($data)//第一次匹配用户名，这里匹配密码
	{//注意：实际开发中这种做法极其不安全，本项目为了简化流程，注册和登陆合并在一起，所以使用了这种不安全的登陆方式
		if($password ==$data['password'])
		{
			session('login_user',$username);
			$this->success('登陆成功！',$url);
		}else
			{$this->error('密码错误！'.'<br/>'.'请重新登陆！');}
		
	}
	else
	{
	
		$user->create($_POST);
		$user->add();//返回的是该记录的主键
		
		session('login_user',$username);
		$this->success('注册成功！',$url);
	
	
	}
	
	}
	
}