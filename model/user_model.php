<?php

class user_model{
    
    function getuserimgsrc($uid){
        return         '<div class="comment-media">
        <a ><img src="/images/userface2.jpg" width="40" height="40"></a>
        </div>';
    }
    
    function getusernickname($id){
        return '<div class="comment-nickname">
                    <a href="#">nickname</a>
                </div>';
    }
    
}

