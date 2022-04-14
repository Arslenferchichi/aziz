<?PHP
	class Utilisateur{
		private ?int $id = null;
		private ?string $nom = null;
		private ?string $prenom = null;
		private ?string $email = null;
		private ?string $login = null;
		private ?string $password = null;
		private ?string $confirm = null;
		private ?string $date_de_naissance = null;
		private ?string $nationalite = null;
		private ?string $num = null;


		function __construct(string $nom, string $prenom, string $email, string $login, string $password, string $confirm, string $date_de_naissance, string $nationalite, string $num){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->login=$login;
			$this->password=$password;
			$this->confirm=$confirm;
			$this->date_de_naissance=$date_de_naissance;
			$this->nationalite=$nationalite;
			$this->num=$num;

		}

		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getLogin(): string{
			return $this->login;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}
		function getConfirm(): string{
			return $this->confirm;
		}
		function getDate_de_naissance(): string{
			return $this->date_de_naissance;
		}
		function getNationalite(): string{
			return $this->nationalite;
		}
		function getNum(): string{
			return $this->num;
		}
        function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom=$prenom;
		}
		function setLogin(string $login): void{
			$this->login=$login;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}
		function setConfirm(string $confirm): void{
			$this->confirm=$confirm;
		}
		function setDate_de_naissance(string $date_de_naissance): void{
			$this->date_de_naissance=$date_de_naissance;
		}
		function setNationalite(string $nationalite): void{
			$this->nationalite=$nationalite;
		}
		function setNum(string $num): void{
			$this->num=$num;
		}

	}
?>