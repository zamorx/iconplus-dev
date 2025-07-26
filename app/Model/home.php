<?php
class Home
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

	public function listUsers()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblusers");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function listCompanies()
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

	public function listInvoices()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblinvoices, tblcompanies WHERE tblinvoices.companyid = tblcompanies.companyid AND YEAR(tblinvoices.invoicedate) = 2025");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function listInvoicesMont()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblinvoices WHERE MONTH(tblinvoices.invoicedate) = date(m)");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}
