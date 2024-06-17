<?php
session_start();
$student_id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>Minilik LMS</title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/47d51daedb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../assets/css/Style.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
    <?php
   include_once "../classs/Student.php";
    $student = new Student();
    $results = $student->getResultsTOStudent($student_id);

    // Organize results by year, subject, and semester
    $subject_scores = [];
    foreach ($results as $result) {
        $year = $result['Year'];
        $subject_id = $result['subject_id'];
        $semester = trim($result['semester']);
        $score = $result['score'];
        if (!isset($subject_scores[$year])) {
            $subject_scores[$year] = [];
        }

        if (!isset($subject_scores[$year][$subject_id])) {
            $subject_scores[$year][$subject_id] = [
                'subject_name' => $student->GetSubjectById($subject_id)['subject_name'],
                'semester' => []
            ];
        }

        $subject_scores[$year][$subject_id]['semester'][$semester] = $score;
    }

    // Sort the subject scores by year in descending order
    krsort($subject_scores);
    ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="row" style="margin-bottom: 200px; margin-left:50px">
        <h1 class="Display_result">  Your Result</h1>
        <div class="col-12">
            <div class="card my-4">
                <div class="card-body px-0 pb-2">
                    <a href="view_section.php" style="float: right;">
                        <i class="fa fa-home fa-3x" style="font-size: 30px;"></i>
                    </a>

                    <div class="table-responsive">
                        <?php foreach ($subject_scores as $year => $subjects) : ?>
                            <h6>Year: <?php echo htmlspecialchars($year); ?></h6>
                            <table class="table table-striped">
                                <thead class="H1">
                                    <tr>
                                        <th>Subject</th>
                                        <th>I</th>
                                        <th>II</th>
                                        <th>Average</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($subjects as $subject_id => $data) : ?>
                                        <?php
                                        $semester1_score = isset($data['semester']['I']) ? $data['semester']['I'] : 'N/A';
                                        $semester2_score = isset($data['semester']['II']) ? $data['semester']['II'] : 'N/A';
                                        $average_score = ($semester1_score !== 'N/A' && $semester2_score !== 'N/A') ? ($semester1_score + $semester2_score) / 2 : 'N/A';
                                        ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($data['subject_name']); ?></td>
                                            <td><?php echo htmlspecialchars($semester1_score); ?></td>
                                            <td><?php echo htmlspecialchars($semester2_score); ?></td>
                                            <td><?php echo $average_score !== 'N/A' ? number_format($average_score, 2) : 'N/A'; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-center">

                        <!-- <button onclick="window.print()" class="btn btn-secondary" style="float: right;">print</button>  -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "../pages/footer.php"; ?>
</main>

    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="./assets/js/javascript.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFQPmsjI4X7et7PiH0OO5W38mw/4xO8a4ScVRy59K5F4pL48eHhXpq5R1skJwP" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGaZx8iZB6Yld5p4sRTp60xCg7" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>