<?php
class Companies
{
	private $pdo; 
    public $companyid;
    public $companyname;
	public $companyruc;
	public $companyaddress;
	public $companycity;
	public $companycountry;
	public $companyactive;
	public $userid;
	public $defaultuser;

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

			$stm = $this->pdo->prepare("SELECT * FROM tblcompanies where companyactive = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListUsers()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblcompanies, tblusers WHERE tblusers.companyid = tblcompanies.companyid AND tblusers.billinguser = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($companyid)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tblcompanies, tblusers WHERE tblusers.companyid = tblcompanies.companyid AND tblusers.billinguser = true AND tblcompanies.companyid = ?");
			          

			$stm->execute(array($companyid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($companyid)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tblcompanies SET companyactive = 0 WHERE companyid = ?");			          

			$stm->execute(array($companyid));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tblcompanies SET 
						companyname            = ?,
						companyruc            = ?,
						companyaddress         = ?,
						companycity            = ?,
						companycountry         = ?, 
						defaultuser            = ?
				    WHERE companyid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->companyname,
						$data->companyruc,
						$data->companyaddress,
						$data->companycity,
						$data->companycountry,
						$data->defaultuser,
						$data->companyid
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
		$sql = "INSERT INTO `tblcompanies` (companyname, companyruc, companyaddress, companycity, companycountry, defaultuser, companyactive) 
		        VALUES (?, ?, ?, ?, ?, ?, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->companyname,
					$data->companyruc,
					$data->companyaddress,
					$data->companycity,
					$data->companycountry,
					$data->defaultuser
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
