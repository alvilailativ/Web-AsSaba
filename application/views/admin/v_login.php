<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet">
  <style>
    body {
	padding: 0;
	margin: auto;
	overflow-x: hidden;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	background: #fbfbfb;
	font-family: "Poppins", sans-serif;
}

h1 {
	font-size: 1.2em;
	padding: 0;
	margin: 0;
}

h2 {
	font-size: 1.1em;
	padding: 0;
	margin: 0;
}

p {
	font-size: 1em;
	padding: 0;
	margin: 0;
}

.container {
	width: 100%;
	display: grid;
	grid-template-columns: repeat(8, 1fr);
	gap: 10px;
	margin: 10px;
	box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
	border-radius: 20px;
	background-color: white;
	overflow: hidden;
}

.container-left {
	grid-column: 1/9;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	margin-bottom: 10px;
	padding: 10px;
	background-color: #c6ccf8;
}

.container-left img {
	width: 100%;
}

.container-left h1 {
	text-align: center;
	font-size: 1.5em;
	padding: 10px 0;
}

.container-left p {
	text-align: center;
}

.container-right {
	grid-column: 1/9;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	padding: 10px;
}

.container-right h2 {
	display: none;
}

.container-right form {
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container-right .input {
	display: flex;
	flex-direction: column;
	margin: 10px 0;
	width: 90%;
}
.input label {
	font-size: 1em;
	font-weight: 550;
}

.input input {
	width: 90%;
	padding: 10px;
	margin-top: 10px;
	outline: none;
	border: 2px solid rgba(0, 0, 0, 0.5);
	border-radius: 5px;
	transition: 0.5s;
}

.input input:focus {
	border: 2px solid #3b5ff9;
	transition: 0.5s;
}

.container-right button {
	width: 90%;
	height: 40px;
	border: none;
	margin-top: 20px;
	background-color: #5876f8;
	color: white;
	cursor: pointer;
	border-radius: 10px;
	font-weight: bold;
	font-family: "Poppins", sans-serif;
	transition: 0.5s;
}

.container-right button:hover {
	transition: 0.5s;
	background-color: #3b5ff9;
}

@media screen and (min-width: 450px) {
	.container {
		width: 400px;
	}
}

@media screen and (min-width: 760px) {
	.container {
		width: 100%;
	}

	body {
		height: 100vh;
	}
	.container-left {
		grid-column: 1/6;
		margin-bottom: 0;
		padding: 20px;
	}
	.container-left img {
		width: 85%;
	}

	.container-left .text {
		padding: 10px 0 0;
		width: 350px;
	}

	.container-left h1 {
		font-size: 1.5em;
	}

	.container-right h2 {
		display: block;
	}

	.container-left p {
		font-size: 0.9em;
	}

	.container-right {
		grid-column: 6/9;
	}
}

@media screen and (min-width: 960px) {
	.container {
		width: 900px;
		height: 550px;
	}

	.container-left {
		padding: 0;
	}

	.container-left .text {
		padding: 10px 0 0;
		width: 480px;
	}
}

  </style>
</head>
<body>
  <div class="container">
    <div class="container-left">
      <img src="<?= base_url('./assets/img/login.png') ?>" alt="form-login">
    </div>
    <div class="container-right">
	<h1>Form Login</h1>
      <form action="<?= base_url('login_proc');?>" method="POST">
        <div class="input">
          <label>Username</label>
          <input type="text" name="username" placeholder="Please your username">
        </div>        
        <div class="input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Please your password">
        </div>
        <button type="SUBMIT">Login</button>
      </form> 
    </div>
  </div>
</body>
</html>