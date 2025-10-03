<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca - Sistema Solo Leveling</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-dark: #0a0a1a;
      --primary-blue: #1a237e;
      --accent-blue: #2962ff;
      --accent-purple: #7b1fa2;
      --highlight: #00e5ff;
      --text-light: #e0e0e0;
    }
    
    body {
      background-color: var(--primary-dark);
      color: var(--text-light);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
    }
    
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: 
        radial-gradient(circle at 10% 20%, rgba(41, 98, 255, 0.1) 0%, transparent 20%),
        radial-gradient(circle at 90% 80%, rgba(123, 31, 162, 0.1) 0%, transparent 20%);
      z-index: -1;
    }
    
    .navbar {
      background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-dark) 100%) !important;
      border-bottom: 1px solid var(--accent-blue);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }
    
    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      background: linear-gradient(90deg, var(--highlight), var(--accent-blue));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-shadow: 0 0 10px rgba(0, 229, 255, 0.3);
    }
    
    .nav-link {
      color: var(--text-light) !important;
      font-weight: 500;
      transition: all 0.3s ease;
      position: relative;
    }
    
    .nav-link:hover {
      color: var(--highlight) !important;
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--highlight);
      transition: width 0.3s ease;
    }
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    .hero-section {
      background: 
        linear-gradient(rgba(10, 10, 26, 0.8), rgba(10, 10, 26, 0.9)),
        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="none"/><path d="M0,0 L100,100 M100,0 L0,100" stroke="rgba(41,98,255,0.1)" stroke-width="1"/></svg>');
      padding: 100px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at center, rgba(0, 229, 255, 0.1) 0%, transparent 70%);
    }
    
    .hero-title {
      font-size: 3.5rem;
      font-weight: 800;
      margin-bottom: 1rem;
      background: linear-gradient(90deg, var(--highlight), var(--accent-blue));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-shadow: 0 0 15px rgba(0, 229, 255, 0.5);
    }
    
    .hero-subtitle {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      color: var(--text-light);
    }
    
    .btn-glow {
      background: linear-gradient(135deg, var(--accent-blue), var(--accent-purple));
      border: none;
      color: white;
      font-weight: 600;
      padding: 12px 30px;
      border-radius: 30px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(41, 98, 255, 0.4);
      position: relative;
      overflow: hidden;
    }
    
    .btn-glow:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(41, 98, 255, 0.6);
      color: white;
    }
    
    .btn-glow::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s ease;
    }
    
    .btn-glow:hover::before {
      left: 100%;
    }
    
    .login-container {
      background: rgba(15, 15, 35, 0.8);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 40px;
      margin: 80px auto;
      max-width: 500px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      border: 1px solid rgba(41, 98, 255, 0.3);
      position: relative;
      overflow: hidden;
    }
    
    .login-container::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(41, 98, 255, 0.1) 0%, transparent 70%);
      z-index: -1;
    }
    
    .form-label {
      color: var(--text-light);
      font-weight: 500;
      margin-bottom: 8px;
    }
    
    .form-control {
      background-color: rgba(30, 30, 60, 0.7);
      border: 1px solid rgba(41, 98, 255, 0.3);
      color: var(--text-light);
      border-radius: 8px;
      padding: 12px 15px;
      transition: all 0.3s ease;
    }
    
    .form-control:focus {
      background-color: rgba(40, 40, 80, 0.8);
      border-color: var(--accent-blue);
      box-shadow: 0 0 0 0.2rem rgba(41, 98, 255, 0.25);
      color: var(--text-light);
    }
    
    .page-title {
      font-size: 2.5rem;
      font-weight: 700;
      text-align: center;
      margin: 40px 0;
      background: linear-gradient(90deg, var(--highlight), var(--accent-blue));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    
    .alert-danger {
      background: rgba(123, 31, 162, 0.2);
      border: 1px solid var(--accent-purple);
      color: var(--text-light);
      border-radius: 10px;
      text-align: center;
      padding: 30px;
      margin: 40px 0;
    }
    
    footer {
      background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-dark) 100%);
      border-top: 1px solid var(--accent-blue);
      padding: 20px 0;
      margin-top: 50px;
    }
    
    .floating-element {
      position: absolute;
      width: 100px;
      height: 100px;
      background: radial-gradient(circle, rgba(0, 229, 255, 0.1) 0%, transparent 70%);
      border-radius: 50%;
      filter: blur(20px);
      z-index: -1;
    }
    
    .floating-element:nth-child(1) {
      top: 10%;
      left: 5%;
      width: 150px;
      height: 150px;
    }
    
    .floating-element:nth-child(2) {
      top: 60%;
      right: 10%;
      width: 120px;
      height: 120px;
      background: radial-gradient(circle, rgba(123, 31, 162, 0.1) 0%, transparent 70%);
    }
    
    .stats-container {
      display: flex;
      justify-content: space-around;
      margin: 50px 0;
      flex-wrap: wrap;
    }
    
    .stat-card {
      background: rgba(20, 20, 45, 0.7);
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      width: 200px;
      margin: 10px;
      border: 1px solid rgba(41, 98, 255, 0.3);
      transition: transform 0.3s ease;
    }
    
    .stat-card:hover {
      transform: translateY(-5px);
      border-color: var(--accent-blue);
    }
    
    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--highlight);
      margin-bottom: 10px;
    }
    
    .stat-label {
      color: var(--text-light);
      font-size: 1rem;
    }
    
    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }
      
      .login-container {
        margin: 40px 20px;
        padding: 30px 20px;
      }
      
      .stats-container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>