<!DOCTYPE html>

<?php
if (!isset($_SESSION['email']) || !(1 == $_SESSION['account_type'] || 2 == $_SESSION['account_type'])){
    Routing::run('login');
}
else{
?>

<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style_home.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style_po_zalogowaniu.css">
    <link rel="stylesheet" type="text/css" href="/public/css/molar_mass.css">

    <script type="text/javascript" src="/public/js/molar_mass.js" defer ></script>
    <script type="text/javascript" src="/public/js/lista.js" defer ></script>
    <script src="https://kit.fontawesome.com/7b3efb56a6.js" crossorigin="anonymous"></script>
    <title>MOLAR MASS PAGE</title>
</head>

<body>


<div class="top_container">
    <div class="pasek_menu_two">
        <div class="menu_main">
            <ul>
                <li ><a onclick="window.location.href='/seeBoard'">My board</a></li>
                <li ><a  onclick="window.location.href='/seeAllTables'">Tables</a></li>
                <li id="active_two"><a  onclick="window.location.href='/seeAllCalculators'">Calculators</a></li>
                <?php
                if($_SESSION['account_type'] == 1){
                    ?>
                    <li ><a onclick="window.location.href='/makeReaction'">Add reaction</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>



<?php include('public/views/view_template/menu_logout_account.php') ?>


<div class="middle_container_out">


    <div class="nazwa_kalkulatora">
        <h1>Molar mass</h1>
    </div>

    <div class="container-wstep">

            <FORM  NAME="odnosniki">
                <SELECT class="odnosniki" onchange="showOptions(this)" id="elo" NAME="lista"  SIZE = "1">

                    <OPTION VALUE="brak">Kliknij, aby wybrać pierwiastek</OPTION>
                    <?php foreach ($listChemicalElements as $element): ?>
                            <OPTION class="wybor" id=<?= $element->getMolarMass(); ?> VALUE="<?=$element->getSignChemicalElement(); ?>"> <?= $element->getSignChemicalElement(); ?> (<?= $element->getNameChemicalElement(); ?>)</OPTION>
                    <?php endforeach; ?>

                </SELECT>
            </FORM>

    <i id="kolba" class="fas fa-flask fa-3x"></i>
    </div>



<div class="tabela">
    <div class="columna1">
    <div class="dane"><p class="pole11" id="puste"><i class="far fa-question-circle"></i></p></div>
    <div class="dane"><p class="pole21" id="puste"><i class="far fa-question-circle"></i></p></div>
    <div class="dane"><p class="pole31" id="puste"><i class="far fa-question-circle"></i></p></div>
    <div class="dane"><p class="pole41" id="puste"><i class="far fa-question-circle"></i></p></div>
    <div class="dane"><p class="pole51" id="puste"><i class="far fa-question-circle"></i></p></div>
    </div>


    <div class="columna2">
        <div class="dane"><p class="pole12"><i class="far fa-question-circle"></i></p></div>
        <div class="dane"><p class="pole22"><i class="far fa-question-circle"></i></p></div>
        <div class="dane"><p class="pole32"><i class="far fa-question-circle"></i></p></div>
        <div class="dane"><p class="pole42"><i class="far fa-question-circle"></i></p></div>
        <div class="dane"><p class="pole52"><i class="far fa-question-circle"></i></p></div>

    </div>
</div>

</div>

<div class="przyciski">
<button class="oblicz">Calculate</button>
<button class="clear">Clear</button>
</div>

<div class="result"><p>Result: <i class="far fa-question-circle"></i>   g/mol</p></div>


<?php include('public/views/view_template/footer.php') ?>
</body>


<?php

}
?>
