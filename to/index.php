<?php
require 'connexion.php';

function addTask($conn, $title)
{
    if (!empty($title)) {
        $stmt = $conn->prepare("INSERT INTO todo (title) VALUES (:title)");
        $stmt->bindParam(':title', $title);
        $stmt->execute();
    }
}

function toggleTaskCompletion($conn, $taskId)
{
    $stmt = $conn->prepare("UPDATE todo SET is_done = NOT is_done WHERE id = :id");
    $stmt->bindParam(':id', $taskId);
    $stmt->execute();
}

function deleteTask($conn, $deleteId)
{
    $stmt = $conn->prepare("DELETE FROM todo WHERE id = :id");
    $stmt->bindParam(':id', $deleteId);
    $stmt->execute();
}

function getTasks($conn)
{
    return $conn->query("SELECT * FROM todo ORDER BY id DESC");
}

// Gérer les actions en fonction de la requête
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
    addTask($conn, $title);

    if (isset($_POST['task_id'])) {
        $taskId = $_POST['task_id'];
        toggleTaskCompletion($conn, $taskId);
    }

    if (isset($_POST['delete_id'])) {
        $deleteId = $_POST['delete_id'];
        deleteTask($conn, $deleteId);
    }
}

$todo = getTasks($conn);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do-list</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header class="main-section">
            <h1>To-do List</h1>
            <section class="add-section">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" id="title" name="title" placeholder="Ajouter une nouvelle tâche..." required>
                    <button type="submit"><i class="fas fa-plus"></i></button>
                </form>
            </section>
        </header>

        <section class="to-do-section">
            <?php if ($todo->rowCount() <= 0) { ?>
                <div class="to-do-item">
                    <div class="empty">
                        
                        <p>Aucune tâche à afficher</p>
                    </div>
                </div>
            <?php } else { ?>
                <?php while ($row = $todo->fetch(PDO::FETCH_ASSOC)) { ?>
                    <div class="to-do-item">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="display: inline-block;">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="remove-to-do"><i class="fas fa-trash"></i></button>
                        </form>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="display: inline-block;">
                            <input type="checkbox" class="check-box" <?php echo ($row['is_done']) ? 'checked' : ''; ?> onchange="this.form.submit()">
                            <input type="hidden" name="task_id" value="<?php echo $row['id']; ?>">
                            <h2 class="<?php echo ($row['is_done']) ? 'verification' : ''; ?>"><?php echo $row['title']; ?></h2>
                        </form>
                        <br>
                        <small>Créée le : <?php echo $row['created_at']; ?></small>
                    </div>
                <?php } ?>
            <?php } ?>
        </section>
    </div>
    <script src="js\script.js"></script>
</body>
</html>
