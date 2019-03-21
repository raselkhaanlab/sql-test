<?php 
class connection{
	  private $host;
	  private $db_name;
	  private $user_name;
	  private $user_password;
	  private $options=[
	  			\PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
	  			\PDO::ATTR_EMULATE_PREPARES   => false,
	  			\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,

	  ];

	  public function __construct($host,$db_name,$user_name,$password){
	  						$this->host=$host;
	  						$this->db_name=$db_name;
	  						$this->user_name=$user_name;
	  						$this->user_password=$password;
	  }


	   public function getDbConnection(){

	   			try{
	   				$connect=new \PDO("mysql:host=$this->host;dbname=$this->db_name",$this->user_name,$this->user_password,$this->options);

	   				return $connect;
	   			}
	   			catch(\PDOException $e){
	   				 print $e->getMessage();
	   			}}



	   			public function selectAll($table_name){
	   						try{

	   						$sql="select *  from $table_name";
	   						$statement=$this->getDbConnection()->prepare($sql);
	   						$statement->execute();
	   						$results=$statement->fetchAll(PDO::FETCH_OBJ);
	   						$statement=null;
	   						return $results;
	   						}
	   						catch(\PDOException $e){

	   							 echo "PDO EXCEPTION OCCURED:: ".$e->getMessage();
	   						}
	   			}


	   			public function resultExecuted(){
	   						
	   						   $sql="select con.campaign_id, cam.name, count(con.lander_id) 'lander_count',sum(con.revenue) 'total_revenue' from conversions con join campaigns cam on con.campaign_id=cam.id group by con.campaign_id";

	   						   try{

	   						   		$statement=$this->getDbConnection()->prepare($sql);
	   						   		$statement->execute();
	   						   		$results=$statement->fetchAll(PDO::FETCH_OBJ);
	   						   		$statement=null;
	   						   		return $results;

	   						   }   
	   						   catch(\PDOException $e){

	   						   	  echo "Exception : ".$e->getMessage();
	   						   }



	   			}

	   }
