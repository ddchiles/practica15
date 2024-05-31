<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.php">CiTIM</a></h1>
    </header>
    <section id="contenedor">
      <section class="problema">
        <h2>Problema: </h2>
        <p>¿De qué tamaño (volumen) deberían ser La Luna y el Sol para
          tener ambos la misma densidad que la Tierra, suponiendo que
          la masa de los cuerpos no cambia? <br>
        </p>
      </section>
      <section class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="Img_EV3.jpg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        Densidad = Masa/Volumen<br>
        Volumen = (4/3)pi*r³
      </section>
      <section class="datos">
        <table style="width: 100%; text-align: center;">
          <tr>
            <th>Cuerpo celeste</th>
            <th>Masa (kg)</th>
            <th>Radio (km)</th>
          </tr>
          <tr>
            <td>Sol</td>
            <td>1.99X10<sup>30</sup></td>
            <td>6.97X10<sup>5</sup></td>
          </tr>
          <tr>
            <td>Tierra</td>
            <td>5.98X10<sup>24</sup></td>
            <td>6.37X10<sup>3</sup></td>
          </tr>
          <tr>
            <td>Luna</td>
            <td>8.94X10<sup>22</sup></td>
            <td>1.73X10<sup>3</sup></td>
          </tr>
        </table>
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a) La densidad de la Tierra es:<br>
          volumen = (4/3) * pi * (6.37x10<sup>3</sup>)³ metros cúbicos <br>
          Vtierra = 1.083x10<sup>12</sup> km³ = 1.083x10<sup>21</sup> m³<br>
          densidad = 5.98X10<sup>24</sup> kg / 1.083x10<sup>21</sup> m³<br>
          DTierra = 5,518X10<sup>3</sup> kg/m³
        </p>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <?php
            function calcularVolumenes() {
                $volumenTierra = 1.083e12;
                $volumenLuna = 8.94e22 / 5518;
                $volumenSol = 1.99e30 / 5518;
                return [$volumenLuna, $volumenSol];
            }

            list($volumenLuna, $volumenSol) = calcularVolumenes();

            function mostrarResultados($volumenLuna, $volumenSol) {
                echo "<div id='resultados'>
                    <p>Para tener la misma densidad que la Tierra:</p>
                    <p>Volumen de la Luna: " . number_format($volumenLuna, 2, '.', ',') . " m³</p>
                    <p>Volumen del Sol: " . number_format($volumenSol, 2, '.', ',') . " m³</p>
                </div>";
            }

            mostrarResultados($volumenLuna, $volumenSol);
        ?>
      </section>
    </section>
    <footer class="pie">
      Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>
