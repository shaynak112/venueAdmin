

var firstNameJS = "<form name='updateFirstName' class='form-horizontal' enctype='multipart/form-data' method='post' action=''> <label class='control-label' for='firstName'>First Name: </label> <input class='form-control' id='firstName' type='text' name='firstName'/> <input class='btn btn-primary' type='submit' value='Adjust First Name' name='adjustFirstName' id='adjustFirstName' /></form>";

var lastNameJS = "<form name='updateLastName' class='form-horizontal' enctype='multipart/form-data' method='post' action=''> <label class='control-label' for='lastName'>Last Name: </label> <input class='form-control' id='lastName' type='text' name='lastName'/> <input class='btn btn-primary' type='submit' value='Adjust Last Name' name='adjustLastName' id='adjustLastName' /></form>";

var otherNameJS = "<form name='updateOtherName' class='form-horizontal' enctype='multipart/form-data' method='post' action=''> <label class='control-label' for='otherName'>Other Name: </label> <input class='form-control' id='otherName' type='text' name='otherName'/> <input class='btn btn-primary' type='submit' value='Adjust Other Name' name='adjustOtherName' id='adjustOtherName' /></form>";

/*var email1JS = "<form name='updateFirstName' class='form-horizontal' enctype='multipart/form-data' method='post' action=''> <label class='control-label' for='firstName'>First Name: </label> <input class='form-control' id='firstName' type='text' name='firstName'/> <input class='btn btn-primary' type='submit' value='Adjust First Name' name='adjustFirstName' id='adjustFirstName' /></form>";

var firstNameJS = "<form name='updateFirstName' class='form-horizontal' enctype='multipart/form-data' method='post' action=''> <label class='control-label' for='firstName'>First Name: </label> <input class='form-control' id='firstName' type='text' name='firstName'/> <input class='btn btn-primary' type='submit' value='Adjust First Name' name='adjustFirstName' id='adjustFirstName' /></form>";

var firstNameJS = "<form name='updateFirstName' class='form-horizontal' enctype='multipart/form-data' method='post' action=''> <label class='control-label' for='firstName'>First Name: </label> <input class='form-control' id='firstName' type='text' name='firstName'/> <input class='btn btn-primary' type='submit' value='Adjust First Name' name='adjustFirstName' id='adjustFirstName' /></form>";

var firstNameJS = "<form name='updateFirstName' class='form-horizontal' enctype='multipart/form-data' method='post' action=''> <label class='control-label' for='firstName'>First Name: </label> <input class='form-control' id='firstName' type='text' name='firstName'/> <input class='btn btn-primary' type='submit' value='Adjust First Name' name='adjustFirstName' id='adjustFirstName' /></form>";

var firstNameJS = "<form name='updateFirstName' class='form-horizontal' enctype='multipart/form-data' method='post' action=''> <label class='control-label' for='firstName'>First Name: </label> <input class='form-control' id='firstName' type='text' name='firstName'/> <input class='btn btn-primary' type='submit' value='Adjust First Name' name='adjustFirstName' id='adjustFirstName' /></form>";*/




window.onload = function(){
    var table_output = document.getElementById("table");
    var position = document.getElementById("position");
	
	if (location.search === "?firstName")
	{
		//submit form
		
	}
	else if (location.search === "?lastName")
	{		
		//submit form
		
	}
	else if (location.search === "?public") {		
		table_output.innerHTML = public_table;
		
	}
	else  if (location.search === "?management"){	
		table_output.innerHTML = management_table;
	}
    else {
        table_output.style.display = "none";
    }

}