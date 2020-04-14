<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\UserModel;                     //UserModel
use Illuminate\Support\Facades\Hash;         //HASH
use App\model\User;
use Mail;
class UserController extends Controller
{
    /**
     *登录视图
     */
    public function login()
    {

        return view('user.login');
    }

    /**
     *执行登录
     */
    public function loginDo(Request $request)
    {
        //接收账号
        $account = $request->input('u_name');
        //接收密码
        $u_password = $request->input('u_password');

        //根据用户名在数据库中进行查询
        $user_info = UserModel::where(['u_tel' => $account])->orWhere(['u_email'  => $account])->orWhere(['u_name' => $account])->first();
        //dd($user_info);u_

        //判断数据库中是否能查到
        if($user_info == null){
            header('Refresh:2;url=/register');
            echo "此用户不存在，请您先注册";
            die;
        }

        header('Refresh:5;url=/user/center');
        echo "登录成功，正在跳转至个人中心....";

    }
        public function center(){
            echo '个人中心';
        }
//注册

        public function register(){
            return view('user/create');
}
//注册的编辑
    public function regDo(){
    $post=request()->except('_token');
    $u_name=request()->input('u_name');

        //验空
        if(empty($u_name)){
            echo "用户名不能为空";die;
        }

        if(empty($post['u_email'])){
            echo "邮箱不能为空";die;
        }

        if(empty($post['u_tel'])){
            echo "手机号不能为空";die;
        }

        if(empty($post['u_password'])){
            echo "密码不能为空";die;
        }

        if(empty($post['u_password1'])){
            echo "确认密码不能为空";die;
        }

        //判断密码
        $u_password=request()->input('u_password');
        $u_password1=request()->input('u_password1');
        if($u_password!=$u_password1){
            echo "密码不正确 请重新输入";
            die;
        }

        //密码加密
        $pass=password_hash($post['u_password'],PASSWORD_BCRYPT);
        //入库
        $data=[
            'u_name'      =>$u_name,
            'u_tel'       =>$post['u_tel'],
            'u_email'     =>$post['u_email'],
            'u_password'      =>$u_password,
        ];
        $uid=UserModel::insertGetId($data);
        echo "<script>alert('注册成功');location.href='/login/login';</script>";


    }
}
