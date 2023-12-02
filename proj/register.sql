CREATE TABLE account1(
    uname VARCHAR (150)NOT NULL,
    blood_type VARCHAR (150)NOT NULL,
    fname VARCHAR (150)NOT NULL,
    lname VARCHAR (150)NOT NULL,
    bdate DATE NOT NULL,
    age VARCHAR (150)NOT NULL,
    gender VARCHAR (150)NOT NULL,
    occupation VARCHAR (150)NOT NULL,
    phoneno VARCHAR (150)NOT NULL,
    email VARCHAR (150)NOT NULL,
    addrs VARCHAR (150)NOT NULL,
    city VARCHAR (150)NOT NULL,
    state VARCHAR (10)NOT NULL,
    weight VARCHAR (10)NOT NULL,
    Pulse INT (10)NOT NULL,
    hb INT (10)NOT NULL,
    bp INT (10)NOT NULL,
    temperature INT (5)NOT NULL,
    donated_yes BOOLEAN  ,
    donated_no BOOLEAN ,
    donation DATE ,
    Experience VARCHAR (150),
    Disease VARCHAR (150),
    TakenAny VARCHAR (150),
    History VARCHAR (150),
    -- tattoo BOOLEAN ,
    -- earpiercing BOOLEAN ,
    -- dental_extraction BOOLEAN ,
    -- heart BOOLEAN ,
    -- diabetes BOOLEAN ,
    -- STD BOOLEAN ,
    -- lung_disease BOOLEAN ,
    -- Epilepsy BOOLEAN ,
    -- Cancer BOOLEAN ,
    -- Hepatitis BOOLEAN ,
    -- Typhoid BOOLEAN ,
    -- Tuberculosis BOOLEAN ,
    -- Kidney_Disease BOOLEAN ,
    -- Malaria BOOLEAN ,
    -- Antibiotics BOOLEAN ,
    -- Steroids BOOLEAN ,
    -- Aspirin BOOLEAN ,
    -- Vaccinations BOOLEAN ,
    -- Alcohol BOOLEAN ,
    -- rabbies BOOLEAN ,
    -- Major BOOLEAN ,
    -- Minor BOOLEAN ,
    -- Blood_Transfusion BOOLEAN ,
    PRIMARY KEY (uname)
    );

    INSERT INTO account1 (uname, blood_type, fname, lname, bdate, age, gender, occupation, phoneno,
    email, addrs, city, state, weight, Pulse, hb, bp, temperature, donated_yes, donated_no, 
    donation, Experience, Disease, TakenAny, History)
    
    
    Values ('$uname', '$blood_type', '$fname', '$lname',  '$bdate', '$age', '$gender', '$occupation', '$phoneno', '$email', '$addrs', '$city', '$state', 
    '$weight', '$Pulse', '$hb', '$bp', '$temperature', '$donated_yes', '$donated_no', '$donation', '$Experience', '$Disease', '$TakenAny', '$History' );";"
    

    -- tattoo, earpiercing, dental_extraction, heart, diabetes, STD, lung_disease, 
    -- Epilepsy, Cancer, Hepatitis, Typhoid, Tuberculosis, Kidney_Disease, Malaria, Antibiotics, Steroids, 
    -- Aspirin, Vaccinations, Alcohol, rabbies, Major, Minor, Blood_Transfusion)
    
    -- '$tattoo', '$earpiercing', '$dental_extraction',
    -- '$heart', '$diabetes', '$STD', '$lung_disease', '$Epilepsy', '$Cancer', '$Hepatitis', '$Typhoid', '$Tuberculosis', 
    -- '$Kidney_Disease', '$Malaria', '$Antibiotics', '$Steroids', '$Aspirin', '$Vaccinations', '$Alcohol', '$rabbies', 
    -- '$Major', '$Minor', '$Blood_Transfusion');";

