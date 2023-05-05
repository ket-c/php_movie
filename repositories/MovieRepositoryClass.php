<?php
namespace respositiories;
include_once __DIR__.'/../configs/Database.php';
use configs\Database as DatabaseConnection;
class MovieRepositoryClass extends DatabaseConnection
{
    public function saveNewMovie($movieTitle, $movieDescription, $movieYear, $movieRating, $movieImageUrl, $movieTrailerUrl, $createdBy, $categoryID){

        $sqlQ = 'INSERT INTO movies (movie_title, movie_description, movie_year, movie_rating, movie_image_url, movie_trailer_url, created_by) VALUE(?,?,?,?,?,?,?)';
        if (!$bindP= $this->db->prepare($sqlQ)) {
           return false;
        }
        else{
            $bindP -> bindParam(1, $movieTitle);
            $bindP -> bindParam(2, $movieDescription);
            $bindP -> bindParam(3, $movieYear);
            $bindP -> bindParam(4, $movieRating);
            $bindP -> bindParam(5, $movieImageUrl);
            $bindP -> bindParam(6, $movieTrailerUrl);
            $bindP -> bindParam(7, $createdBy);
            $bindP -> bindParam(8, $$categoryID);
            if ($bindP->execute()) {
                return true;
            }
            else{
                return false;
            }
        }
    }
    public function fetchAllMovies()
    {
        $sqlQ = 'SELECT * FROM movies ORDER BY id DESC LIMIT 30';
        if (!($bindP = $this->db->prepare($sqlQ))) {
            $result = false;
        } else {
            if ($bindP->execute()) {
                $result = $bindP->fetchAll();
            } else {
                $result = false;
            }
        }
        return $result;
    }
    public function fetchMovie($id)
    {
        $sqlQ = 'SELECT * FROM movies WHERE id = ? LIMIT 1';
        if (!($bindP = $this->db->prepare($sqlQ))) {
            $result = null;
        } else {
            $bindP->bindParam(1, $id);
            if ($bindP->execute()) {
                $result = $bindP->fetch();
            } else {
                $result = null;
            }
        }
        return $result;
    }
    public function updateMovie($id, $movieTitle, $movieDescription, $movieYear, $movieRating, $movieImageUrl, $movieTrailerUrl, $updatedBy, $categoryID){
    
        // $date_created = date ('Y-m-d H:i:s');
        $sqlQ = 'UPDATE movies SET movie_title = ?, movie_description =?, movie_year = ?, movie_rating =?, movie_image_url = ?, movie_trailer_url = ?, updated_by = ? WHERE id =?';
        if (!$bindP= $this->db->prepare($sqlQ)) {
            return false;
        }
        else{
            $bindP->bindParam(1, $movieTitle);
            $bindP->bindParam(2, $movieDescription);
            $bindP->bindParam(3, $movieYear);
            $bindP->bindParam(4, $movieRating);
            $bindP->bindParam(5, $movieImageUrl);
            $bindP->bindParam(6, $movieTrailerUrl);
            $bindP->bindParam(7, $updatedBy);
            $bindP->bindParam(8, $$categoryID);
            $bindP->bindParam(9, $id);
            if ($bindP->execute()) {
               return true;
            }
            else{
                return false;
            }
        }
    }
}
