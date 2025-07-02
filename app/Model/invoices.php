<?php
class Invoices
{
	private $pdo; 
    public $invoiceid;
    public $companyid;
	public $invoicedate;
	public $invoiceservice;
	public $servicedescription;
	public $invcurrency;
	public $serviceprice;
	public $serviceqty;
	public $invoicestatus;
	public $invoiceactive;

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

			$stm = $this->pdo->prepare("SELECT * FROM tblinvoices, tblcompanies WHERE tblinvoices.companyid = tblcompanies.companyid");
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

	public function getting($invoiceid)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tblinvoices,tblcompanies, tblusers WHERE tblinvoices.companyid = tblcompanies.companyid AND tblcompanies.defaultuser = tblusers.userid AND tblinvoices.invoiceid = ?");
			          

			$stm->execute(array($invoiceid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($invoiceid)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tblinvoices SET invoiceactive = 0 WHERE invoiceid = ?");			          

			$stm->execute(array($invoiceid));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tblinvoices SET 
						companyid            = ?,
						invoicedate            = ?,
						invoiceservice            = ?,
						servicedescription            = ?,
						serviceprice            = ?,
						serviceqty            = ?
				    WHERE invoiceid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->companyid,
						$data->invoicedate,
						$data->invoiceservice,
						$data->servicedescription,
						$data->serviceprice,
						$data->serviceqty,
						$data->invoiceid
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
		$sql = "INSERT INTO `tblinvoices` (companyid, invoicedate, invoiceservice, servicedescription, invcurrency, serviceprice, serviceqty, invoicestatus, invoiceactive) 
		        VALUES (?, ?, ?, ?, 1, ?, ?, 0, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->companyid,
					$data->invoicedate,
					$data->invoiceservice,
					$data->servicedescription,
					$data->serviceprice,
					$data->serviceqty
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Status($data)
	{
		try 
		{
			$sql = "UPDATE tblinvoices SET 
						invoicestatus            = ?

				    WHERE invoiceid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->invoicestatus,
						$data->invoiceid
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
