<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        
.survey-container {
	background-color: rgba(0, 0, 0, 0.6);
	border-radius: 10px;
	align-items: left;
	padding: 20px;
	width: 50%;
}

#title {
	font-family: Cinzel;
	color: #dedede;
	font-size: 24px;
	text-align: center;
}

#description {
	text-align: center;
	margin-top: -10px;
}

.labels {
	padding: 0.375rem;
    color: #fff;
}

.input-box {
	width: 78%;
	float: right;
	border: 3px solid #666666;
	border-radius: 3px;
}

#dropdown {
	width: 100%;
	padding: 2px;
	border: 3px solid #666666;
	border-radius: 3px;
}

.input-radio {
	display: inline-block;
	width: 15%;
	margin-top: 8px;
}

.checkboxes {
	display: inline-block;
	width: 15%;
	margin-top: 8px;
	margin-left: -1px;
}

.input-field {
	width: 100%;
	box-sizing: border-box;
	resize: vertical;
	min-height: 120px;
	border: 3px solid #666666;
	border-radius: 9px;
}

#submit {
	display: block;
	width: 100%;
	margin-top: 20px;
	padding: 0.5rem;
	background: rgba(153, 0, 0, 1);
	font-family: Dosis;
	color: #ffffff;
	border-radius: 10px;
	cursor: pointer;
}

body {
	font-family: Dosis;
	color: #dedede;
	background: url(./bng2.png)
		center no-repeat fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-ms-background-size: cover;
	background-size: cover;
}

footer {
	text-align: center;
}

@media only screen and (max-width: 768px) {
	body {
		background: url(https://c4.wallpaperflare.com/wallpaper/196/131/596/star-wars-darth-vader-movies-anakin-skywalker-wallpaper-preview.jpg)
			center no-repeat fixed;
		background-size: cover;
	}
	.input-box {
		width: 50%;
	}
}

        </style>
</head>
<body>

<header>
		<div class="survey-container">
			<h1 id="title">Blood Donation Form</h1>
			<!-- <p id="description">(only answer if you are Star Wars fan)</p> -->
			<form id="survey-form" action="registerinf.php" method="POST" >
				<br>

				<!-- Survey Basics -->
                <div class="labels">
					<label id="name-label" for="uname">Username:</label>
					<input type="text" name="uname" id="uname" placeholder="Username" class="input-box" required>
				</div><br>
                
                <div class="labels">
					<label id="name-label" for="name">Blood Type:</label>
					<input type="text" name="blood_type" id="blood_type" placeholder="Blood Type" class="input-box" required>
				</div><br>

               
				<div class="labels">
					<label id="name-label" for="name">First Name :</label>
					<input type="text" name="fname" id="fname" placeholder="Jor, Anakin , Darth , Darth , Master , Darth " class="input-box" required>
				</div>
				<br>

                <div class="labels">
					<label id="name-label" for="name">Last Name :</label>
					<input type="text" name="lname" id="lname" placeholder="Ge, Dela Cruz, Skywalker, Vader, Malgus,  Yoda, Revan" class="input-box" required>
				</div>
				<br>

				<div class="labels">
					<label id="name-label" for="name">Birthdate</label>
					<input type="date" name="bdate" id="bdate" placeholder="bday" class="input-box" required>
				</div><br>

				<br>
				<div class="labels">
					<label id="number-label" for="age">Age :</label>
					<input type="number" name="age" id="age" min="13" max="130" placeholder="When 900 years old, you reach… Look as good, you will not." class="input-box">
				</div>
				<br>

				<div class="labels">
					<label id="name-label" for="gender">Gender:</label>
					<input type="text" name="gender" id="gender" placeholder="Gender" class="input-box" required>
				</div><br> 

				<!-- Choose Faction -->
				<div class="labels">
                <label id="number-label" for="occupation">Occupation :</label>
					<input type="text" name="occupation" id="occupation" min="13" max="130" placeholder="When 900 years old, you reach… Look as good, you will not." class="input-box">
					<!-- <p>What is your current occupation?</p>
					<select id="dropdown" name="faction" class="form-control" required>
						<option disabled selected value>One of these...</option>
						<option value="jedi">Jedi</option>
						<option value="sith">Sith</option>
						<option value="republic">Galactic Republic</option>
						<option value="empire">Galactic Empire</option>
						<option value="mandalorian">Mandalorian</option>
						<option value="hutt">Hutt</option>
					</select> -->
				</div><br>
                <div class="labels">
					<label id="number-label" for="phoneno">Phone Number:</label>
					<input type="text" name="phoneno" id="phoneno" min="13" max="130" placeholder="0912345676969." class="input-box">
				</div>
				<br>
                <div class="labels">
					<label id="email-label" for="email">Email :</label>
					<input type="email" name="email" id="email" placeholder="jorge@empire.com" class="input-box" required>
				</div><br>
                <div class="labels">
					<label id="email-label" for="Street Address">Street Adress :</label>
					<input type="text" name="addrs" id="addrs" placeholder="420 Mabuhay chuchu rizal" class="input-box" required>
				</div><br>
                <div class="labels">
					<label id="email-label" for="city">City :</label>
					<input type="text" name="city" id="city" placeholder="Antipolo" class="input-box" required>
				</div><br>
                <div class="labels">
					<label id="email-label" for="city">State/Province :</label>
					<input type="text" name="state" id="state" placeholder="Rizal" class="input-box" required>
				</div><br>

                <div class="labels">
					<label id="email-label" for="weight">Weight(in kg) :</label>
					<input type="text" name="weight" id="weight" placeholder="69kg" class="input-box" required>
				</div><br>

                <div class="labels">
					<label id="number-label" for="Pulse">Pulse :</label>
					<input type="number" name="Pulse" id="Pulse" min="13" max="130" placeholder="Enter Pulse." class="input-box">
				</div>
				<br>
                <div class="labels">
					<label id="email-label" for="HB">Hemoglobin Level :</label>
					<input type="text" name="hb" id="hb" placeholder="12 gl/dt" class="input-box" required>
				</div><br>
                <div class="labels">
					<label id="number-label" for="Blood Pressure">Blood Pressure:</label>
					<input type="number" name="bp" id="bp" min="13" max="130" placeholder="80/110" class="input-box">
				</div>
				<br>

                <div class="labels">
					<label id="number-label" for="Temperature">Temperature:</label>
					<input type="number" name="temperature" id="temperature" min="13" max="130" placeholder="35 celcius" class="input-box">
				</div>
				<br>
                <!-- <div class="labels">
                <label id="number-label" for="donated">Donated Previusly:</label>
					<h4 style="display: inline-block;">Yes <input type="radio" name="temperature1" id="number" min="13" max="130" placeholder="Yes" class="input-box"></h4>
                    <h4>No</h4><input type="radio" name="temperature1" id="number" min="13" max="130" placeholder="Yes" class="input-box">
				</div>
				<br> -->

				<!-- Companion -->
				<div class="labels">
					<p id="companion" for="companion">Donated Previously?</p>
					<div>
						<input name="donated_yes" value="yes" id="companion" type="radio" class="input-radio"  />Yes
					<div>
						<input name="donated_no" value="donated_no" id="companion2" type="radio" class="input-radio" />No
					</div>

				</div><br>

                <div class="labels">
					<label id="name-label" for="last donation">Date of Last Donation</label>
					<input type="date" name="donation" id="donation" placeholder="bday" class="input-box" required>
				</div><br>

                <div class="labels">
					<p id="companion" for="companion">Last Experience of the Following</p>
					<div>
						<input name="Experience[]" value="tattoo" type="checkbox" class="input-radio"  />Tatooing
					</div>
					<div>
						<input name="Experience[]" value="earpiercing" type="checkbox" class="input-radio" />Ear Piercing
					</div>
					<div>
						<input name="Experience[]" value="dental_extraction" type="checkbox" class="input-radio" />Dental Extraction
                    </div>
				</div><br>

                <div class="labels">
					<p id="companion" for="disease">Do you suffer from any of the following disease?</p>
					<div>
						<input name="Disease[]" value="heart" type="checkbox" class="input-radio" />Heart Disease
					</div>
                    <div>
						<input name="Disease[]" value="diabetes" type="checkbox" class="input-radio"  />Diabetes
					</div>
                    <div>
						<input name="Disease[]" value="STD" type="checkbox" class="input-radio"  />STD
					</div>
                    <div>
						<input name="Disease[]" value="lung_disease" type="checkbox" class="input-radio"  />Lung Disease
					</div>
                    <div>
						<input name="Disease[]" value="Epilepsy" type="checkbox" class="input-radio"  />Epilepsy
					</div>
                    <div>
						<input name="Disease[]" value="Cancer" type="checkbox" class="input-radio"  />Cancer
					</div>
                    <div>
						<input name="Disease[]" value="Hepatitis" type="checkbox" class="input-radio"  />Hepatitis B/C
					</div>
                    <div>
						<input name="Disease[]" value="Typhoid" type="checkbox" class="input-radio"  />Typhoid
					</div>
                    <div>
						<input name="Disease[]" value="Tuberculosis" type="checkbox" class="input-radio"  />Tuberculosis
					</div>
                    <div>
						<input name="Disease[]" value="Kidney_Disease" type="checkbox" class="input-radio"  />Kidney Disease
					</div>
                    <div>
						<input name="Disease[]" value="Malaria" type="checkbox" class="input-radio"  />Malaria
					</div>
       
                    </div>
				</div>


                <div class="labels">
					<p id="companion" for="disease">Are you taking or have you taken any of these in the past 72 hours?</p>
					<div>
						<input name="TakenAny[]" value="Antibiotics" type="checkbox" class="input-radio" />Antibiotics
					</div>
                    <div>
						<input name="TakenAny[]" value="Steroids" type="checkbox" class="input-radio"  />Steriods
					</div>
                    <div>
						<input name="TakenAny[]" value="Aspirin" type="checkbox" class="input-radio"  />Aspirin
					</div>
                    <div>
						<input name="TakenAny[]" value="Vaccinations" type="checkbox" class="input-radio"  />Vaccinations
					</div>
                    <div>
						<input name="TakenAny[]" value="Alcohol" type="checkbox" class="input-radio"  />Alcohol
					</div>
                    <div>
						<input name="TakenAny[]" value="rabbies" type="checkbox" class="input-radio"  />Dog Bite Rabbies Vaccine (1 year)
		
				</div> <br>

                <div class="labels">
					<p id="companion" for="disease">Is there any history of surgery or blood transfusion in the past six months?</p>
					<div>
						<input name="History[]" value="Major" type="checkbox" class="input-radio" />Major
					</div>
                    <div>
						<input name="History[]" value="Minor" type="checkbox" class="input-radio"  />Minor
					</div>
                    <div>
						<input name="History[]" value="Blood_Transfusion" type="checkbox" class="input-radio"  />Blood Transfusion
					</div>
                </div>
			<br>
				<button id="submit" type="submit">Submit</button>
			</form>

			<br>
			<!-- Footer  -->
			<footer id="footer">2023 © Made by <strong>Jorgeman</strong>.</footer>
		</div>
</body>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>