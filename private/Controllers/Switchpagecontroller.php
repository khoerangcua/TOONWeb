<?php
class SwichPageControler
{
    public function SwitchPage()
    {
        $to = isset($_GET['to']) ? $_GET['to'] : -1;
        if ($to == -1) {
            $to = isset($_POST['to']) ? $_POST['to'] : -1;
        }
        if ($to != -1) {
            
            switch ($to) {
                case 'chitiettincanban':
                    include_once("public/Views/chitiettincanban.php");
                    break;
                
              
            }
        } else {
            include_once("public/Views/chitiettincanmua.php");
        }
    }
}
?>

