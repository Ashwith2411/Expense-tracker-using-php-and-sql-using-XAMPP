<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<link rel="stylesheet" href="styles.css">
<script src="script.js"></script>
    <h1>Expense Tracker</h1>
    <form action="add_expense.php" method="POST">
        <input type="text" name="title" placeholder="Title" required>
        <select name="category" required>
            <option value="Food">Food</option>
            <option value="Travel">Travel</option>
            <option value="Shopping">Shopping</option>
            <option value="Others">Others</option>
        </select>
        <input type="number" name="amount" placeholder="Amount" required>
        <input type="date" name="date" required>
        <button type="submit">Add Expense</button>
    </form>
    <div id="expense-list"></div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
</body>
</html>