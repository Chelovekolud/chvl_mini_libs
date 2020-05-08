<?php
class Controller
{
    protected $page;

    function __construct($page)
    {
        $this->page = $page;
    }

    public function router()
    {
        if (!$this->page)
        {
            $this->page = '/index.php';
        }
        /*===============================================*/
        $host = 'localhost';
        $user = 'admin';
        $pass = '%-**&4620jdgD';
        $db_name = 'webapp';
        /*===============================================*/
        $link = mysqli_connect($host, $user, $pass, $db_name);
        $sql = mysqli_query($link, "SELECT * FROM pages where `page` = '$this->page'");
        while ($result = mysqli_fetch_array($sql))
        {
            /*============================================*/
            $title = $result['title'];
            $keywards = $result['keywards'];
            $description = $result['description'];
            $content = $result['content'];
            /*============================================*/

            $this->page_constructor($title, $keywards, $description, $content);

        }
    }

    protected function page_constructor($title, $keywards, $description, $content)
    {
        require_once ('main.tpl');
    }
}

class User
{
	protected $id;

	function __construct($id)
	{
		$this->id = $id;
	}

	function view{
        /*===============================================*/
        $host = 'localhost';
        $user = 'admin';
        $pass = '%\-**&4620jdgD';
        $db_name = 'webapp';
        /*===============================================*/
        $link = mysqli_connect($host, $user, $pass, $db_name);
        $sql = mysqli_query($link, "SELECT * FROM pages where `page` = '$this->page'");
        while ($result = mysqli_fetch_array($sql))
        {
        	header('Content: application/json');
        }

	}
?>