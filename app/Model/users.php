<?php
class Users
{
	private $pdo;
    
    public $userid;
	public $fname;
	public $companyid;
	public $userrol;
	public $useremail;
	public $userphone;
	public $billinguser;


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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblusers, tblcompanies WHERE tblusers.companyid = tblcompanies.companyid AND tblusers.activeuser = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListCompanies()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblcompanies where companyactive = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($userid)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tblusers, tblcompanies WHERE tblusers.companyid = tblcompanies.companyid AND userid = ?");
			          

			$stm->execute(array($userid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($userid)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tblusers SET activeuser = 0 WHERE userid = ?");			          

			$stm->execute(array($userid));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tblusers SET 
						fname            = ?,
						companyid            = ?,
						userrol            = ?,
						useremail            = ?,
						userphone            = ?,
						billinguser            = ?

				    WHERE userid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->fname,
						$data->companyid,
						$data->userrol,
						$data->useremail,
						$data->userphone,
						$data->billinguser,
						$data->userid
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `tblusers` (fname, companyid, userrol, useremail, userphone, billinguser, activeuser) 
		        VALUES (?, ?, ?, ?, ?, ?, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->fname,
					$data->companyid,
					$data->userrol,
					$data->useremail,
					$data->userphone,
					$data->billinguser
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
