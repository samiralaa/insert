<?php
class model
{
    public $server="localhost";
    public $username="root";
    public $password="";
    public $db_name="get_jobs";
    public $con;
    
    function __construct()
    {
      $this->con  =mysqli_connect($this->server,$this->username,$this->password,$this->db_name);
      
    }



    public function insert()
    {
        if(isset($_POST['submit']))
        {
            if (isset($_POST['username'])
            &&isset($_POST['email'])&&isset($_POST['password'])&&
            isset($_POST['confirm_password'])) {
                if (!empty($_POST['username'])
                &&!empty($_POST['email'])&&!empty($_POST['password'])&&
                !empty($_POST['confirm_password']))  {

                    $username=$_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $confirm_password = $_POST['confirm_password'];
                    $query="INSERT INTO `users`(username,email,password,confirm_password)VALUE('$username','$email','$password','$confirm_password')";
                    $result=mysqli_query($this->con,$query);
            }   
        }
    }
}
    public function dataUsers()
    {
       $data=[];
       $sql="SELECT * FROM `users`";
       $query_user=mysqli_query($this->con,$sql);
       while ($row=mysqli_fetch_assoc($query_user)) {
           $data[]=$row; 
       }
       return $data;
    }
    
}
