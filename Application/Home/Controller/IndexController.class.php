<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        $uid = session('uid');
        $p = I('get.p', 1, 'intval');
        
        //设置返回页
        SetRefURL(__ACTION__."/p/$p");

        //管理员权限
        if ($uid == C('ADMIN_UID')) {
            $tokenObj = PushApiToken(md5(C('WX_OPENID')));
            $this -> assign('PushAdminUrl', '/Home/Push/admin/token/'.$tokenObj['token'].'/time/'.$tokenObj['time']);
        }

        $ListData= FindTransferAccountData(array('jiid'=>$uid), $p);
        $this -> assign('Page', $ListData['page']);
        $this -> assign('PageMax', $ListData['pagemax']);
        $this -> assign('ShowData', $ListData['data']);

        $transaction_data = $ListData['data'];
        $sorted_data = [];
        $same_date_data = [];
        $temp = '';
        $counter = -1;

        foreach($transaction_data as $value) {
            // var_dump($value) ;
            // echo ('<br>');
            if($value['time'] != $temp){

                $counter+=1;
                if($counter != 0){

                    array_push($sorted_data,$same_date_data);
                } 

                $same_date_data = [];
                $temp = $value['time'];
                // print_r($counter);
                array_push($same_date_data,$value);

            }else{
                array_push($same_date_data,$value);


            }

        }
        $this -> assign('sorted_data', $sorted_data);

        // echo ('<br>');

        // foreach($sorted_data as $value) {
        //     var_dump($value) ;
        //     echo ('<br>');
        //     echo ('<br>');
        // }    
        // echo ('<br>');

        // exit();
        
        //输出用户名
        $this -> assign('UserName', session('username'));
        
        //输出数据统计
        $this -> assign('AccountStatistic', AccountStatisticProcess($uid));
        
        //实例化显示
        $this -> display();
    }
    
    public function test(){
        die;
    }

}