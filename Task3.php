<?php 
$employees =[
    ["name" => "Ahmed",
     "salary" => 5000 ,
     "age" => 30 ,
     "insurance" => "Yes"
    ],
    ["name" => "Sara",
    "salary" => 6000 ,
    "age" => 28 ,
    "insurance" => "No"
    ],
    ["name" => "Ali",
    "salary" => 4500 ,
    "age" => 35 ,
    "insurance" => "Yes"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .heading {
            text-align: center;
        }
        .container {
        height: 120px;
        width: 600px;
        display: flex;
        justify-content: space-between;
        gap: 10px;
        background-color: rgb(251, 245, 237);
        border: 3px solid;
        margin-left: 450px ;
        margin-top: 50px ;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card {
        height: 100px;
        width: 33%;
        border: 1px solid black;
        background-color:rgb(176, 76, 76);
        color: white;
        text-align: center;
        margin :10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        
        }
    </style>
</head>
<body>
    <h1 class="heading">Employees Data</h1>
    <div class="container">
    <?php foreach($employees as $employee){ ?>
        <div class="card" >
        <?php foreach($employee as $key => $value){ ?>
            <?php echo "$key : $value "; ?>
            <?php echo "<br>" ; ?>
        <?php } ?>
        </div>
    <?php } ?>
    </div>
</body>
</html>