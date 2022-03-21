<?php
/**
 * Author : Abhijth Shetty
 * Date   : 12-04-2019
 * Desc   : This is a controller file for badgeGetMasterList Action
 */
class badgeGetMasterListAction extends baseAction{
	/**
   * @OA\Get(path="?methodName=badge.getMasterList", tags={"Badges"}, 
   * @OA\Parameter(parameter="applicationKey", name="applicationKey", description="The applicationKey specific to this event",
   *   @OA\Schema(type="string"), in="query", required=false),
   * @OA\Parameter(parameter="user_id", name="user_id", description="The user ID specific to this event",
   *   @OA\Schema(type="string"), in="query", required=false),
   * @OA\Parameter(parameter="access_token", name="access_token", description="The access_token specific to this event",
   *   @OA\Schema(type="string"), in="query", required=false),
   * @OA\Response(response="200", description="Success, Everything worked as expected"),
   * @OA\Response(response="201", description="api_method does not exists"),
   * @OA\Response(response="202", description="The requested version does not exists"),
   * @OA\Response(response="203", description="The requested request method does not exists"),
   * @OA\Response(response="204", description="The auth token is invalid"),
   * @OA\Response(response="205", description="Response code failure"),
   * @OA\Response(response="206", description="paramName should be a Valid email address"),
   * @OA\Response(response="216", description="Invalid Credential, Please try again."),
   * @OA\Response(response="228", description="error"),
   * @OA\Response(response="231", description="Device token is mandatory."),
   * @OA\Response(response="232", description="Custom Error"),
   * @OA\Response(response="245", description="Player is offline"),
   * @OA\Response(response="404", description="Not Found")
   * )
   */
  public function execute()
  {
    $badgeLib = autoload::loadLibrary('queryLib', 'badge');
    $userLib = autoload::loadLibrary('queryLib', 'user');
    $questLib = autoload::loadLibrary('queryLib', 'quest');
    $result = $seasonLeagueResult = $seasonDetailResult = array();
    date_default_timezone_set("Asia/Kolkata");
    $masterbadgeList = $badgeLib->getMasterbadgeList();
    $seasonLeagueList = $badgeLib->getCurrentSeasonLeague();
    /*foreach($seasonLeagueList as $check_sll)
    {
      $expir= date('Y-m-d H:i:s',strtotime('+04 minutes',strtotime($check_sll['start_time'])));
      $timestamp = date("Y-m-d H:i:s");
      if($timestamp>$expir){
        $badgeLib->insertSeasonLeague(array(
          'season_name' => $check_sll['season_name'],
          'start_time' => date("Y-m-d H:i:s"),
          'expire_days' => $check_sll['expire_days'],
          'status' => 1,
          'created_at' => date('Y-m-d H:i:s')
      ));
      }
    }*/
    
    
    foreach($seasonLeagueList as $ulsll)
    {
      $userDetail = $userLib->getUserDetail($this->userId);
    if(empty($userDetail['season_id'])){ //!empty($userDetail['old_relics']) && $userDetail['old_relics']==0 && 
        $userLib->updateUser($this->userId, array('season_id' => $ulsll['season_id']));
      }
     /* $userList = $userLib->getUserList();
      foreach($userList as $ul){
      $ulResetData = $badgeLib->getUserRelicsDiff($ul['relics']);
      $ulOldtrophies=$ul['relics'];
        if($ul['season_id']!=$ulsll['season_id']){  //!empty($ul['season_id']) &&  && $ul['old_relics']<=0 
          if(!empty($ulResetData)){
            /* Reset with Percentage Logic*/
          /*  $minimumBadgeValue = $badgeLib->getMasterBadgeMinimumList();
            $userDetail = $userLib->getUserDetail($ul['user_id']);
            $userRelicsValue= $userDetail['relics'];
            $resetRelicsValue =$ulResetData['reset_value'];
            $getRemainCups = $userDetail['relics']-$minimumBadgeValue['min_relic_count'];
            $resetPerc = $ulResetData['reset_percentage']/100;
            $getPercDeductVal = $getRemainCups-($getRemainCups*$resetPerc);
            $getResetVal= $getPercDeductVal+$minimumBadgeValue['min_relic_count'];
            /* Reset with Percentage Logic*/
            /*if($ul['season_id']!=$ulsll['season_id'] && $ul['relics']>$minimumBadgeValue['min_relic_count']){  //!empty($ul['season_id']) && 
              $userLib->updateUser($ul['user_id'], array('relics' => floor($getResetVal), 'old_relics'=>$ulOldtrophies, 'season_id'=>$ulsll['season_id']));
            }
            
          }
        }
      }*/
    }

    
    $userDetail = $userLib->getUserDetail($this->userId);
    $resetData = $badgeLib->getUserRelicsDiff($userDetail['relics']);

    /* Reset with Percentage Logic*/
    $minimumBadgeValue1 = $badgeLib->getMasterBadgeMinimumList();
    $ulResetData = $badgeLib->getUserRelicsDiff($userDetail['relics']);
    if($minimumBadgeValue1['min_relic_count']<=$userDetail['relics']){
      $userRelicsValue1= $userDetail['relics'];
      $resetRelicsValue1 =$ulResetData['reset_value'];
      $getRemainCups1 = $userRelicsValue1-$minimumBadgeValue1['min_relic_count'];
      $resetPerc1 = $ulResetData['reset_percentage']/100;
      $getPercDeductVal1 = $getRemainCups1-($getRemainCups1*$resetPerc1);
      $getResetValFuture= $getPercDeductVal1+$minimumBadgeValue1['min_relic_count'];
      /* Reset with Percentage Logic*/
    }

    $check_reset=0; 
    $oldtrophies_count=$userDetail['old_relics'];
    if($userDetail['old_relics']>0){
      $check_reset=1;
      $userLib->updateUser($this->userId, array('old_relics'=>0));
    } 

    if(empty($userDetail['season_id']) || $userDetail['season_id']==0){ //!empty($userDetail['old_relics']) && $userDetail['old_relics']==0 && 
      $userLib->updateUser($this->userId, array('season_id' => $sll['season_id']));
    }
    /*foreach($seasonLeagueList as $sll)
    {
      if(!empty($resetData)){
        if(empty($userDetail['season_id']) || $userDetail['season_id']==0){ //!empty($userDetail['old_relics']) && $userDetail['old_relics']==0 && 
          $userLib->updateUser($this->userId, array('old_relics'=>0,'season_id' => $sll['season_id']));
          $check_reset=1;
          if($userDetail['old_relics']>0){
            $userLib->updateUser($this->userId, array('old_relics'=>0));
          }
        }elseif(!empty($userDetail['season_id']) && $userDetail['season_id']!=$sll['season_id'] ){  //&& $userDetail['old_relics']>0 //|| $userDetail['season_id']!=$sll['season_id']
         // if(!empty($resetData)){
            $userLib->updateUser($this->userId, array('old_relics'=>0,'season_id'=>$sll['season_id'])); //'relics' => $resetData['reset_value'], 
            $check_reset=1;
         // }
        }
      }
    }*/
    if(!empty($resetData)){
      $temp3 = array();
      $temp3['league_id'] = $resetData['master_badge_id'];
      $temp3['title'] = $resetData['title'];
      $temp3['min_relic_count'] = $resetData['min_relic_count'];
      $temp3['max_relic_count'] = $resetData['max_relic_count'];
      //$temp3['reset_value'] = $resetData['reset_value'];
      $seasonLeagueResult = $temp3;
    }
    $masterbadgeList = $badgeLib->getMasterbadgeList();
    $seasonLeagueList = $badgeLib->getCurrentSeasonLeague();
    $userDetail = $userLib->getUserDetail($this->userId);
    $checkBadge = $badgeLib->getUserRelicsDiff($userDetail['relics']);
    foreach($masterbadgeList as $item)
    {
      $temp = array();
      $temp['master_badge_id'] = $item['master_badge_id'];
      $temp['title'] = $item['title'];
      $temp['min_relic_count'] = $item['min_relic_count'];
      $temp['max_relic_count'] = $item['max_relic_count'];
      $temp['reset_value'] = $item['reset_value'];
      $userBadge = $badgeLib->getUserBadgeListForBadgeId($this->userId, $item['master_badge_id']);
      $temp['is_achieved'] = empty($userBadge)?"False":"True";
      $result[] = $temp;
    }
    /*foreach($seasonLeagueList as $item2)
    {
      $temp2 = array();
      $temp2['season_id'] = $item2['season_id'];
      $temp2['season_name'] = $item2['season_name'];
      $temp2['start_time'] = $item2['start_time'];
      //$temp2['expire_days'] = date('Y-m-d H:m:s', strtotime($item2['start_time']. ' + '.$item2['expire_days'].' days'));
      //$temp2['expire_days'] =date('Y-m-d H:i:s',strtotime('+02 minutes',strtotime($temp2['start_time'])));
      $temp2['expire_days'] =$item2['expiry_date'];
      $temp2['status'] = $item2['status'];
      $datediff = abs(strtotime($temp2['expire_days']) - strtotime($temp2['start_time']));
      $temp2['msg'] = "The Season runs for ".round($datediff/60/60/24)." days. At the start of the next Season. all player's cups will reset down based on below Warrior Level.";
      //$userBadge = $badgeLib->getUserBadgeListForBadgeId($this->userId, $item['master_badge_id']);
      //$temp2['is_achieved'] = empty($userBadge)?"False":"True";
      $temp2['resettrophies_count'] = $userDetail['relics'];
      $temp2['oldtrophies_count'] = $oldtrophies_count;
      $actualdeduct = $oldtrophies_count-$userDetail['relics'];
      $temp2['deductedtrophies_count'] = ($actualdeduct<=0)?0:$actualdeduct;
      $temp2['nextreset_trophy_count'] =!empty($getResetValFuture)?floor($getResetValFuture):0;
      $temp2['is_reset'] = $check_reset;
      $seconds = strtotime($temp2['expire_days']) - time();
      if($check_reset==1){ 
        $temp2['old_badge_id']=$resetData['master_badge_id'];
        $temp2['new_badge_id']=$checkBadge['master_badge_id'];
      }
      $temp2['remaining_time'] = $seconds;
      $seasonDetailResult = $temp2;
    }*/
    
    $this->setResponse('SUCCESS');
    return array('badge_list' => $result, 'season_league' => $seasonLeagueResult);//, 'season_detail' => $seasonDetailResult
  }
}
