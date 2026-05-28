<?php

session_start();

if(!isset($_SESSION['user'])){
header("Location: central.php");
exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tera Network • Dashboard</title>

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div id="particles-js"></div>

<div id="loading">

<div class="loader"></div>

<h2>Conectando à Tera Network...</h2>

</div>

<div class="mobile-btn" onclick="abrirMenu()">

<i class="fa-solid fa-bars"></i>

</div>

<div class="sidebar" id="sidebar">

<h1>TERA</h1>

<ul>

<li><i class="fa-solid fa-house"></i> Dashboard</li>
<li><i class="fa-solid fa-file-invoice"></i> Boletos</li>
<li><i class="fa-solid fa-headset"></i> Suporte</li>
<li><i class="fa-solid fa-gauge-high"></i> SpeedTest</li>
<li><i class="fa-solid fa-chart-line"></i> Consumo</li>

</ul>

<a href="logout.php" class="logout-btn">

<i class="fa-solid fa-right-from-bracket"></i>
Sair

</a>

</div>

<div class="main">

<div class="topbar">

<h1 class="welcome">

Bem-vindo,
<?php echo $_SESSION['user']; ?> 🚀

</h1>

<div class="status-box">

<i class="fa-solid fa-circle"></i>
Conectado

</div>

</div>

<div class="dashboard-grid">

<div class="dashboard-card">

<i class="fa-solid fa-wifi"></i>

<h2>Internet</h2>

<p>
PLANO CONTRATE 300 LEVE 500
</p>

<small>
Conexão estável
</small>

</div>

<div class="dashboard-card">

<i class="fa-solid fa-chart-simple"></i>

<h2>Consumo</h2>

<p>
20 GB usados
</p>

<div class="progress">

<div class="bar"></div>

</div>

</div>

<div class="dashboard-card">

<i class="fa-solid fa-signal"></i>

<h2>Status</h2>

<p class="online">
ONLINE
</p>

<small>
Sem instabilidades
</small>

</div>

<div class="dashboard-card">

<i class="fa-solid fa-file-pdf"></i>

<h2>Boletos</h2>

<p>
Fatura disponível
</p>

<button onclick="baixarBoleto()">
BAIXAR PDF
</button>

</div>

</div>

<div class="speedtest">

<h1>
<i class="fa-solid fa-gauge-high"></i>
Teste de Velocidade
</h1>

<iframe
src="https://openspeedtest.com/speedtest"
width="100%"
height="650"
style="
border:none;
border-radius:25px;
overflow:hidden;
background:#111827;
margin-top:30px;
">
</iframe>

</div>

</div>

<!-- BOTÃO ABRIR CHAT -->

<div class="chat-toggle" onclick="toggleChat()">

<i class="fa-solid fa-comments"></i>

</div>

<!-- CHATBOT -->

<div class="chatbot" id="chatbot">

<div class="chat-header">

<span>
🤖 TERA IA
</span>

<button class="close-chat" onclick="toggleChat()">

<i class="fa-solid fa-xmark"></i>

</button>

</div>

<div class="chat-messages" id="chatMessages">

<div class="bot-message">
Olá 👋<br>
Sou a IA da TERA NETWORK.
</div>

</div>

<div class="chat-input">

<input
type="text"
id="userInput"
placeholder="Digite sua mensagem..."
>

<button onclick="enviarMensagem()">
Enviar
</button>

</div>

</div>

<a
href="https://wa.me/5588988945712"
class="whatsapp"
target="_blank"
>

<i class="fa-brands fa-whatsapp"></i>

</a>

<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>