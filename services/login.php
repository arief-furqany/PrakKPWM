<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <!-- Header Section -->
  <header>
        <h1>Hackathon 2024</h1>
        <p>Inovasi Tanpa Batas</p>
    </header>
   
    <div>
    <h2>Login Form</h2>
        <form action="loginaction.php" method="post">
            <label for="username"> Username </label></br>
            <input type="text" id="username" name='username' required>
            
            <label for="password"> Password </label></br>
            <input type="text" id="username" name='username' required>
            
            <label for="button">  </label></br>
            <button type="submit"> Login </button>

            <a href="Forgot Password">Lupa Password</a>
        </form>
    </div>

    
    <footer>
        @hackathon2024 all right reserved
    </footer>

    <style>
    
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.7;
        background: linear-gradient(135deg, #1e1e2f, #2d1e40);
        color: #fff;
        overflow-x: hidden;
    }

    /* Header */
    header {
        text-align: center;
        padding: 3.5rem 1rem;
        background: linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b);
        color: #fff;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        border-radius: 15px;
        margin: 1.5rem 2rem;
    }

    header h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        letter-spacing: 2px;
        text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
    }

    header p {
        font-size: 1.5rem;
        font-weight: 300;
        font-style: italic;
        letter-spacing: 1px;
        margin-top: 0.5rem;
    }

    /* Login Form Section */
    div {
        margin: 2rem 2rem;
        padding: 2.5rem;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    div:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(255, 255, 255, 0.2);
    }

    div h2 {
        font-size: 2.5rem;
        font-weight: 600;
        color: #a18cd1;
        margin-bottom: 1rem;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 3px;
        text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.5);
    }

    label {
        display: block;
        font-size: 1.1rem;
        color: #ddd;
        margin: 1rem 0 0.5rem;
    }

    input[type="text"],
    button {
        display: block;
        width: 100%;
        padding: 0.8rem 1rem;
        font-size: 1rem;
        margin-bottom: 1rem;
        border: none;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        outline: none;
        transition: all 0.3s ease;
    }

    input[type="text"]:focus {
        background: rgba(255, 255, 255, 0.3);
        box-shadow: 0 0 5px rgba(255, 255, 255, 0.6);
    }

    button {
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    button:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #4facfe;
        transform: translateY(-3px);
    }

    a {
        display: block;
        text-align: center;
        text-decoration: none;
        color: #4facfe;
        font-size: 1rem;
        font-weight: 500;
        margin-top: 1rem;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #ffe259;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        header h1 {
            font-size: 2.8rem;
        }

        div {
            margin: 1rem;
            padding: 1.5rem;
        }

        div h2 {
            font-size: 2rem;
        }

        button {
            font-size: 0.9rem;
        }
    }
</style>


    
    

</body>
</html>