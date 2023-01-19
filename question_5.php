<html lang="en">
<?php
    if(isset($_POST['submit'])){
        $jawaban1 = $_POST['q1'];
        $jawaban2 = $_POST['q2'];
        $jawaban3 = $_POST['q3'];
        $jawaban4 = $_POST['q4'];
        }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEFI - Pertanyaan</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="card-container">
            <div class="left-container-logo">
                <img src="img/chat-bot.jpg" class="img-bot"/>
                <H3>STEFI</H3>

                <H4>SISTEM PAKAR TEMAN FINANSIAL</H4>
            </div>
            <div class="right-container">
            <br>
                <form action="result.php" method="POST">
                    <input id="q1" name="q1" type="hidden" value="<?php echo $jawaban1 ?>"/>
                    <input id="q2" name="q2" type="hidden" value="<?php echo $jawaban2 ?>"/>
                    <input id="q3" name="q3" type="hidden" value="<?php echo $jawaban3 ?>"/>
                    <input id="q4" name="q4" type="hidden" value="<?php echo $jawaban4 ?>"/>
                    <H2 class="question-title">Seberapa Penting Anda Ingin Menarik Dana Investasi Segera?</H2>
                    <br>

                    <label class="container-2">Sesegera Mungkin/Mendesak
                    <input id="q5" name="q5" type="radio" checked="checked" value="e1">
                    <span class="checkmark"></span>
                    </label>

                    <label class="container-2">Tidak Mendesak
                    <input id="q5" name="q5" type="radio" value="e2">
                    <span class="checkmark"></span>
                    </label>

                <br><br>
                        <input class="submit-question" type="submit" name="submit" value="Analisa Hasil" />
                </form>
            </div>
        </div>

    </div>
</body>
</html>