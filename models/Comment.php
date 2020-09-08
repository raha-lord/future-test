<?php


class Comment
{
    const LIMIT = 10;
    public static function createComment($name,$comment)
    {
        $date = date('Y-m-d H:i');
        $db = DB::getConnection();
        $sql = 'INSERT INTO comments (name,comment,date) value (:name,:comment,:date)';
        $result = $db->prepare($sql);
        $result->bindParam(':name',$name,PDO::PARAM_STR);
        $result->bindParam(':comment',$comment,PDO::PARAM_STR);
        $result->bindParam(':date',$date,PDO::PARAM_STR);
        $result->execute();
        return 0;
    }

    public static function getCommentList()
    {

            $db = DB::getConnection();
            $commentList = array();
            $results = $db->query('SELECT * FROM comments ORDER BY date DESC LIMIT '.self::LIMIT);
            $i = 1;

            while ($row = $results->fetch()) {
                $commentList[$i]['name'] = $row['name'];
                $commentList[$i]['comment'] = $row['comment'];
                $row['date'] = date_create($row['date']);
                $row['date'] = date_format($row['date'],'H:i d.m.Y');
                $commentList[$i]['date'] = $row['date'];
                $i++;
            }

            return $commentList;
    }
    public static function checkInputDate($name,$comment)
    {
        if (($name!='')&&($comment!=''))
            return true;
        return false;
    }
}