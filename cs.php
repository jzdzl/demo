<?php 

 public function is_blind_date()
    {   
        $zl ='zhangliang';
        $member_id = intval($this->user['user_id']);
        if(!$member_id)
        {
            $this->errorOutput(NO_MEMBER_ID);
        }
        $sql = "SELECT * FROM ".DB_PREFIX."blind_date WHERE member_id =".$member_id;
        $ret = $this->db->query_first($sql);
        if(is_array($ret))
        {
            $return = array('message' => 1);
        }
        else
        {
            $return = array('message' => 0);
        }
        $this->addItem($return);
        $this->output();
    }


?>
