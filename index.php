<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center">
  <form action="display.php" class=" form w-1/2 shadow-md min-h-[60vh] bg-slate-100 pt-[5vh] px-[5vh]" method="post">
    <h1 class="text-3xl py-7">Ganerate Your CV</h1>
    <div class="flex flex-row wrap-wrap">
      <!--############################################## 1st form box############################### -->
      <div class="frm-box flex gap-x-2  ">
        <!-- first row -->
        <div class="frm-grp   ">
          <div class="flex flex-col">

            <h2>Personal Details</h2>
            <hr>
            <label class="font-semibold" for="Name">Full Name</label>
            <input type="text" name="Name" id="name" placeholder="Full Name" class="py-[10px] px-[20px] shadow-sm w-[300px]">
            <span class="text-red-500"> <?php echo"$_nameErr" ?> </span>
          </div>
          <div class="flex flex-col">

            <label class="font-semibold" for="fName">Father Name</label>
            <input type="text" name="FName" id="fname" placeholder="Father Name" class="py-[10px] px-[20px] shadow-sm w-[300px] ">
          </div>

        </div>
        <!-- 2nd row -->
        <div class="frm-grp  ">
          <div class="flex flex-col">

            <h2 class="invisible">-</h2>
            <hr>
            <label class="font-semibold" for="Name">Date of Birth</label>
            <input type="date" name="dob" id="" class="py-[10px] px-[20px] shadow-sm w-[300px]">
          </div>
          <div class="flex flex-col">

            <label class="font-semibold" for="Maritial Status">Maritial Status</label>
            <div class="flex gap-x-2">

              <label  for="ms">Married</label>
              <input class="checked:border-indigo-500" type="radio" name="ms" id="" value="Married">
              <label for="ms">Unmarrid</label>
              <input class="checked:border-indigo-500" type="radio" name="ms" id="" value="Unmarrid">
            </div>
          </div>

        </div>
        <!-- Third row -->
        <div class="frm-grp  ">

          <div class="flex flex-col gap-x-2  ">
            <div class="h-[5rem] w-[5rem] rounded-[50%]  mx-auto ">
              <img src="" alt="" class="h-[100%] w-[100%] rounded-[50%]" id="displayimg">
            </div>
            <label for="Name" class="text-center">Passport Size photo</label>


            <input type="file" name="profile" id="profileImport" class=" file:text-violet-700 file:border-0 file:font-semibold py-[10px] px-[20px] shadow-sm w-[300px]">



          </div>
        </div>
      </div>
    </div>
    <!-- ############################################## 2nd form box############################### -->
    <div class="frm-box mt-7 flex gap-x-2  ">
      <!-- first row -->
      <div class="frm-grp   ">
        <div class="flex flex-col">

          <h2>Contact Information</h2>
          <hr>
          <label class="font-semibold" for="phone">Phone Number</label>
          <input type="text" name="mobile" id="phone" placeholder="Phone Number" class="py-[10px] px-[20px] shadow-sm w-[300px]">
        </div>
        <div class="flex flex-col">

          <label class="font-semibold" for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="ex; yourname@gmail.com" class="py-[10px] px-[20px] shadow-sm w-[300px] ">
        </div>

      </div>
      <!-- 2nd row -->
      <div class="frm-grp  ">
        <div class="flex flex-col">

          <h2 class="invisible">-</h2>
          <hr>
          <label class="font-semibold" for="Address">Address</label>

          <textarea name="address" id="address" cols="30" rows="4" class="py-[10px] px-[20px] shadow-sm w-[300px]"></textarea>
        </div>


      </div>


    </div>
    <hr class="my-5">
    <!-- ############################################## 3nd form box############################### -->
    <div class="frm-box wrap-wrap mt-7 flex gap-x-2 items-center  ">
      <!-- first row -->
      <div class="frm-grp  flex flex-row gap-x-2    ">
        <div class="flex items-center gap-x-2 ">
          <div class="flex flex-col">
            
            <h2 class="">Highest Qualification</h2>
            <hr>
            <label class="font-semibold" for="Stream">Qualification</label>
            <select name="Qualification" class=" Qualification py-[10px] px-[20px] shadow-sm w-[150px]" id="">
              <option value="">Select</option>
              <option value="HSLC">HSLC</option>
              <option value="HS">HS</option>
              <option value="GRADUATION">GRADUATION</option>
            </select>
          </div>
          <div class="flex flex-col">

            <h2 class="invisible">-</h2>
            <hr>
            <label class=" stream font-semibold" for="Stream">Stream</label>
            <input type="text" name="Stream" id="Stream" placeholder="Arts,Science,Commerce" class=" stream py-[10px] px-[20px] shadow-sm w-[200px]">
          </div>
          <div class="flex flex-col">
            <h2 class="invisible">-</h2>
            <label class="font-semibold" for="College">College Name</label>
            <input type="text" name="College" id="College" placeholder="ex; KBRD College" class="py-[10px] px-[20px] shadow-sm w-[250px] ">
          </div>

          <div class="flex flex-col">
            <h2 class="invisible">-</h2>
            <label class="font-semibold" for="Year">Year</label>
            <input type="text" name="Year" id="Year" placeholder="Year" class="py-[10px] px-[20px] shadow-sm w-[100px] ">
          </div>
          <div class="flex flex-col">
            <h2 class="invisible">-</h2>
            <label class="font-semibold" for="board">Board</label>
            <input type="text" name="board" id="board" placeholder="Name of the Board" class="py-[10px] px-[20px] shadow-sm w-[150px] ">
          </div>
          <div class="flex flex-col items-center py-[10px] px-[20px] bg-slate-400 cursor-pointer text-white">+</div>
        </div>
      </div>
      <!-- 2nd row -->



    </div>
    <hr class="my-5">
    <!-- ############################################## 3nd form box############################### -->
    <div class="frm-box mt-7 flex gap-x-2  ">
      <!-- first row -->
      <div class="frm-grp  flex flex-row gap-x-2   ">
        <div class="flex flex-col">

          <h2 class="invisible">-</h2>
          <!-- <hr> -->
          <label class="font-semibold" for="skills"> Skills</label>
          <input type="text" name="skills" id="skills" placeholder="your Skills" class="py-[10px] px-[20px] shadow-sm w-[200px]">
        </div>
        <div class="flex flex-col">
          <h2 class="invisible">-</h2>
          <label class="font-semibold" for="otherskills">Other Skills</label>
          <input type="text" name="otherskills" id="otherskills" placeholder="enter your other skills" class="py-[10px] px-[20px] shadow-sm w-[300px] ">
        </div>
        <div class="flex flex-col">
          <h2 class="invisible">-</h2>
          <label class="font-semibold" for="language">Language known</label>
          <input type="text" name="language" id="language" placeholder="Language known" class="py-[10px] px-[20px] shadow-sm w-[300px] ">
        </div>


      </div>
      <!-- 2nd row -->



    </div>
    <hr class="my-5">
    <!-- ############# -->
    <input type="submit" value="Ganerate Resume" class="px-[20px] py-[10px] shadow-md bg-orange-500 text-white my-5">
  </form>
</body>


<script>
  let form=document.querySelector(".form")
  let qualification=document.querySelector(".qualification")
  let streams=document.querySelectorAll(".stream")
  // .....................
  let inputprofileimg=document.querySelector("#profileImport")
  let displayimg=document.querySelector("#displayimg")

  form.addEventListener("change",(e)=>{
   let options= e.target.value
   switch (options) {
    case "HSLC":
     streams.forEach((e)=>{
      e.classList.add("hidden")
     })
      console.log("select HSLC");
  
      break;
   
    default:
    streams.forEach((e)=>{
      e.classList.remove("hidden")
     })
      break;
   }

  })

inputprofileimg.addEventListener('change',()=>{
  ProfileDisplay()
})

  function ProfileDisplay(input) {
    const file=inputprofileimg.files[0];

    if (file) {
      const reader =new FileReader();
      reader.onload=function(e){
        displayimg.src=e.target.result;
      }
       reader.readAsDataURL(file);
    }
    
  }



</script>




</html>