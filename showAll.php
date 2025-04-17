<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2>All Records</h2>

    <?php
    $conn = new mysqli("localhost", "root", "", "final");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT string_id, message FROM string_info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['string_id'] . " - Message: " . htmlspecialchars($row['message']) . "<br>";
        }
    } else {
        echo "No records found.";
    }

    $conn->close();
    ?>

    <hr>

    <form action="delete.php" method="POST">
        <label for="delete_id">Enter string_id to delete:</label>
        <input type="number" name="delete_id" id="delete_id" required>
        <button type="submit">Delete</button>
    </form>

    <form action="http://localhost/exam/index.php" method="get">
        <button type="submit" style="margin-top: 20px;">Return to Home</button>
    </form>
</div>

</body>

</html>