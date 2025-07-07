<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Movie Admin Dashboard</title>
  <style>
    :root {
      --primary: #4f46e5;
      --primary-dark: #38bdf8;
      --bg: #f9fafb;
      --text: #111827;
      --sidebar-bg: #1e293b;
      --footer-bg: #f1f5f9;
      --card-bg: #fff;
      --card-shadow: rgba(0, 0, 0, 0.05);
    }

    body.dark {
      --bg: #0f172a;
      --text: #e2e8f0;
      --sidebar-bg: #1e293b;
      --footer-bg: #1e293b;
      --card-bg: #1e293b;
      --card-shadow: rgba(255, 255, 255, 0.05);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    html,
    body {
      height: 100%;
      background-color: var(--bg);
      color: var(--text);
      transition: background-color 0.3s, color 0.3s;
    }

    body {
      display: flex;
      flex-direction: row;
    }

    .layout {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      flex-grow: 1;
      width: auto;
    }

    .container {
      flex: 1;
      display: flex;
      flex-direction: row;
      width: 100%;
    }

    .sidebar {
      width: 220px;
      background-color: var(--sidebar-bg);
      color: #fff;
      padding: 20px 0;
      flex-shrink: 0;
      display: flex;
      flex-direction: column;
      min-height: 100%;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 22px;
    }

    .sidebar a {
      display: block;
      color: #cbd5e1;
      padding: 15px 25px;
      text-decoration: none;
      transition: all 0.3s;
    }

    .sidebar a:hover {
      background-color: #334155;
      color: #fff;
      padding-left: 30px;
    }

    .sidebar a.active {
      background-color: var(--primary);
      color: #fff;
    }

    .main-content {
      flex: 1;
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: var(--card-bg);
      padding: 15px 25px;
      border-radius: 12px;
      margin: 20px;
      box-shadow: 0 2px 4px var(--card-shadow);
      transition: background-color 0.3s;
    }

    .topbar h1 {
      font-size: 22px;
      font-weight: 600;
    }

    .admin-profile {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .admin-profile img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      border: 2px solid var(--primary);
    }

    .theme-toggle {
      background: none;
      border: none;
      font-size: 22px;
      cursor: pointer;
      color: var(--primary);
      transition: transform 0.3s;
    }

    .theme-toggle:hover {
      transform: rotate(20deg);
    }

    .dashboard-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      padding: 0 20px;
    }

    .card {
      background-color: var(--card-bg);
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 8px var(--card-shadow);
      text-align: center;
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .card h3 {
      margin-bottom: 10px;
    }

    .card p {
      font-size: 24px;
      font-weight: bold;
      color: var(--primary);
      transition: color 0.3s;
    }
    .card-body ul {
  list-style-type: disc; /* Show bullet points */
  padding-left: 20px; /* Indent bullets */
  margin: 0;
}

.card-body li {
  padding: 8px 0;
  border-bottom: 1px solid #e2e8f0;
  transition: background-color 0.2s;
  text-align: left;
}

.card-body li:last-child {
  border-bottom: none;
}

.card-body li:hover {
  background-color: #f1f5f9;
}

body.dark .card-body li {
  border-bottom: 1px solid #334155;
}

body.dark .card-body li:hover {
  background-color: #1e293b;
}


    body.dark .card p {
      color: var(--primary-dark);
    }

    .main-body {
      flex: 1;
    }

    .footer {
      background-color: var(--footer-bg);
      text-align: center;
      padding: 15px;
      font-size: 14px;
      color: #64748b;
      margin-top: auto;
      transition: background-color 0.3s, color 0.3s;
    }

    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }

      .topbar {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
    }
  </style>
</head>
