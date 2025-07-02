<?php
class Categories
{
	private $pdo; 
    public $categoryid;
    public $categoryname;
	public $categoryactive;

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

			$stm = $this->pdo->prepare("SELECT * FROM tblcategories where categoryactive = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($categoryid)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tblcategories WHERE categoryid = ?");
			          

			$stm->execute(array($categoryid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($categoryid)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tblcategories SET categoryactive = 0 WHERE categoryid = ?");			          

			$stm->execute(array($categoryid));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tblcategories SET 
						categoryname            = ?
				    WHERE categoryid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->categoryname,
						$data->categoryid
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
		$sql = "INSERT INTO `tblcategories` (categoryname, categoryactive) 
		        VALUES (?, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->categoryname
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
