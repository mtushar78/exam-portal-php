<?php
require_once "quesitions.php";

$point = 0;

$random_qa = array_rand($qa["questions"],4);

?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<form class="form-horizontal total_form" action="result.php" method="post"
      style="margin-left: 100px; margin-top: 50px; margin-right:100px ">

    <?php for ($i = 1; $i <= sizeof($random_qa); $i++) { ?>
        <div style="margin-bottom: 30px">
            <div><label> <?php echo $i . " : " . $qa["questions"][$random_qa[$i-1]]; ?>  </label></div>

            <?php for ($j = 1; $j <= sizeof($qa["answers"][$i]) - 1; $j++) { ?>
                <div class="form-check" style="padding-left: 20px">
                    <input class="form-check-input" type="radio" name="<?php echo $random_qa[$i-1];?>"
                         value=" <?php
                         echo $qa["answers"][$random_qa[$i-1]][$j];
                         ?>"  checked>
                    <label class="form-check-label" for="exampleRadios1">
                        <?php
                        echo $qa["answers"][$random_qa[$i-1]][$j];
                        ?>
                    </label>
                </div>
                <?php
            }
            ?>

        </div>

        <?php
    } ?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
