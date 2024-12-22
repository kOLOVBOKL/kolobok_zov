<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Appolly</title>
    <style>
        dialog {
            width: 50%;
            height: 50%;
            position: fixed;
            top: 25%;
            left: 25%;
            border: none;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        dialog::backdrop {
            background-color: rgba(0, 0, 0, 0.5);
        }
        label {
            font-size: 12px;
            color: gray;
        }
        .formButton {
            width: 150px;
            height: 40px;
            background-color: var(--Royal-blue);
            color: white;
            font-size: 18px;
            border-radius: 15px;
        }
        .inputinfo {
            font-size: 18px;
            width: 33%;
            height: 40px;
            margin: 20px 0;
            border-radius: 15px;
        }
        .inputinfo:user-valid {
            border-color: green;
            background-color: #e0ffe0;
        }
        .inputinfo:user-invalid {
            border-color: red;
            background-color: #ffe0e0;
        }
        .error-message {
        min-height: 1em;
        color: red;
        font-size: 12px;
    }
        h2 {
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="navbar__upnav">
            <div class="upnav__block--telandmail">
                <a href="mailto:info@youremail.com" class="upnav__mail">
                    <img src="img/mail-fill.svg" alt="mail-icon" class="upnav__mail--img">
                    <span class="upnav__mail--text ">info@youremail.com</span>
                </a>
                <a href="tel:8803216559985" class="upnav__phone">
                    <img src="img/phone-fill.svg" alt="phone-icon" class="upnav__phone--img">
                    <span class="upnav__phone--text">(480) 555-0103</span>
                </a>
                <form method="GET" action="auth_handler.php" style="display: inline;">
    <button type="submit" name="logout" style="
        padding: 10px 20px; 
        background-color:rgb(57, 54, 238); 
        color: white; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer;
        position: absolute; /* Разрешаем перемещение */
        left: 1500px; /* Смещение вправо */
        top: 90px; /* Смещение вниз */
        transition: background-color 0.3s ease, transform 0.3s ease; /* Плавное изменение фона и трансформации */
    ">
      exit
    </button>
</form>

<style>
    button:hover {
        background-color: #3b39c4; /* Цвет кнопки при наведении */
        transform: scale(1.1); /* Увеличение кнопки при наведении */
    }
</style>
            </div>
            <ul class="upnav__social-list">
                <li class="upnav__social-list--item">
                    <a href="#">
                        <img src="img/facebook-fill-white.svg" alt="facebook icon"
                            class="upnav__item--facebook">
                    </a>
                </li>
                <li class="upnav__social-list--item">
                    <a href="">
                        <img src="img/instagram-fill.svg" alt="instagram icon" class="upnav__item--instagram">
                    </a>
                </li>
                <li class="upnav__social-list--item">
                    <a href="">
                        <img src="img/twitter-fill.svg" alt="twitter icon">
                    </a>
                </li>
                <li class="upnav__social-list--item">
                    <a href="">
                        <img src="img/youtube-fill.svg" alt="youtube icon">
                    </a>
                </li>
            </ul>
        </div>

        <nav>
            <ul class="header-nav">
                <li>
                    <img src="img/burger-menu.svg" alt="menu" class="burger-menu-button" width="24" height="24">
                </li>
                <li><a href="#part1" class="nav-menu-blue">home</a></li>
                <li><a href="#part2" class="nav-menu">about</a></li>
                <li><a href="#part3" class="nav-menu">features</a></li>
                <li class="background-logo">
    <a href="transactions.php"><img src="img/Logo4.svg" alt="logo" class="logo"></a>
</li>
                <li><a href="#part4" class="nav-menu">screenshot</a></li>
                <li><a href="#part5" class="nav-menu">blog</a></li>
                <li><a href="#" class="down">download</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <dialog id="myModal">
            <form action="" novalidate>
                <h2>Register</h2>

                <label>
                    <input name="username" id="name" class="inputinfo" type="text" required aria-describedby="nameError" placeholder="Name">
                    (required)
                    <div id="nameError" class="error-message" aria-live="polite"></div>
                </label>
                <label>
                    <input id="pass" class="inputinfo" type="password" required minlength="6" aria-describedby="passError" placeholder="Password">
                    (required)
                    <div id="passError" class="error-message" aria-live="polite"></div>
                </label>
                <button class="formButton" type="button" id="showPass">Show password</button>
                <input class="formButton" type="submit" value="submit">
                <button class="formButton" type="button" id="closeModal">Close</button>
            </form>
        </dialog>
        <section class="section-start" id="part1">
            <div class="container1 container">
                <div class="hero-card">
                    <h2 class="main-header">What Can Applly Do for You?</h2>
                    <p class="hero-p">
                    Track Your Spending: Add your daily expenses and categorize them by type, such as food, transportation, entertainment, and more. Applly will help you stay organized and aware of where your money is going.

Visualize Your Expenses: See your spending trends at a glance with dynamic charts and graphs. Our visual tools will help you understand your financial habits and make more informed decisions.

Set Budgets and Goals: Set monthly budgets for different categories and track your progress. Applly will notify you if you're getting close to your limits, so you never have to worry about overspending.

Save Money, Smarter: With Applly, you’ll have the insights you need to make smarter financial choices. Identify areas where you can cut back and start saving more for the things that matter most to you.
                    </p>
                    <h2 class="second-main-header">Download App Now</h2>
                    <div class="hero-card-images">
                        <a href="#!">
                            <img src="img/google_2.jpg" alt="google-play" width="108" height="34">
                        </a>
                        <a href="@!">
                            <img src="./img/app.jpg" alt="App Store" width="102" height="32">
                        </a>
                    </div>	
                </div> 
                <!DOCTYPE html>
<html lang="ru">
<head>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spending Table</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    button {
      padding: 10px 20px; /* Padding inside the button */
      font-size: 10px; /* Font size */
      font-weight: bold; /* Bold font */
      color: #fff; /* Text color */
      background-color: #5956E9; /* Background color */
      border: none; /* Remove default border */
      border-radius: 5px; /* Border radius for rounded corners */
      cursor: pointer; /* Pointer cursor */
      transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transition for background and clicking effect */
    }

    button:hover {
      background-color: #2980b9; /* Background color on hover */
    }

    button:focus {
      outline: none; /* Remove default focus outline */
      box-shadow: 0 0 5px rgba(52, 152, 219, 0.6); /* Light shadow on focus */
    }

    button:active {
      transform: scale(0.98); /* Slight shrink effect on click */
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
    }

    .circle {
      position: relative;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background-image: conic-gradient(#f39c12 0% 40%, #e74c3c 40% 100%);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .circle-inner {
      position: absolute;
      width: 80%;
      height: 80%;
      background-color: white;
      border-radius: 50%;
      border: 3px solid #ccc;
    }

    .expenses-table {
      width: 100%;
      margin-top: -760px;
      max-width: 400px;
      overflow: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    form {
      margin-top: 20px;
    }

    label {
      margin-right: 10px;
      color: #000000;
    }

    input[type="text"], input[type="number"], input[type="date"] {
      padding: 5px;
      margin-bottom: 10px;
    }

  </style>
</head>
<body>

  <div class="container">
    <div class="circle">
      <div class="circle-inner"></div>
      <div class="expenses-table">
        <table id="expense-table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Category</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody id="expense-body">
            <!-- Data will be dynamically inserted via JS -->
          </tbody>
        </table>
      </div>
    </div>

    <form id="expense-form">
      <label for="category">Category:</label>
      <input type="text" id="category" name="category">

      <label for="amount">Amount:</label>
      <input type="number" id="amount" name="amount">

      <label for="date">Date:</label>
      <input type="date" id="date" name="date">

      <button type="submit">Add</button>
    </form>

    <div>
      <label for="day-select">Select date:</label>
      <input type="date" id="day-select">
      <button onclick="loadExpensesForDay()">Show expenses</button>
    </div>
  </div>

  <script>
    // Function to add a new expense to the server
    document.getElementById('expense-form').addEventListener('submit', function(event) {
      event.preventDefault();

      const category = document.getElementById('category').value;
      const amount = parseFloat(document.getElementById('amount').value);
      const date = document.getElementById('date').value;

      if (category && !isNaN(amount) && date) {
        addExpenseToServer(category, amount, date);
        resetForm();
      } else {
        alert('Please fill out all fields correctly!');
      }
    });

    // Function to add expense to the server
    function addExpenseToServer(category, amount, date) {
      const formData = new FormData();
      formData.append('category', category);
      formData.append('amount', amount);
      formData.append('date', date);

      fetch('add_expense.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        console.log(data);
        alert(data.message);
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Error adding expense');
      });
    }

    // Function to load expenses for a specific date from the server
    function loadExpensesForDay() {
      const selectedDate = document.getElementById('day-select').value;
      if (!selectedDate) {
        alert('Please select a date.');
        return;
      }

      fetch(`get_expenses.php?date=${selectedDate}`)
        .then(response => response.json())
        .then(data => {
          renderExpenseTable(data);
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Error loading data');
        });
    }

    // Function to render the expense table
    function renderExpenseTable(expensesForDay) {
      const tbody = document.getElementById('expense-body');
      tbody.innerHTML = '';

      if (expensesForDay.length === 0) {
        const row = document.createElement('tr');
        const messageCell = document.createElement('td');
        messageCell.colSpan = 3;
        messageCell.textContent = 'No data for the selected date';
        row.appendChild(messageCell);
        tbody.appendChild(row);
        return;
      }

      expensesForDay.forEach(expense => {
        const row = document.createElement('tr');
        const dateCell = document.createElement('td');
        dateCell.textContent = expense.date;

        const categoryCell = document.createElement('td');
        categoryCell.textContent = expense.category;

        const amountCell = document.createElement('td');
        amountCell.textContent = expense.amount.toFixed(2);

        row.appendChild(dateCell);
        row.appendChild(categoryCell);
        row.appendChild(amountCell);

        tbody.appendChild(row);
      });
    }

    // Function to reset the form
    function resetForm() {
      document.getElementById('category').value = '';
      document.getElementById('amount').value = '';
      document.getElementById('date').value = '';
    }
  </script>
</body>
</html>




            </div>
        </section>