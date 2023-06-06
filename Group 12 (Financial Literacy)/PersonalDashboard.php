<!DOCTYPE html>
<html>
<head>
  <title>User-Specific Expense and Savings</title>
  

  <style>
     body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h1 {
      color: blue;
      text-align: center;
      margin-top: 30px;
    }

    h2 {
      color: blue;
      text-align: center;
    }

    label {
      color: blue;
      font-weight: bold;
      display: block;
      margin-top: 20px;
    }

    input[type="number"] {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 8px;
      margin-bottom: 10px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      width: 200px;
    }

    button {
      background-color: blue;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 8px 15px;
      margin-top: 10px;
      cursor: pointer;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    h3 {
      color: blue;
      margin-top: 20px;
    }

    #total-expense,
    #total-savings {
      color: blue;
      font-weight: bold;
    }

    button.reset {
      background-color: red;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>My Personal Dashboard</h1>
  <h2>Welcome, <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></h2>
  <input type="hidden" id="user-id" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
  <label for="expense">Expense:</label>
  <input type="number" id="expense">
  <button onclick="addExpense('<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>')">Add Expense</button>

  <label for="savings">Savings:</label>
  <input type="number" id="savings">
  <button onclick="addSavings('<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>')">Add Savings</button>

  <h3>Expenses:</h3>
  <ul id="expense-items"></ul>

  <h3>Savings:</h3>
  <ul id="savings-items"></ul>

  <h3>Summary:</h3>
  <p id="total-expense"></p>
  <p id="total-savings"></p>

  <button onclick="resetAll('<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>')">Reset All</button>

  <script>
    const userId = document.getElementById('user-id').value;
    displayExpenses(userId);
    displaySavings(userId);
    calculateTotals(userId);
  </script>
</body>
</html>