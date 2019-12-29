<?php

class Core {

   public $db;

    public function __construct()
    {
        $this->db = new db;
    } 



    public function snippetData($data) {
        $query = "SELECT * FROM `snippet_table`";
        $params = [];

        if ($data['searchFor'] != '') {
            $searchString = "%{$data['searchFor']}%";
            switch ($data['selectedFilter']) {
                case 'All':
                    $query .= " WHERE `title` like ? OR `data` like ? OR `tags` like ? OR `description` like ? ";
                    $params[] = $searchString;
                    $params[] = $searchString;
                    $params[] = $searchString;
                    $params[] = $searchString;

                break;

                case 'Title':
                    $query .= " WHERE `title` like ? ";
                    $params[] = $searchString;

                break;

                case 'Code':
                    $query .= " WHERE `data` like ? ";
                    $params[] = $searchString;

                break;

                case 'Tag':
                    $query .= " WHERE `tags` like ? ";
                    $params[] = $searchString;

                break;

                case 'Desc.':
                    $query .= " WHERE `description` like ? ";
                    $params[] = $searchString;

                break;

                default:
                    $query .= " WHERE `title` like ? OR `data` like ? OR `tags` like ? OR `description` like ? ";
                    $params[] = $searchString;
                    $params[] = $searchString;
                    $params[] = $searchString;
                    $params[] = $searchString;

                break;
            }
        }
        $query .= " ORDER BY `id` DESC";

        $data = db::fetchAll($query, $params) ? : [];

        for ($i = 0; $i < count( $data ); $i++) {
            $data[$i]['lang'] = strtolower($data[$i]['lang']);
            $data[$i]['title'] = htmlspecialchars($data[$i]['title']);
            $data[$i]['data'] = htmlspecialchars($data[$i]['data']);
            $data[$i]['dataRaw'] = $data[$i]['data'];
            $data[$i]['tags'] = explode(',,,', $data[$i]['tags']);
            $data[$i]['description'] = htmlspecialchars($data[$i]['description']);
        }

        return $data;
    }
    public function getThemeURL($id) {
        return db::fetchColumn(
            "SELECT `url` FROM `snippet_themes` WHERE `id`=?",
            [$id]
        );
    }


    // SELECT QUERIE
  
    public function mySelect($tblName ,$condition = " 1=1"){

         $query = "SELECT * FROM `$tblName` WHERE $condition";
         $data = db::fetchAll($query);
         return $data;
     }

   public function selectCatPosts($catId){


         $query = "SELECT snippet_code.title,snippet_code.id  FROM `snippet_code` inner join `snippet_code_cats` on (`snippet_code`.id = `snippet_code_cats`.code_id ) 
          inner join `snippet_cat` on (`snippet_cat`.id = `snippet_code_cats`.cat_id) where
         `snippet_code_cats`.cat_id = :id ";

         $data = db::fetchAll($query , ["id" => $catId]);
         return $data;
     }

    //DELETE QUERIE
    
    public function Delete($tblName , $condition = ''){
         
          $this->db->myQuery("DELETE FROM `".$tblName ."` WHERE " . $condition);
          return $this->db->execute();        
    }

    //search Query
    
    public function search($title){
          
         $same = 0; 
         $result = $this->mySelect('snippet_cat');

         foreach ($result as $value) {

           if($value['title'] == $title){
               $same = 1;
           }
         }
      return $same;         
     }


     public function CountCode($id){

        $query = "SELECT COUNT(code_id) as CountCodeId FROM `snippet_code_cats` WHERE cat_id = $id ";
        $num = db::fetchAll($query);
        return $num[0]["CountCodeId"];
     }



}
