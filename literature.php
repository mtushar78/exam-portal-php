<?php

$qa = array(
    "questions" => array(
        1 => "Culture and Anarchy' was written by",
        2 => "The Romantic Age was the age of",
        3 => "Pozzo is a character in",
        4 => "Who wrote the Life of Byron?",
        5 => "Who is credited with the coinage of the phrase 'lost generation'?",
        6 => "Scholar Gypsy of Arnold is largely based on",
        7 => "Which of the following plays of Dryden is in blank verse?",
        8 => "The most successful novel of Wilkie Collins was",
        9 => "Who is associate with the 'Jazz Age'?",
        10 => "Who consider literature as super structure?",
    ),
    "answers" => array(
        1 => array(
            1 => "Raymond Williams",
            2 => "F. R. Leavis",
            3 => "Mathew Arnold",
            4 => "Lionel Trilling",
            "ca" => "Mathew Arnold"
        ),
        2 => array(
            1 => "Drama",
            2 => "Lyrie",
            3 => "Prose Fiction",
            4 => "Epic",
            "ca" => "Lyrie"
        ),
        3 => array(
            1 => "Mother Courage",
            2 => "Endgame",
            3 => "Look Back in Anger",
            4 => "Waiting for Godot",
            "ca" => "Waiting for Godot"
        ),
        4 => array(
            1 => "Robert Southey",
            2 => "Thomas Moore",
            3 => "Samuel Rogers",
            4 => "Thomas Compbell",
            "ca" => "Thomas Moore"
        ),
        5 => array(
            1 => "Gertrude Stein",
            2 => "Ernest Hemingway",
            3 => "Scott Fitzgerald",
            4 => "Willa Cather",
            "ca" => "Gertrude Stein"
        ),
        6 => array(
            1 => "Clough",
            2 => "Wordsworth",
            3 => "Chaucer",
            4 => "Spenser",
            "ca" => "Clough"
        ),
        7 => array(
            1 => "Don Sebastian",
            2 => "Love Triumpjant",
            3 => "All for Love",
            4 => "The Indian Queen",
            "ca" => "All for Love"
        ),
        8 => array(
            1 => "The Dead Street (1857)",
            2 => "The Woman in White (1860)",
            3 => "No Name (1862)",
            4 => "The Moonstone (1868)",
            "ca" => "The Woman in White (1860)"
        ),
        9 => array(
            1 => "Ernest Hemingway",
            2 => "Scott Fitzgerald",
            3 => "John Dos Passos",
            4 => "Sherwood Anderson",
            "ca" => "Scott Fitzgerald"
        ),
        10 => array(
            1 => "Structuralists",
            2 => "Poststructuralists",
            3 => "Marxists",
            4 => "Feminists",
            "ca" => "Marxists"
        ),

    ),
);

$random_qa = array_rand($qa["questions"],4);


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
