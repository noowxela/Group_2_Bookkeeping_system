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
        $daily_data= [];
        $daily_spend_income = [];

        foreach($transaction_data as $value) {
            // var_dump($value) ;
            // echo ('<br>');
            if($value['time'] != $temp){

                $counter+=1;
                if($counter != 0){
                    $sum_income =0;
                    $sum_spend  =0;
                    foreach($same_date_data as $v){
                        if($v['typeid']==1){
                            $sum_income+=$v['money'];
                        }elseif($v['typeid']==2){
                            $sum_spend+=$v['money'];
                        }
                        
                    }

                    array_push($daily_data,['income'=> number_format($sum_income,2) ,'expenses'=>number_format($sum_spend,2)]);
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
        $this -> assign('daily_data', $daily_data);

        // echo ('<br>');

        // foreach($sorted_data as $value) {
        //     var_dump($value) ;
        //     echo ('<br>');
        //     echo ('<br>');
        // }    
        // foreach($daily_data as $value) {
        //     var_dump($value) ;
        //     echo ('<br>');
        //     echo ('<br>');
        // }    
        // echo ('<br>');
        
        // var_dump($sorted_data) ;
        // echo ('<br>');
        // echo ('<br>');
        // var_dump($daily_data) ;
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