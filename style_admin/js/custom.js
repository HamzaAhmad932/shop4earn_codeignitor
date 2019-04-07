function myFunction() {
        account_type= document.getElementById("account_type_id").value;
        // console.log(account_type);
		account_type_id = document.getElementById("account_type_id");
		cash_id = document.getElementById("cash_id");
		bank_id = document.getElementById("bank_id");
		amount_id = document.getElementById("amount");

		if(account_type==""){			
			account_type_id.style = "display:visible";
			cash_id.style = "display:none";
			bank_id.style = "display:none";
			amount_id.style = "display:none";
		}
		else if(account_type=="1"){			
			account_type_id.style = "display:visible";
			cash_id.style = "display:visible";
			bank_id.style = "display:none";
			amount_id.style = "display:visible";
		}
		else if(account_type=="2"){			
			account_type_id.style = "display:visible";
			cash_id.style = "display:visible";
			bank_id.style = "display:none";
			amount_id.style = "display:visible";
		}
		else if(account_type=="3"){			
			account_type_id.style = "display:visible";
			cash_id.style = "display:visible";
			bank_id.style = "display:none";
			amount_id.style = "display:visible";
		}
		else if(account_type=="5"){			
			account_type_id.style = "display:visible";
			cash_id.style = "display:visible";
			bank_id.style = "display:none";
			amount_id.style = "display:visible";
		}
		else if(account_type=="4"){			
			account_type_id.style = "display:visible";
			cash_id.style = "display:none";
			bank_id.style = "display:visible";
			amount_id.style = "display:visible";
		}
	}