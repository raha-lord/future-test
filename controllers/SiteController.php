<?php

class SiteController
{
    public function  actionIndex()
    {
        $commentsList = Comment::getCommentList();
        if (isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            if (Comment::checkInputDate($name,$comment))
            {
                $result = Comment::createComment($name,$comment);
                header("Refresh: 0");
            }
        }
        require_once (ROOT.'/views/site/index.php');
        return true;
    }
}