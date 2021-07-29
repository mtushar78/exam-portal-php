<?php

$qa = array(
    "questions" => array(
        1 => "Which one of the following provides the ability to query information from the database and to insert tuples into, delete tuples from, and modify tuples in the database?",
        2 => "Which one of the following is used to define the structure of the relation, deleting relations and relating schemas?",
        3 => "The basic data type char(n) is a _____ length character string and varchar(n) is _____ length character.",
        4 => "An attribute A of datatype varchar(20) has the value “Avi”. The attribute B of datatype char(20) has value ”Reed”. Here attribute A has ____ spaces and attribute B has ____ spaces.",
        5 => "To remove a relation from an SQL database, we use the ______ command.",
        6 => "Using Microsoft word we can simply ___",
        7 => "The Binary Coded Decimal (BCD) uses",
        8 => "Which of the following is billionth of a second?",
        9 => "The two kinds of main memory are",
        10 => "RAM is also called as",
        11 => "Internal hard disk is",
        12 => "The main memory of computer is also called as",
    ),
    "answers" => array(
        1 => array(
            1 => "DML(Data Manipulation Langauge)",
            2 => "DDL(Data Definition Langauge)",
            3 => "Query",
            4 => "Relational Schema",
            "ca" => "DDL(Data Definition Langauge)"
        ),
        2 => array(
            1 => "DML(Data Manipulation Langauge)",
            2 => "DDL(Data Definition Langauge)",
            3 => "Query",
            4 => "Relational Schema",
            "ca" => "DML(Data Manipulation Langauge)"
        ),
        3 => array(
            1 => "Fixed, equal",
            2 => "Equal, variable",
            3 => "Fixed, variable",
            4 => "Variable, equal",
            "ca" => "Fixed, variable"
        ),
        4 => array(
            1 => "3, 20",
            2 => "20, 4",
            3 => "20, 20",
            4 => "3, 4",
            "ca" => "3, 20"
        ),
        5 => array(
            1 => "Delete",
            2 => "Purge",
            3 => "Remove",
            4 => "Drop table",
            "ca" => "Drop table"
        ),
        6 => array(
            1 => "Paste picture",
            2 => "Type",
            3 => "Format a text",
            4 => "All the above functions",
            "ca" => "All the above functions"
        ),
        7 => array(
            1 => "6 bits",
            2 => "8 bits",
            3 => "16 bits",
            4 => "32 bits",
            "ca" => "6 bits"
        ),
        8 => array(
            1 => "Microsecond",
            2 => "Nanosecond",
            3 => "Terabyte",
            4 => "Gigabyte",
            "ca" => "Nanosecond"
        ),
        9 => array(
            1 => "CDs and DVDs",
            2 => "RAM and ROM",
            3 => "Primary and secondary",
            4 => "Direct and sequential",
            "ca" => "RAM and ROM"
        ),
        10 => array(
            1 => "Virtual memory",
            2 => "Volatile memory",
            3 => "Non volatile memory",
            4 => "Cache memory",
            "ca" => "Volatile memory"
        ),
        11 => array(
            1 => "Removable but not fixed",
            2 => "Removable",
            3 => "Not fixed",
            4 => "Fixed",
            "ca" => "Fixed"
        ),
        12 => array(
            1 => "Hard-disk",
            2 => "Primary storage",
            3 => "Secondary storage",
            4 => "Internal memory",
            "ca" => "Primary storage"
        ),
    ),
);

$random_qa = array_rand($qa["questions"],4);

/*print_r($random_qa);
*/?><!--
<br>
<?php
/*for($i =1; $i<= sizeof($random_qa); $i++){
    echo("\n".$i . " ");
    print_r($qa["questions"][$random_qa[$i-1]]);
    */?>
    <br>
    --><?php
/*
}
exit;*/

?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
<form class="form-horizontal" action="test.php" method="post"
      style="margin-left: 100px; margin-top: 50px; margin-right:100px ">

    <?php for ($i = 1; $i <= sizeof($random_qa); $i++) { ?>
        <div style="margin-bottom: 30px">
            <div><label> <?php echo $i . " : " . $qa["questions"][$random_qa[$i-1]]; ?>  </label></div>

            <?php for ($j = 1; $j <= sizeof($qa["answers"][$i]) - 1; $j++) { ?>
                <div class="form-check" style="padding-left: 20px">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                           value="option1"
                           checked>
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
