<?php 
    include 'db.php';

    $uname = $_POST['uname'];
    $blood_type = $_POST['blood_type'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $bdate = $_POST['bdate'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $addrs = $_POST['addrs'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $weight = $_POST['weight'];
    $Pulse = $_POST['Pulse'];
    $hb = $_POST['hb'];
    $bp = $_POST['bp'];
    $temperature = $_POST['temperature'];
    $donated_yes = $_POST['donated_yes'];
    $donated_no = $_POST['donated_no'];
    $donation = $_POST['donation'];
    $Experience = $_POST['Experience'];
    $exp = '';
    foreach ($Experience as $exps) {
        $exp .= $exps.', ';
    }

    $Disease = $_POST['Disease'];
    $dise = "";
    foreach($Disease as $dis) {
        $dise .= $dis.', ';
    }


    $TakenAny = $_POST['TakenAny'];
    $tak = '';
    foreach($TakenAny as $ta) {
        $tak .= $ta.', ';
    }
    $History = $_POST['History'];
    $his = '';
    foreach($History as $hist) {
        $his .= $hist.', ';
    }

    // $tattoo = $_POST['tattoo'];
    // $earpiercing = $_POST['earpiercing'];
    // $dental_extraction= $_POST['dental_extraction'];
    // $heart = $_POST['heart'];
    // $diabetes = $_POST['diabetes'];
    // $STD = $_POST['STD'];
    // $lung_disease = $_POST['lung_disease'];
    // $Epilepsy= $_POST['Epilepsy'];
    // $Cancer = $_POST['Cancer'];
    // $Hepatitis = $_POST['Hepatitis'];
    // $Typhoid = $_POST['Typhoid'];
    // $Tuberculosis = $_POST['Tuberculosis'];
    // $Kidney_Disease = $_POST['Kidney_Disease'];
    // $Malaria = $_POST['Malaria'];
    // $Antibiotics = $_POST['Antibiotics'];
    // $Steroids = $_POST['Steroids'];
    // $Aspirin = $_POST['Aspirin'];
    // $Vaccinations = $_POST['Vaccinations'];
    // $Alcohol = $_POST['Alcohol'];
    // $rabbies = $_POST['rabbies'];
    // $Major = $_POST['Major'];
    // $Minor = $_POST['Minor'];
    // $Blood_Transfusion = $_POST['Blood_Transfusion'];

    $sql = "INSERT INTO account1 (uname, blood_type, fname, lname, bdate, age, gender, occupation, phoneno,
    email, addrs, city, state, weight, Pulse, hb, bp, temperature, donated_yes, donated_no, 
    donation, Experience, Disease, TakenAny, History)
    
    --  tattoo, earpiercing, dental_extraction, heart, diabetes, STD, lung_disease, 
    -- Epilepsy, Cancer, Hepatitis, Typhoid, Tuberculosis, Kidney_Disease, Malaria, Antibiotics, Steroids, 
    -- Aspirin, Vaccinations, Alcohol, rabbies, Major, Minor, Blood_Transfusion)

    Values ('$uname', '$blood_type', '$fname', '$lname',  '$bdate', '$age', '$gender', '$occupation', '$phoneno', '$email', '$addrs', '$city', '$state', 
    '$weight', '$Pulse', '$hb', '$bp', '$temperature', '$donated_yes', '$donated_no', '$donation', '$exp', '$dise', '$tak', '$his');";
    
    
    // '$tattoo', '$earpiercing', '$dental_extraction',
    // '$heart', '$diabetes', '$STD', '$lung_disease', '$Epilepsy', '$Cancer', '$Hepatitis', '$Typhoid', '$Tuberculosis', 
    // '$Kidney_Disease', '$Malaria', '$Antibiotics', '$Steroids', '$Aspirin', '$Vaccinations', '$Alcohol', '$rabbies', 
    // '$Major', '$Minor', '$Blood_Transfusion');";

mysqli_query($conn, $sql);

header("Location: ./index.php");