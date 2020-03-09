<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Sports Quiz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'> 
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
     <!--css stylesheet-->
     <link rel="stylesheet" type="text/css" href="Css/styles2.css">
	<!--google fonts-->
	<link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    </head>
    <body>

    <div class="jumbotron jumbotron-fluid ">
      <div class="container text-center">
        <h1 class="display-4"> Basic Sports Questions</h1>
        <p class="lead">How much do you know about sports?</p>
      </div>
    </div>
 
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 offsetColor"></div>
            <div class="col-sm-6 line">
		
            <?php 
        
            $Questions = array(
                'question1' => array(
                        'Question' => 'Boxing matches are held in a boxing?',
                        'Answers' => array(
                            'A' => 'Square',
                            'B' => 'Field',
                            'C' => 'Ring',
                            'D' => 'Court'
                        ),
                        'CorrectAnswer' => 'C'
                ),
                'question2' => array(
                        'Question' => 'The multiple Olympic-medal winning runner Usain Bolt was born in?',
                        'Answers' => array(
                            'A' => 'Jamaica',
                            'B' => 'Russia',
                            'C' => 'England',
                            'D' => 'The USA'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                'question3' => array(
                    'Question' => 'Which sport did Australias Sir Donald Bordman Play?',
                    'Answers' => array(
                        'A' => 'Hockey',
                        'B' => 'Golf',
                        'C' => 'Cricket',
                        'D' => 'Tennis'
                    ),
                    'CorrectAnswer' => 'C'
                ),
                'question4' => array(
                    'Question' => 'In which sport can you get a birdie, a bogey or a hole-in-one?',
                    'Answers' => array(
                        'A' => 'Water Polo',
                        'B' => 'Netball',
                        'C' => 'Soccer',
                        'D' => 'Golf'
                    ),
                    'CorrectAnswer' => 'D'
                ),
                'question5' => array(
                'Question' => 'In baseball, a batter is out if the umpire calls?',
                'Answers' => array(
                    'A' => 'One strike',
                    'B' => 'Two strikes',
                    'C' => 'Three strikes',
                    'D' => 'Four strikes'
                ),
                'CorrectAnswer' => 'C'
                ),
                'question6' => array(
                    'Question' => 'Michael Jordan spent most of his career playing for the',
                    'Answers' => array(
                        'A' => 'Chicago Bulls',
                        'B' => 'Tottenham',
                        'C' => 'San Antonio Spurs',
                        'D' => ' LA Lakers'
                    ),
                    'CorrectAnswer' => 'D'
                ),
                'question7' => array(
                    'Question' => 'The main official in a game of Association football or soccer is called the?',
                    'Answers' => array(
                        'A' => 'Referee',
                        'B' => 'Umpire',
                        'C' => 'Judge',
                        'D' => 'Captain'
                    ),
                    'CorrectAnswer' => 'A'
                ),
                'question8' => array(
                'Question' => 'During a game of field hockey, each team can field?',
                'Answers' => array(
                    'A' => '9 players',
                    'B' => '10 players',
                    'C' => '11 players',
                    'D' => '13 players'
                ),
                'CorrectAnswer' => 'C'
                ),
                'question9' => array(
                    'Question' => 'In tennis, a serve that goes out or doesnt get over the net is called?',
                    'Answers' => array(
                        'A' => 'A fault',
                        'B' => 'A problem',
                        'C' => 'A let',
                        'D' => 'An Ace'
                    ),
                    'CorrectAnswer' => 'A'
                ),
                'question10' => array(
                    'Question' => 'The game of rugby was named after Rugby School in?',
                    'Answers' => array(
                        'A' => 'Englad',
                        'B' => 'Ireland',
                        'C' => 'Robben Ireland',
                        'D' => 'Scotland'
                    ),
                    'CorrectAnswer' => 'A'
                ),
                'question11' => array(
                    'Question' => 'who is the number 1 ranked cricket team?',
                    'Answers' => array(
                        'A' => 'Namibia',
                        'B' => 'Cape Town',
                        'C' => 'South Africa',
                        'D' => 'India'
                    ),
                    'CorrectAnswer' => 'D'
                ),
                'question12' => array(
                    'Question' => 'michael phelps was defeated in mens 200m butterfly in london olympics by?',
                    'Answers' => array(
                        'A' => 'Tiger Wood',
                        'B' => 'Chad Le Clos',
                        'C' => 'Joseph Schooling',
                        'D' => 'Heath Nash'
                    ),
                    'CorrectAnswer' => 'B'
                ),
                'question13' => array(
                    'Question' => 'Lebron james plays for?',
                    'Answers' => array(
                        'A' => 'LA Lakers',
                        'B' => 'Springboks',
                        'C' => 'LA Clippers',
                        'D' => 'Westham'
                    ),
                    'CorrectAnswer' => 'A'
                ),
                'question14' => array(
                    'Question' => 'who does lionel messi play for?',
                    'Answers' => array(
                        'A' => 'Manchester United',
                        'B' => 'Barcelona',
                        'C' => 'Manchester city',
                        'D' => 'Liverpool'
                    ),
                    'CorrectAnswer' => 'B'
                ),
                'question15' => array(
                    'Question' => 'Who is crowned the greatest boxer of all time?',
                    'Answers' => array(
                        'A' => 'Connor Mcgregor',
                        'B' => 'Jet Li',
                        'C' => 'Floyd Maywheather',
                        'D' => 'Jackie Chan'
                    ),
                    'CorrectAnswer' => 'C'
                ),
                'question16' => array(
                    'Question' => 'In soccer ,points are allocated to the team who scores a ?',
                    'Answers' => array(
                        'A' => 'Try',
                        'B' => 'Goal',
                        'C' => 'Strike',
                        'D' => 'Hoop'
                    ),
                    'CorrectAnswer' => 'B'
                ),
                'question17' => array(
                    'Question' => 'Which player of LA Lakers recently passed?  ',
                    'Answers' => array(
                        'A' => 'Lebron James',
                        'B' => 'Kobe Bryant',
                        'C' => 'Kevin Durant',
                        'D' => 'Niel Armstrong'
                    ),
                    'CorrectAnswer' => 'B'
                ),
                'question18' => array(
                    'Question' => 'Who is the most valuable football player of 2020?  ',
                    'Answers' => array(
                        'A' => 'Messi',
                        'B' => 'Ronaldo',
                        'C' => 'Mbappe',
                        'D' => 'Suarez'
                    ),
                    'CorrectAnswer' => 'C'
                ),
                'question19' => array(
                    'Question' => 'Who hosted 2019 rugby world cup?  ',
                    'Answers' => array(
                        'A' => 'China',
                        'B' => 'Japan',
                        'C' => 'Korea',
                        'D' => 'Tokio'
                    ),
                    'CorrectAnswer' => 'B'
                ),
                'question20' => array(
                    'Question' => 'who was the champions of the 2019 rugby world cup?',
                    'Answers' => array(
                        'A' => 'South America',
                        'B' => 'South Korea',
                        'C' => 'South Africa',
                        'D' => 'New zealand'
                    ),
                    'CorrectAnswer' => 'C'
                )

                );

                if (isset($_POST['answers'])) {
                    $Answers = $_POST['answers']; // Get submitted answers.
                    //  checking! Questions;)
                    $count = 0;
                    echo "<h1>quiz results </h1>";
                    foreach($Questions as $QuestionNo => $Value) {
                        // Echo the question
                        echo $Value['Question'].'<br>';
                        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']) {

                            echo 'Incorrect(Correct Selection): <span style="color: red;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span>';
                        } 
                        else {
                            echo 'Well Done: <span style="color: blue;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>';
                            $count++;
                        }
                        echo '<br /><hr>';
                    }
                    if ($count < 10) {
                        echo "<h1>Results : $count/20</h1>";
                        echo "<br>";
                        echo "<h2>Try Again to improve your score</h2>";
                    } else if ($count <= 15) {
                        echo "<h1>Results : $count/20</h1>";
                        echo "<br>";
                        echo "<h2>AVERAGE:try again to improve.</h2>";
                    } else {
                        echo "<h1>Results : $count/20</h1>";
                        echo "<h2>Excellent Score</h2>";
                    }
                }
                else {
                ?>
                    <form  class=" h-200 wow pulse" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">                 
                            <?php foreach ($Questions as $QuestionNo => $Value){ ?>                         
                                <h5 id="questionsInBlue"><?php echo $Value['Question']; ?></h5>
                                <?php                               
                                    foreach ($Value['Answers'] as $Letter => $Answer){
                                    $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;                               
                                ?>
                                <div id="line">
                                    <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>"required/>
                                    <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>                              
                                </div>                             
                                <?php } ?>
                                <hr>                      
                            <?php } ?>                    
                            <input  type="submit" value="SUBMIT" />               
                    </form>
                <?php 
                }
                ?>
            </div>
            <div class="col-sm-3 offsetColor"></div>
      </div>
            </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

    </body>
</html>