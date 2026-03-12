<?php

// 1️⃣ Connexion à la base de données

$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "Tada2004$";

try {

    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {

    echo "Erreur : " . $e->getMessage();
}


// 2️⃣ Classe Contact

class Contact
{

    public $id;
    public $nom;
    public $numero;
}


// 3️⃣ Classe ContactManager

class ContactManager
{

    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllContacts()
    {

        $sql = "SELECT * FROM contacts";
        $stmt = $this->db->query($sql);

        $contacts = [];

        while ($row = $stmt->fetch()) {

            $contact = new Contact();

            $contact->id = $row['id'];
            $contact->nom = $row['nom'];
            $contact->numero = $row['numero'];

            $contacts[] = $contact;
        }

        return $contacts;
    }
}


// 4️⃣ Utiliser le manager

$manager = new ContactManager($db);

$contacts = $manager->getAllContacts();

?>

<!-- 5️⃣ Affichage HTML -->

<h2>Liste des contacts</h2>

<ul>

    <?php foreach ($contacts as $contact) { ?>

        <li>
            <?php echo $contact->nom ?> - <?php echo $contact->numero ?>
        </li>

    <?php } ?>

</ul>