<?php 
$address_Server = "vunf1.coventry.domains"
?>
<!DOCTYPE>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta name="description" content="root folder page">
  <meta name="author" content="Maia">

  <title>Página Raiz</title>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for this template https://alertifyjs.org-->
  <script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>

  <script src="js/alertify1.0.10.js"></script>

  <script src="js/modernizr2.8.2.js"></script>

  <script>
    /** remove [.php] from route on URL */
    // window.history.pushState("", "", '/root');
  </script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Allertify styles -->
  <!-- JavaScript -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css" />
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css" />
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css" />
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css" />

</head>


<body class="text-center">
  <style>
    .copyleft {
      display: inline-block;
      transform: rotate(180deg);
    }
  </style>
  <div class="cover-container  w-100 h-100 p-3 mx-auto flex-column">
    <?php//  Body Content ?>
    <div class="container">
      <?php//  Body Head ?>

      <button class="badge badge-primary" onclick="triggerDiv('Web-Based')">Baseado na Web - SSL Certificado</button>
      <br>
      <div id="Web-Based" style="display:none;">
        <a target="_blank" style="color: darkgrey;" class="btn " id="Project_Nexus"
          href="projects/Project_Nexus/">Project Nexus <span
            class="badge badge-light">2017</span></a>
        <br>

        <a target="_blank" style="color: darkgrey;" class="btn " id="Portfolio"
          href="https://<?php echo $address_Server ?>/">Portfolio <span class="badge badge-light">2018</span></a>
        <br>

        <a href="projects/RWP_releaseVersion.apk"><span id="RWP_releaseVersion.apk"
            class="badge badge-warnning">.APK</span></a><a target="_blank" style="color: darkgrey;" class="btn "
          id="real_world_project" href="real_world_project">Navegação Campus <span
            class="badge badge-light">2019</span></a>
        <br>
      </div>

      <button class="badge badge-info" onclick="triggerDiv('vb.NET')">vb.NET</button>
      <br>
      <div id="vb.NET" style="display:none;">

        <a style="color: darkgrey;" class="btn " id="vbNet_Software_2016.zip"
          href="projects/vbNet_Software_2016.zip">Relatório<span
            class="badge badge-light">2016</span></a>
        <br>
      </div>

      <button class="badge badge-danger" onclick="triggerDiv('Java')">Java</button>
      <br>

      <div id="Java" style="display:none;">
        <a style="color: darkgrey;" class="btn " id="JARcase_Study_Coursework.zip"
          href="projects/JARcase_Study_Coursework.zip">Gestão de Ginásio<span
            class="badge badge-light">2019</span></a>
        <br>
      </div>

      <?php//  Body Footer ?>
      <div id="cover-container " class="">
        <i style="color: darkgrey;">Tudo disponível em <a href="https://github.com/vunf1"><span
              class="badge ">GitHub.com</span></a></i><br>
        <img title="Fetching" style="width: 15%; height: 15%;"
          src="projects/Project_Nexus/assets/img/00.gif">
        <label id="opensource-logo">
          <span class="copyleft">&copy;</span>
          <strong>João Maia</strong>
          <img title="OpenSource" style="width: 15%; height: 15%;"
            src="projects/Project_Nexus/assets/img/opensource.png">
        </label>
      </div>
    </div>

</body>

</html>