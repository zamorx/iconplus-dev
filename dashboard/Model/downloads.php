<?php
class Downloads
{
	private $pdo; 
    public $downloadid;
	public $osname;
    public $downloadname;
	public $downloadpath;
	public $categoryid;
	public $downloadactive;

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

			$stm = $this->pdo->prepare("SELECT * FROM tbldownloads, tblcategories WHERE tbldownloads.categoryid = tblcategories.categoryid AND tbldownloads.downloadactive = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListCategory()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblcategories WHERE  tblcategories.categoryactive = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($downloadid)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbldownloads, tblcategories WHERE tbldownloads.categoryid = tblcategories.categoryid AND downloadid = ?");
			          

			$stm->execute(array($downloadid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($downloadid)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tbldownloads SET downloadactive = 0 WHERE downloadid = ?");			          

			$stm->execute(array($downloadid));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbldownloads SET 
						categoryid            = ?,
						osname                = ?,
						downloadname            = ?,
						downloadpath           = ?

				    WHERE downloadid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->categoryid,
						$data->osname,
						$data->downloadname,
						$data->downloadpath,
						$data->downloadid
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
		$sql = "INSERT INTO `tbldownloads` (categoryid, osname, downloadname, downloadpath, downloadactive) 
		        VALUES (?, ?, ?, ?, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->categoryid,
					$data->osname,
					$data->downloadname,
					$data->downloadpath
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
