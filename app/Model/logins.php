<?php
class Logins
{
	private $pdo; 
    public $uid;
    public $fname;
	public $lname;
	public $username;
	public $email;
	public $password;
	public $idrol;
	public $aboutme;
	public $organizationid;
	public $loginoccupation;
	public $loginphone;
	public $activelogin;

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

			$stm = $this->pdo->prepare("SELECT * FROM tbllogins, tblroles WHERE tbllogins.idrol = tblroles.idrol AND TBLLOGINS.activelogin = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Login()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbllogins, tblroles WHERE tbllogins.idrol = tblroles.idrol AND TBLLOGINS.activelogin = true AND username = ? AND password = ?");
			$stm->execute(array($this->username, hash('sha256', $this->password)));

			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListRole()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblroles WHERE  tblroles.activerol = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListOrganizations()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tblorgs where organizationactive = true");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($uid)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbllogins, tblroles, tblorgs WHERE tbllogins.idrol = tblroles.idrol AND tbllogins.organizationid = tblorgs.organizationid AND uid = ?");
			          

			$stm->execute(array($uid));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($uid)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("UPDATE tbllogins SET activelogin = 0 WHERE uid = ?");			          

			$stm->execute(array($uid));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbllogins SET 
						fname            = ?,
						lname            = ?,
						username         = ?,
						email            = ?,
						idrol            = ?,
						aboutme          = ?,
						organizationid        = ?,
						loginoccupation       = ?,
						loginphone            = ?
				    WHERE uid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->fname,
						$data->lname,
						$data->username,
						$data->email,
						$data->idrol,
						$data->aboutme,
						$data->organizationid,
						$data->loginoccupation,
						$data->loginphone,
						$data->uid
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
		$sql = "INSERT INTO `tbllogins` (fname, lname, username, email, password, idrol, organizationid, activelogin) 
		        VALUES (?, ?, ?, ?, ?, ?, 1, 1)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->fname,
					$data->lname,
					$data->username,
					$data->email,
					$password_hash=hash('sha256', $data->password),
					$data->idrol
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function passwordChange($data)
	{
		try 
		{
			$sql = "UPDATE tbllogins SET 
						password            = ?

				    WHERE uid = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$password_hash=hash('sha256', $data->password),
						$data->uid
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
