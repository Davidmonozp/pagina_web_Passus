<link rel="stylesheet" type="text/css" href="styles/estadisticas.css?v=2">

<?php include('includes/accesibilidad.php'); ?>

<div class="sectiontitle">
    <h3>¡Mas que números son vidas transformadas!
        <hr class="hr_subtitulo_estadisticas">
    </h3> <br>
    <p>Cada paciente que atendemos representa un compromiso cumplido y una historia de esfuerzo compartido. Su bienestar es nuestra mayor prioridad y la razón por la que trabajamos con pasión cada día.</p>
    <span class="headerLine"></span>
</div>


<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
            <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                <i class="fas fa-wheelchair"></i>
                <p id="number1" class="number"></p>
                <!-- <p id="number1" class="number" data-end="12">12</p> -->
                <span></span>
                <p>Rehabilitación </p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="52567" style="visibility: visible;">
                <i class="fas fa-tint"></i>
                <p id="number2" class="number"></p>
                <span></span>
                <p>Hidroterapia</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                <i class="fas fa-stethoscope"></i>
                <p id="number3" class="number"></p>

                <span></span>
                <p>Consultas Especializadas</p>
            </div>
            <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                <i class="fa-solid fa-users"></i>
                <p id="number4" class="number"></p>

                <span></span>
                <p>Pacientes atendidos</p>
            </div>
        </div>
    </div>
</div>

<?php include('includes/_js.php'); ?>
<script src="js/estadisticas.js"></script>
<script src="js/accesibilidad.js"></script>