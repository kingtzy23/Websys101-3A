<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CaseStudy3</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
      text-align: center;
    }
    h2 {
      margin-bottom: 20px;
      color: #333;
      font-weight: 600;
    }
    form {
      margin-bottom: 20px;
    }
    input[type="number"] {
      padding: 10px;
      margin: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      width: 100px;
      text-align: center;
    }
    button {
      padding: 10px 20px;
      background: #007bff;
      border: none;
      border-radius: 8px;
      color: #fff;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s;
    }
    button:hover {
      background: #0056b3;
    }
    table {
      border-collapse: collapse;
      margin: 0 auto;
    }
    td {
      width: 60px;
      height: 60px;
      text-align: center;
      border: 1px solid #ddd;
      font-size: 18px;
      font-weight: normal;
      border-radius: 6px;
    }
    .odd {
      background: #ffeb3b; /* professional yellow */
      font-weight: bold;
      color: #000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Case Study 3: Using looping</h2>
    <form method="post">
      <input type="number" name="rows" min="1" placeholder="Rows" required>
      <input type="number" name="cols" min="1" placeholder="Columns" required>
      <button type="submit">Generate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = intval($_POST["rows"]);
        $cols = intval($_POST["cols"]);

        echo "<table>";
        $num = 1;
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                if ($num % 2 != 0) {
                    echo "<td class='odd'>$num</td>";
                } else {
                    echo "<td>$num</td>";
                }
                $num++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
  </div>
</body>
</html>
