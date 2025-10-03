<?php
include 'header.php'
?>
<body>
  <!-- Elementos flutuantes de fundo -->
  <div class="floating-element"></div>
  <div class="floating-element"></div>
  
  <!-- Menu de navegação -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <i class="fas fa-dungeon me-2"></i>Biblioteca Shadow
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fas fa-home me-1"></i>Início
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.php">
              <i class="fas fa-info-circle me-1"></i>Sobre
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <i class="fas fa-sign-in-alt me-1"></i>Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Conteúdo da página (será substituído por cada página específica) -->
  <div id="page-content">
    <!-- Página inicial -->
    <header class="hero-section">
      <div class="container">
        <h1 class="hero-title">Sistema Biblioteca Shadow</h1>
        <p class="hero-subtitle">Gerencie livros, empréstimos e usuários com o poder dos portais</p>
        <a href="login.php" class="btn btn-glow">Acessar o Sistema</a>
        
        <div class="stats-container">
          <div class="stat-card">
            <div class="stat-number">1,250</div>
            <div class="stat-label">Livros Disponíveis</div>
          </div>
          <div class="stat-card">
            <div class="stat-number">342</div>
            <div class="stat-label">Usuários Ativos</div>
          </div>
          <div class="stat-card">
            <div class="stat-number">89</div>
            <div class="stat-label">Empréstimos Hoje</div>
          </div>
        </div>
      </div>
    </header>
  </div>

  <!-- Rodapé -->
  <footer class="text-center">
    <div class="container">
      <p>&copy; <?php echo date("Y"); ?> - Sistema Biblioteca Shadow</p>
      <p class="small">Inspirado no universo de Solo Leveling</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Script para trocar o conteúdo da página baseado na URL
    document.addEventListener('DOMContentLoaded', function() {
      const path = window.location.pathname;
      const pageContent = document.getElementById('page-content');
      
      if (path.includes('login.php')) {
        pageContent.innerHTML = `
          <div class="container">
            <div class="login-container">
              <h2 class="text-center mb-4" style="color: var(--highlight);">Acesso ao Sistema</h2>
              <form>
                <div class="mb-4">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" placeholder="seu@email.com">
                </div>
                <div class="mb-4">
                  <label class="form-label">Senha</label>
                  <input type="password" class="form-control" placeholder="Sua senha">
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-glow">Entrar no Portal</button>
                </div>
                <div class="text-center mt-3">
                  <a href="#" style="color: var(--highlight); text-decoration: none;">Esqueceu sua senha?</a>
                </div>
              </form>
            </div>
          </div>
        `;
      } else if (path.includes('sobre.php')) {
        pageContent.innerHTML = `
          <div class="container">
            <h1 class="page-title">Sobre o Sistema</h1>
            <div class="alert alert-danger">
              <h2><i class="fas fa-info-circle me-2"></i>SOBRE</h2>
              <p class="mt-3">Sistema de gerenciamento de biblioteca inspirado no universo de Solo Leveling.</p>
              <p>Desenvolvido por Marcos Gariel para oferecer a melhor experiência no gerenciamento de acervos bibliográficos.</p>
            </div>
          </div>
        `;
      } else if (path.includes('painel.php')) {
        pageContent.innerHTML = `
          <div class="container">
            <h1 class="page-title">Painel de Controle</h1>
            <div class="alert alert-danger">
              <h2><i class="fas fa-tachometer-alt me-2"></i>PAINEL</h2>
              <p class="mt-3">Bem-vindo ao painel de administração do sistema.</p>
            </div>
          </div>
        `;
      }
    });
  </script>
</body>
</html>