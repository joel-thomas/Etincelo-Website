<?php
class etinadmin {

    public function __construct(){
        session_start();
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
        if (!isset($_SESSION['csrf'])) {

            $_SESSION['csrf'] = md5(time() + rand());
        }

    }

    // Pictures


    public function upload_picture(){

        $ds = DIRECTORY_SEPARATOR;
        $storeFolder = '../picture/photo';

        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
            $targetFile =  $targetPath. $_FILES['file']['name'];
            if(move_uploaded_file($tempFile,$targetFile)){
                $insert  = $this->db->prepare("INSERT INTO picture (name, title, date) VALUES  (:name, :title, NOW())");
                $insert->bindValue(":name", $_FILES['file']['name']);
                $insert->bindValue(":title", $_FILES['file']['name']);
                $insert->execute();
            }
        }else{
            echo "error";
        }
    }
    public function ajax_preupload_picture(){
        $ds = DIRECTORY_SEPARATOR;
        $storeFolder = '../picture/photo/tmp';

        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
            $targetFile =  $targetPath. $_FILES['file']['name'];
            if(move_uploaded_file($tempFile,$targetFile)){
                echo $_FILES['file']['name'];;
            }
        }else{
            echo "error";
        }
    }
    public function ajax_refresh_picture(){
        $select = $this->db->prepare("SELECT * FROM picture ORDER BY date DESC");
        $select->execute();
        $fetch = $select->fetchAll();
        return $fetch;
    }

    public function ajax_newname_picture(){
        $id = $_POST["id"];
        $value = $_POST["value"];
        $update = $this->db->prepare("UPDATE picture SET title = :title WHERE id = :id");
        $update->bindValue(":title",$value);
        $update->bindValue(":id", $id);
        $update->execute();
    }

    public function ajax_delete_picture(){
        $id = $_POST["id"];
        $delete = $this->db->prepare("DELETE FROM picture WHERE id = :id");
        $delete->bindValue(":id" ,$id);
        $delete->execute();
    }

    public function select_picture(){
        $select_picture = $this->db->query("SELECT * FROM picture ORDER BY date DESC");
        $fetch_select_picture = $select_picture->fetchAll();
        return $fetch_select_picture;
    }

    public function ajax_get_picture(){
        var_dump($_FILES);
    }
    // Les News

    public function select_news($id){
        $id = $this->db->quote($_GET['id']);
      $select = $this->db->query("SELECT * FROM news WHERE id=$id");
      if ($select->rowCount() == 0) {
        setFlash('Il n\'y a pas de réalisation avec cette ID');
        header('Location:news.php');
        die();
      }
      $_POST = $select->fetch();
    }
       public function show_pagination() {
        $select_for_page = $this->db->query("SELECT id FROM news");
      $count_page = $select_for_page->rowCount();
      $num_div_page = $count_page / 4;
      $num_div_page = ceil($num_div_page);
      for ($i=1; $i <= $num_div_page; $i++){
        echo "<span class=\"pagination_admin_int\">".$i."</span>";
      }

    }
    public function save_news(){

        if (isset($_POST['title'])) {
          $this->checkCsrf();

          $title = $this->db->quote($_POST['title']);
          $content = $this->db->quote($_POST['content']);

        // Sauvegarde de la news

        if (isset($_GET['id'])) {
          $id = $this->db->quote($_GET['id']);
          $this->db->query("UPDATE news SET title=$title, content=$content WHERE id=$id");
        }else{
          $this->db->query("INSERT INTO news SET title=$title, content=$content");
          $_GET['id'] = $this->db->lastInsertId();
        }

        // Envoie des images

        if ($_FILES['picture']['error'] == 0) {
          $news_id = $_GET['id'];
          $image = $_FILES['picture'];
          $extension = pathinfo($image['name'], PATHINFO_EXTENSION);

          $extensionautorise = array('jpg','jpeg','gif','png','JPG','JPEG','PNG');
          if (in_array($extension, $extensionautorise)) {

            $name_picture = $news_id.'.'.$extension;
            $size_picture = $image['size'];
            move_uploaded_file($image['tmp_name'],'../picture/news/'. $name_picture . '');

              $name_picture = $this->db->quote($name_picture);
              $this->db->query("UPDATE news SET name_picture = $name_picture, size_picture = $size_picture WHERE id = $news_id");
              $this->setFlash('La news a bien été enregistré');
              header('Location:news.php');
              // die();
          }
        }
        $this->setFlash('La news a bien été enregistré');
            header('Location:news.php');
            // die();
          }
    }
    public function ajax_pagination_news($id){
    if (!empty($id)) {
            $id_last = $id * 4;
            $id_first = $id_last - 4;
            $select = $this->db->query("SELECT * FROM news ORDER BY DATE DESC LIMIT ".$id_first.", ".$id_last." ");
            $news = $select->fetchAll();
        }else{
            $select = $this->db->query('SELECT * FROM news ORDER BY DATE DESC LIMIT 0, 4');
            $news = $select->fetchAll();

        }
        foreach ($news as $news_for) {
            $news_for["content"] = substr($news_for["content"],0,100);
            $csrf = $this->csrf();
            $value = "<tr><td>".$news_for["id"]."</td><td>".$news_for["title"]."</td><td height=50>".$news_for["content"]."...</td><td>".$news_for["date"]."</td><td><img src=\"../picture/news/".$news_for["name_picture"]."\" style=\"height:50px; width:70px;\"></td><td><a class=\"btn btn-default\" style=\"margin:5px auto;width:130px;\" href=\"news_edit.php?id=".$news_for["id"]."&".$csrf."\">Editer</a><a class=\"btn btn-default\" style=\"margin:5px auto;width:130px;\" href=\"?delete=".$news_for["id"]."&".$csrf."\" onclick=\"return confirm('Tu est sur de vouloir supprimer la news');\">Supprimer</a></td></tr>";
            echo($value);
        }
    }

    public function show_news($id = null){
        if (!empty($id)) {
            $id_last = $id * 4;
            $id_first = $id_last - 4;
            $select = $this->db->query("SELECT * FROM news ORDER BY DATE DESC LIMIT ".$id_first.", ".$id_last." ");
            $news = $select->fetchAll();
        }else{
            $select = $this->db->query('SELECT * FROM news ORDER BY DATE DESC LIMIT 0, 4');
            $news = $select->fetchAll();

        }
            return $news;
    }

    public function delete_news($id){
        $this->checkCsrf();
        $id = $this->db->quote($_GET['delete']);
        $select_id = $this->db->query("SELECT * FROM news WHERE id=$id");
        $array_select = $select_id->fetch();
        $chemin_picture_news = '../picture/news/' . $array_select['name_picture'] . '';
        if (file_exists($chemin_picture_news)) {
            unlink($chemin_picture_news);

            if ($this->db->query("DELETE FROM news WHERE id=$id")) {
                $this->setFlash('La news a bien été supprimé de la base de donnée!');
                header('Location:news.php');
                die();
            }
        }else{
            $this->setFlash('La base de donnée ne trouve pas d\'image et ne peut donc supprimer la news. Veuiller la supprimer manuellement','danger');
            header('Location:news.php');
            die();
        }
    }

public function flash(){

    if (isset($_SESSION['flash'])) {

        $type = $_SESSION['flash']['type'];
        $message = $_SESSION['flash']['message'];
        extract($_SESSION['flash']);
        unset($_SESSION['flash']);
        return "<div class='alert alert-".$type." '><p>".$message."</p></div>";
    }
}

public function setFlash($msg, $type = 'info'){

    $_SESSION['flash']['message'] = $msg;
    $_SESSION['flash']['type'] = $type;
}

public function csrf(){

    return 'csrf=' . $_SESSION['csrf'];
}

public function csrfInput(){

    return '<input type="hidden" value="'.$_SESSION['csrf'].'" name="csrf">';
}

public function checkCsrf(){

    if ((isset($_POST['csrf']) && $_POST['csrf'] == $_SESSION['csrf']) || (isset($_GET['csrf']) && $_GET['csrf'] == $_SESSION['csrf'])) {
        header('Location: new_edit.php');
    }else{

        // header('Location: jeton.php');
        echo "ERRUR JETON<br>";
        echo "SESSION : ".$_SESSION["csrf"];
        echo "<br>";
        echo "POST : ".$_POST["csrf"];
        die();
    }
}

// FORM

function input($id){


        if (isset($_POST[$id])) {

            $value = $_POST[$id];

        }else{

            $value = '';
        }

        return "<input type='text' class='form-control' name='$id' id='$id' value='$value' placeholder='Le titre de la news'>";
    }

    function textarea($id){

        if (isset($_POST[$id])) {

            $value = $_POST[$id];

        }else{

            $value = '';
        }

        return "<textarea id='editor1' rows='8' class='form-control' name='$id'>$value</textarea>";
    }

    function files($id){

    return "<input type='file' name='$id' class='picture-control'>";
    }

}
?>