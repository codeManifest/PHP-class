<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<?php

$_nameErr=$_FnameErr=$_DOBErr="";
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (empty($_POST["Name"])) {

        $_nameErr = "*Name is required";
    }
else{

    $_FIRSTNAME = $_POST["Name"];
    $_FNAME = $_POST["FName"];
    $_DOB = $_POST["dob"];
    $_MS = $_POST["ms"];
    $_PHONE = $_POST['mobile'];
    $_EMAIL = $_POST["email"];
    $_ADDRESS = $_POST["address"];
    $_STREAM = $_POST["Stream"];
    $_COLLEGE = $_POST["College"];
    $_YEAR = $_POST["Year"];
    $_BOARD = $_POST["board"];
    $_SKILLS = $_POST["skills"];
    $_OTHERSKILLS = $_POST["otherskills"];
    $_LANGUAGE = $_POST["language"];
    $_QUALIFICATION= $_POST["Qualification"];
    $_PROFILEIMGPATH= $_POST["profile"];
}



//   echo "$_FIRSTNAME,$_FNAME,$_DOB,$_MS,$_PHONE,$_EMAIL,$_ADRRESS,$_STREAM,$_COLLEGE,$_YEAR,$_BOARD,$_SKILLS,$_OTHERSKILLS,$_LANGUAGE ";
  
}


?>
<body>
    <div class="w-1/2 bg-slate-200 h-screen m-auto" >
        <div class=" h-[10vh] shadow-md flex items-center justify-center text-4xl text-zinc-400">
            <h1>Curriculum Vitae</h1>
        </div>
        <div class="h-[20vh] relative">
            <div class="h-[200px] w-[200px] rounded-[50%]  absolute right-4 top-5" >
                <img src="<?php echo $_PROFILEIMGPATH ?>" alt="" class="h-[100%] w-[100%] rounded-[50%]">
            </div>
            <div>
                <h1 class="text-center text-4xl font-semibold pt-6 text-orange-600"><?php echo "$_FIRSTNAME" ?></h1>
            </div>

        </div>
        <div class="h-[70vh] flex gap-5">
            <aside class="w-1/3 px-5 border-r-2 h-[70vh] border-[#E6BAA3] my-auto">

                <label for="contact" class="after:h-[3px]  flex items-center after:left-[190px] after:w-[100px] after:rounded-lg after:bg-slate-400 relative after:absolute after:content text-orange-600 font-semibold text-xl ">Contact Information </label>
                <hr class="">

                <label for="email"> <?php echo "$_EMAIL" ?> </label> <br >
                <label for="phone"> <?php echo "$_PHONE" ?></label>
                <h5 for="phone" class="font-bold mt-6"> Address</h5>
                <label for="phone"> <?php echo "$_ADDRESS" ?></label>

                <!-- ############################################### -->
                <label for="contact" class="after:h-[3px]  flex items-center after:left-[190px] after:w-[100px] after:rounded-lg after:bg-slate-400 relative after:absolute after:content text-orange-600 font-semibold text-xl mt-5">Personal Details </label>
                <hr class="">

                <label class="font-semibold" for="email"> DOB : </label> <br>
                <label for="email"> <?php echo "$_DOB" ?> </label> <br>
                <label class="font-semibold" for="phone"> Maritial Status</label> <br>
                
                <label for="contact" class="after:h-[3px]  flex items-center after:left-[190px] after:w-[100px] after:rounded-lg after:bg-slate-400 relative after:absolute after:content text-orange-600 font-semibold text-xl mt-5">Skills and Abilities </label>
                <hr class="">

                <ul class="list-disc px-5">
                    <li>Ability to work under Pressure</li>
                    <li>Excellent team player</li>
                    <li>Good time Management Skills</li>
                    <li>Self Motivation </li>
                    <li>Adaptability</li>
                    <li>Friendly comunication Skills</li>
                </ul>

            </aside>
            <div class="flex flex-col">
                <h2 class="text-3xl font-bold"><Span class="text-orange-600 my-5">E</Span>ducation Qualification</h2>
                <hr class="border-black border-1">
                <p class="mt-4 mb-10">

                <?php
                
if ($_QUALIFICATION ==="HSLC") {

    echo"hslc";
} else if ($_QUALIFICATION === "HS") {
    echo "HS";
}
 else if ($_QUALIFICATION === "GRADUATION") {
    echo "Graduate in $_STREAM from $_BOARD - $_YEAR ";
}
?>
                    </p>
                    <h2 class="text-3xl font-bold"><Span class="text-orange-600 my-5">S</Span>kills </h2>
            <hr class="border-black border-1">
            <p class="mt-4 mb-10">
                <?php echo $_SKILLS ?>
            </p>
            </div>
        </div>
        
        

    </div>
    
    
</body>

</html>