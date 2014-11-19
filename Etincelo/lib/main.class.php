<?php
class etincelo_main {

    public function __construct(){

        try{

            $this->db = new PDO('mysql:host=localhost;dbname=etincelo','root','root');
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->db->query("SET NAMES 'utf8'");
        }catch (Exception $e){

            echo 'impossible de se connecter a la base de donnée';
            echo $e->getMessage();
            die();
        }

    }
    public function get_suiv_news($id){
        $id = $this->db->quote($id);
        $select_id_suiv = $this->db->query("SELECT id, title, content, DATE_FORMAT(date,'%d-%m-%Y') AS date, name_picture, size_picture  FROM news WHERE id > ".$id." AND id != ".$id." ORDER BY id ASC");
        if ($select_id_suiv->rowCount() == 0) {
        echo json_encode(array("return" => "Il y a plus de nouvelles news"));
        }
        $news_id_suiv = $select_id_suiv->fetch();
        echo json_encode($news_id_suiv);
    }
    public function get_prev_news($id){
        $id = $this->db->quote($id);
        $select_id_prev = $this->db->query("SELECT id, title , content, DATE_FORMAT(date,'%d-%m-%Y') AS date, name_picture, size_picture  FROM news WHERE id < ".$id." AND id != ".$id." ORDER BY id DESC");
        if ($select_id_prev->rowCount() == 0) {
            echo json_encode(array("return" => "Il y a plus d'ancienne news"));
        }
        $news_id_prev = $select_id_prev->fetch();
        echo json_encode($news_id_prev);

    }
    public function get_detailnews_byid($id){

        $select = $this->db->query("SELECT id, title, content, DATE_FORMAT(date,'%d-%m-%Y') AS date, name_picture, size_picture FROM news  WHERE id=$id");
        $news = $select->fetch();
        echo json_encode($news);
    }
    public function show_listnew($get_news_id){

        if (!empty($get_news_id)) {
            $int = $get_news_id;
            if (is_numeric($int)) {
                $int2 = 4 * $int;
                $int3 = $int2 - 4;
                $select = $this->db->query("SELECT id, title, content, DATE_FORMAT(date,'%d-%m-%Y') AS dates, name_picture, size_picture FROM news ORDER BY DATE DESC LIMIT ".$int3.",".$int2." ");
                $count = $select->rowCount();
                $news = $select->fetchAll();
            }

        }else{
          $select = $this->db->query("SELECT id, title, content, DATE_FORMAT(date,'%d-%m-%Y') AS dates, name_picture, size_picture FROM news ORDER BY DATE DESC LIMIT 0, 4");
          $count = $select->rowCount();
          $news = $select->fetchAll();
        }
        foreach ($news as $key => $new){

            $content = $new['content'];
            $extrait = substr($content, 0,100);
            $espace = strrpos($extrait, ' ');
            $extrait_content = substr($extrait, 0, $espace);
            $extrait_content.= '...';
            echo "<a data-id=\"".$new['id']."\" href=\"view.php?id=".$new['id']."\" class=\"a_news\"><div class=\"col-sm-3 col-md-3 col-lg-3\"><div class=\"thumbnail\"><img class=\"img_picture_news\" src=\"picture/news/".$new['name_picture']."\" alt=\"".$new['title']."\" style=\"height:160px;width:100%;\"><div class=\"caption\"><h3>".$new['title']."</h3><hr id=\"hr_blog\"><p>".$extrait_content."</p><br></div><div class=\"footer_thumbnail\"><p>".$new['dates']."</p></div></div></div></a>";
      }
    }

    public function show_pagination() {
        $select_for_page = $this->db->query("SELECT id FROM news");
      $count_page = $select_for_page->rowCount();
      $num_div_page = $count_page / 4;
      $num_div_page = ceil($num_div_page);
      for ($i=1; $i <= $num_div_page; $i++){
        echo "<span class=\"pagination_new_int\">".$i."</span>";
      }

    }

    public function show_picture(){

        $select_picture = $this->db->query("SELECT * FROM picture");
        $fetch_select_picture = $select_picture->fetchAll();
        foreach ($fetch_select_picture as $key => $value){
            echo "<li data-src=\"picture/photo/".$value["name"]."\"><a href=\"picture/photo/".$value["name"]."\"><img class=\"photo_block_img\" src=\"picture/photo/".$value["name"]."\"/></a></li>";
        }
    }
    public function send_mail(){
        if (isset($_POST["email"]) AND isset($_POST["name"]) AND isset($_POST["msg"])) {
            $email = $_POST["email"];
            $name = $_POST["name"];
            $msg = $_POST["msg"];
            if (!empty($email) AND !empty($name) AND !empty($msg)) {
                if(mail("joel.thomas0@laposte.net", "Demande d'information", "df")){
                    $array = array("msg" => "Le mail a correctement été envoyée !");
                echo json_encode($array);
                }else{
                                $array = array("msg" => "Un probleme avec le serveur actuellement !");
                echo json_encode($array);
                }
            }else{
                $array = array("msg" => "Certain des champs sont vides !");
                echo json_encode($array);
            }
        }else{

                    $array = array("msg" => "Vous n'avez pas correctement remplis les champs !");
                echo json_encode($array);
        }
    }
}
?>