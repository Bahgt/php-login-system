const validation = new JustValidate('#form');

validation 
 .addField("#name" , [
 {

rule: "required"

 }

              ])

 .addField('#email' , [

{

	rule: "required"
}
,
{

	rule:"email"
}
,
{
	validator: (value) => () => {

		return fetch("validate-email.php?email="+encodeURIComponent(value))
		.then(function(response){
			return response.json();
		})
		.then(function(json) {

			return json.available;
		});
	}, errorMessage: 'email already taken'
}

 	])
 	
 	 .addField('#password',[
 	     {
 	         
 	         rule:"required"
 	         
 	     }
 	     ,
 	     {
 	         
 	         rule:"password"
 	         
 	     }
 	     
 	     ])
 	 .addField('#confirm_password', [

{

	validator: (value,fields) => {

		return value === fields["#password"].elem.value ;
	}, errorMessage: "Password should match"
}

 	 	])
 	 .onSuccess((event) => {

 	 	document.getElementById("form").submit();
 	 });

