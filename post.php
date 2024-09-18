<?php
class post
{
    private $error ="";
    public functioncreate_post($data)
    {
        if(empty($data['post'])) 
        {
            $post= addslashes

        }else{
            $this->error .= "please type something to post!<br>";

        }
        return $this->error;
    }

}
