<!DOCTYPE html>
<html>
<head>
	<title>APJ</title>
	<script type="text/javascript" src="https://gitcdn.link/repo/freeCodeCamp/testable-projects-fcc/master/build/bundle.js"></script>
	<style type="text/css">
	</style>
</head>
<body>
    <h1 id="title">A Survey Form</h1>
    <p id="description">Survey</p>
    <form id="survey-form">
    	<label for="name" id="name-label">
    	Name: <input type="text" name="name" id="name" required="" placeholder="Name">
    	</label>
    	<label for="email" id="email-label">
    	Email: <input type="email" name="email" id="email" required placeholder="Email">
    	</label>
    	<label for="number" id="number-label">
    	Number:<input type="number" name="age" id="number" min="1" max="99999" placeholder="Number">
    	</label>
    	<select id="dropdown">
    		<option>Option1</option>
    		<option>Option2</option>
    		<option>Option3</option>
      	</select>

          <label>Definitely<input name="radio-buttons" value="1"  type="radio"  ></label>
          <label>Maybe<input name="radio-buttons" value="2"  type="radio"  ></label>
          <label>Not sure<input name="radio-buttons" value="3"  type="radio"  ></label>
      
      

      	<li><input type="checkbox" name="check" value="1"></li>
      	<li><input type="checkbox" name="check" value="2"></li>
      	<li><input type="checkbox" name="check" value="3"></li>

      	<textarea></textarea>

      	<button id="submit">Submit</button>
    </form>
  </body>
</html>