<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slide-in Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    .dashboard {
      position: fixed;
      top: 0;
      left: -250px;
      width: 250px;
      height: 100%;
      background-color: #333;
      color: #fff;
      transition: left 0.3s;
    }

    .dashboard.open {
      left: 0;
    }

    .hidden {
      display: none;
    }
  </style>
</head>
<body>
  <button id="toggleButton">☰</button>
  <div id="dashboard" class="dashboard">
    <h2>Dashboard</h2>
    <button class="dashboard-button" id="button1">Student Registration</button>
    <button class="dashboard-button">Document Upload</button>
  </div>
  <script>
    document.getElementById('toggleButton').addEventListener('click', function() {
      var dashboard = document.getElementById('dashboard');
      var toggleButton = document.getElementById('toggleButton');
      dashboard.classList.toggle('open');
      toggleButton.classList.toggle('hidden');
    });

    document.getElementById('button1').addEventListener('click', function() {
      window.location.href = 'newpage.php'; 
    });

    document.addEventListener('click', function(event) {
      var dashboard = document.getElementById('dashboard');
      var toggleButton = document.getElementById('toggleButton');
      if (!dashboard.contains(event.target) && !toggleButton.contains(event.target)) {
        dashboard.classList.remove('open');
        toggleButton.classList.remove('hidden');
      }
    });
  </script>
</body>
</html>
