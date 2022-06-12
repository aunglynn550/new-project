
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css">
    </head>
<body>

@if( Auth::check())
   <h2>You are login</h2>
@endif
        <form action="{{ route('csstest') }}" method="post">

        @csrf

        
        <div class="container">
            <div class="user-info">

                    <h4>User information</h4>


                    <input id="name" type="text" class=" bx-sh-inset" name="citizenId" placeholder="ID : 12/sakana(naing)" >
                    <input id="name" type="text" class=" bx-sh-inset" name="title"  placeholder="Enter Your Name" >
                    <input id="password" type="text" class="bx-sh-inset" name="password"  placeholder="Password">
                    <input id="password" type="text" class="bx-sh-inset"  placeholder="Confirm Password">    
                    
                   

                        <div class="confirm-box">
                                <div class="confirm-age">
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <span>Yes, I'm over 18</span> 
                                </div>
                                
                                <div class="confirm-age">
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <span>•Yes, I have read and accept the Privacy Policy and Terms of Use</span> <br>
                                </div>

                        </div>

            
            </div>
                    


        </div>




        <div class="container">
            <div class="user-info">

                    <h4>Contact information</h4>

                    <input id="name" type="text" class=" bx-sh-inset" name="password" placeholder="Enter Email Address" ></br>
                    <input id="password" type="text" class="bx-sh-inset" name="password"  placeholder="Confirm Email Address"></br>
                    <input id="password" type="text" class="bx-sh-inset"  placeholder="Primary Phone Number"></br>
                    <input id="password" type="text" class="bx-sh-inset"  placeholder="Alternative Phone Number"></br>

                    <div class="confirm-age">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                     <span>Yes, I'm over 18</span> <br>
                    </div>
                    
                    
                    <div class="confirm-age">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                     <span>•Yes, I have read and accept the Privacy Policy and Terms of Use</span> <br>
                    </div>


            </div>

        </div>



        <div class="container">
            <div class="user-info">

                    <h4>Address information</h4>

                    <input id="name" type="text" class=" bx-sh-inset" name="password" placeholder="Enter Your City" ></br>
                    <input id="password" type="text" class="bx-sh-inset" name="password"  placeholder="Password"></br>
                    <input id="password" type="text" class="bx-sh-inset"  placeholder="Confirm Password"></br>

                    <div class="confirm-age">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                     <span>Yes, I'm over 18</span> <br>
                    </div>
                    
                    
                    <div class="confirm-age">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                     <span>•Yes, I have read and accept the Privacy Policy and Terms of Use</span> <br>
                    </div>


            </div>

        </div>


        <div class="container">
            <div class="user-info">

                    <h4>Security Question</h4>



                    <!-- ------------------------ -->
                    <label for="cars">Choose a Question 1:</label>

                        <select name="query1" id="cars">
                        <option value="1">who is your mom</option>
                        <option value="2">What is your nick name</option>
                        <option value="3">what the fuck you doing</option>

                        </select>

                        <input id="name" type="text" class=" bx-sh-inset" name="answer1" placeholder="Answer 1" ></br>
                  
               
                    
                  <!-- ----------------------------------- -->


                    <!-- ------------------------ -->

                    <label for="cars">Choose a Question 2:</label>

                        <select name="query2" id="cars">
                        <option value="1">who is your mom</option>
                        <option value="2">What is your nick name</option>
                        <option value="3">what the fuck you doing</option>
                        
                        </select>
                    
                        <input id="name" type="text" class=" bx-sh-inset" name="answer2" placeholder="Answer 2" ></br>
               
                    
                  <!-- ----------------------------------- -->

                    <!-- ------------------------ -->

                    <label for="cars">Choose a Question 3:</label>

                        <select name="query3" id="cars">
                        <option value="1">who is your mom</option>
                        <option value="2">What is your nick name</option>
                        <option value="3">what the fuck you doing</option>
                        
                        </select>
                    
                        <input id="name" type="text" class=" bx-sh-inset" name="answer3" placeholder="Answer 3" ></br>
               
                    
                  <!-- ----------------------------------- -->


            </div>

        </div>
        <input type="submit" value="Create" >



        </form>

</body>
</html>





