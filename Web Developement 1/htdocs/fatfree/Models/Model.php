<?php 

class Model extends DB\SQL\Mapper {

	protected $db; // db connection

	public function __construct($table){

		// connection to mysql database
		$this->db = new DB\SQL(
			'mysql:host=localhost;port=3304;dbname=fsd10_class;charset=UTF8',
			'fsduser',
			'myDBpw'
		);
		// create the mapper
		parent::__construct($this->db, $table);
		
	}

	/**
	 * Fetch all the records for the database
	 */
	public function all(){
		$this->load();	// SELECT * FROM [table provided]
		return $this->query;
	}


}