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
        // $temp = '';
        $counter = 0;
        $daily_data= [];
        $daily_spend_income = [];

        foreach($transaction_data as $k=>$value) {
            // var_dump($value) ;
            // echo($value['money']) ;
            // echo ('<br>');

            if($value['time'] != $transaction_data[$k-1]['time'] ){
                // echo('  -------        ') ;
                // echo($value['money']) ;
                // echo('  -------        ') ;
                // echo($value['time']) ;
                
                // echo ('<br>');
                // echo ($k);
                // echo ('<br>');



                // $temp = $value['time'];

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
                    $same_date_data = [];

                } 
                array_push($same_date_data,$value);
                $counter+=1;

                /// if is last index but is same time then push
                if($k == count($transaction_data)-1){
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
                        $same_date_data = [];
    
                    } 
                } 


            }
            /// if is last index but is same time then push
            else if($k == count($transaction_data)){
                // echo ('<br>');
                // echo ($k);
                // echo ('<br>');
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
                    $same_date_data = [];

                } 
            }
            else{
                // echo ('<br>');
                // echo ($k);
                // echo ('<br>');
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
        // echo('<br>hello <br>');
        // foreach($ListData['data'] as $value) {
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
        

        // if(IS_POST){
        if(isset($_POST['chk_id'])){
            $chk_id = array();
            $chk_id = $_POST['chk_id'];
            $uid = session('uid');


            $refURL = GetRefURL();
            $Msg = DelMultipleIdData($uid, $chk_id);

            if($Msg[0]) {
                ClearDataCache(); //清除缓存
                ShowAlert($Msg[1],$refURL);
                $this -> display('Public/common');
            }else{
                ShowAlert($Msg[1],$refURL);
                $this -> display('Public/common');
            }

        }


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