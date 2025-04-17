<?php include 'header.php'; ?>

<div class="container mt-5">
    <form action="insert.php" method="POST">
        <label for="message">Enter a message:</label>
        <input type="text" name="message" id="message" required>
        <button type="submit">submit</button>
    </form>

    <br>
    <a href="showAll.php">Show all records</a>
</div>

</body>

</html>