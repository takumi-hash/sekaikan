<?php
    $now_hour = date("H");
    function greeting($hour) {
        $result = "";

        if (6 <= $hour && $hour < 12) {
            $result = "Good Morning";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "Hello";
        }
        else {
            $result = "Good Afternoon";
        }

        return $result;
    }
?>

 <!DOCTYPE html>
<html lang="ja">
  <head>
    <title>Erika Tokumoto self-introduction</title>
    <link rel="stylesheet" href="/members/erika/self-introduction.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>

<body>
 <Header  id="home" class="jumbotron jumbotron-extend mb-0">
    <div class="container text-center">
        <h1>Erika Tokumoto</h1>
        <div id="greeting">
        <p><b>{{greeting($now_hour)}}<br>
        Welcome to my site <b> </p>
        </div>
        <div class="scroll">
        <a href="#menu"><span></span></a>
        </div>
    </div>
  </header>
<div class= "jumbotron jumbotron-nav mb-0" id="menu">　　
 <section class="cr-container">			

	<input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>
	<label for="select-img-1" class="cr-label-img-1"> </label>

	<input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
	<label for="select-img-2" class="cr-label-img-2"> </label>

	<input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
	<label for="select-img-3" class="cr-label-img-3"> </label>

	<input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
	<label for="select-img-4" class="cr-label-img-4"> </label>


	<!-- panels -->
	<div class="cr-bgimg">
		<div>
			<span>Slice 1 - Image 1</span>
			<span>Slice 1 - Image 2</span>
			<span>Slice 1 - Image 3</span>
			<span>Slice 1 - Image 4</span>
		</div>
		<div>
			<span>Slice 2 - Image 1</span>
			<span>Slice 2 - Image 2</span>
			<span>Slice 2 - Image 3</span>
			<span>Slice 2 - Image 4</span>
		</div>
		<div>
			<span>Slice 3 - Image 1</span>
			<span>Slice 3 - Image 2</span>
			<span>Slice 3 - Image 3</span>
			<span>Slice 3 - Image 4</span>
		</div>
		<div>
			<span>Slice 4 - Image 1</span>
			<span>Slice 4 - Image 2</span>
			<span>Slice 4 - Image 3</span>
			<span>Slice 4 - Image 4</span>
		</div>
	</div>

	<div class="cr-titles">
		<h3>
			<span>Menu</span>
			<span>Click button</span>
		</h3>
		<h3>
			<span>Self-introduction</span>
			<span>Who is Erika Tokumoto</span>
		</h3>
		<h3>
			<span>Hobbie</span>
			<span>Let's enjoy together</span>
		</h3>
		<h3>
			<span>contact</span>
			<span>Please contact me</span>
		</h3>
	</div>

</section>   
</div>
<div  class="jumbotron jumbotron-basic mb-0">
    <div class="container text-center">
        <div class="row">
            <h2 class="col-md-12">Who is Erika Tokumoto</h2>
            <div class="col-md-6">
               <h3>Basic Information</h3>
                 <ul class="selfintro text-left list">
                       <li>Name：Erika Tokumoto</li>
                    　 <li>Age:22</li>
                    　 <li>Birthday：28th October</li>
                    　 <li>workplace：Rakuten company</li>
                    　 <li>hobby：watching movie,going to the museum、danceetc.</li>
                    </ul>
            </div>
            <div class="col-md-6">
                <h3>History</h3>
               <table class="text-left" >
                              <tr>
                              <th>1995</th>
                              <td>born in Yamaguchi prefecture <br> December went to Singapore</td>
                              </tr>
                              <tr>
                          　　<th>1999</th>
                          　　<td>back to Japan、Koonodai kindergarten in Tochigi</td>
                          　  </tr>
                          　  <tr>
                          　　<th>2002</th>
                          　　<td>enroll in Mooka elementary school</td>
                          　　</tr>
                          　　<tr>
                          　　<th>2004</th>
                          　　<td>the United Kingdom, japanese school in London</td>
                          　　</tr>
                          　　　<tr>
                          　　<th>2005</th>
                          　　<td>Germany, japanese school in Düsseldorf</td>
                          　　</tr>
                          　　<tr>
                          　　　<th>2007</th>
                          　　<td>Tokyo, Shimura 2nd elementary school</td>
                          　　</tr>
                          　　<tr>
                          　　　<th>2008</th>
                          　　<td>Rikkyo zyogakuin</td>
                          　　</tr>
                          　　<tr>
                          　　　<th>2014</th>
                          　　<td>Keio University</td>
                          　　</tr>
                          　　<tr>
                          　　　<th>2018</th>
                          　　<td>Rakuten</td>
                          　　</tr>
                        </table>
            </div>
        </div>
   </div> 
</div>
<div class="jumbotron jumbotron-hobby mb-0">
    <div class="container text-center">
        <div class="row">
            <h2 class="col-md-12">Let's Enjoy Together!</h2>
            <div class="col-md-4">
               <h3>Movie</h3>
                        <div class="list text-center">
                            <p>TheAtre</p>
                            <p>HOme</p>
                            <p>SmarTphONe</p>
                        <p class="mt-5">
                            If you use Filmarks, contact me!!!
                        </p>
                  </div>
            </div>
            <div class="col-md-4">
                <section >
               <h3>Art</h3>
                     <p class="list"> 
                      Museum at Ueno Or Mori building<br>
                     Especially, western art
                        </p>
                </section>
            </div>
    <div class="col-md-4">
                <h3 >Dance</h3>
                        <div class="list">
                            <p>Jazz</p>
                            <p>Vogue</p>
                    
                        <p class="mt-5">
                           I joined to dance club in University
                        </p>
                </div>
            </div>
        </div>
 </div> 
</div>

 
        <footer id="mail">
            <small>&copy; erika.tokumoto@rakuten.com </small>
         </footer>
            
        </div>


 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>


</html>
