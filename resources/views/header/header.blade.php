<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>{{$title}}</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #f7f8fc;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Header */
    header {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      padding: 20px 40px;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 600;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffe600;
    }

    /* Main Content */
    main {
      flex: 1;
      padding: 60px 40px;
      text-align: center;
    }

    main h1 {
      font-size: 2.5rem;
      margin-bottom: 15px;
      color: #333;
    }

    main p {
      font-size: 1.1rem;
      color: #555;
    }

    .active{
        color: black;
    }

    /* Footer */
    footer {
      background-color: #222;
      color: #eee;
      padding: 30px 40px;
      text-align: center;
    }

    .footer-links a {
      color: #bbb;
      text-decoration: none;
      margin: 0 15px;
      font-size: 0.95rem;
    }

    .footer-links a:hover {
      color: #fff;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        margin-top: 10px;
      }

      nav a {
        display: inline-block;
        margin: 10px 10px 0 0;
      }
    }
  </style>
</head>