<?php
class Organizations
{
	private $pdo; 
    public $organizationid;
    public $organizationname;
	public $organizationruc;
	public $organizationaddress;
	public $organizationstate;
	public $organizationcountry;
	public $organizationweb;
	public $organizationphone;
	public $organizationemail;
	public $organizationactive;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = dbconnection::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function getting($organizationid)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tblorgs, tbllogins WHERE tbllogins.organizationid = tblorgs.organizationid AND tblorgs.organizationid = ?");
			          

			$stm->execute(array($organizationid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tblorgs SET 
						organizationname            = ?,
						organizationruc            = ?,
						organizationaddress         = ?,
						organizationstate            = ?,
						organizationcountry         = ?, 
						organizationweb            = ?,
						organizationphone            = ?,
						organizationemail            = ?
				    WHERE organizationid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->organizationname,
						$data->organizationruc,
						$data->organizationaddress,
						$data->organizationstate,
						$data->organizationcountry,
						$data->organizationweb,
						$data->organizationphone,
						$data->organizationemail,
						$data->organizationid
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
