$('.Ind').click(function(){          
        $('.Eng').show();               
        $('.Eng').addClass('Eng2');          
        $('#hidTranslate').val("0");                
      });

$('.Eng').click(function(){                        
        if ( $('#hidTranslate').val() == "1"){        
            $('.Ind').remove();     
            $('.Ind').removeClass('Ind');            
            // $('.selLang').append('<li id = "Eng2" style = "display: list-item;"><a href="#">ID</a></li> ');

            // $('#Eng2').click(function(){  
            //     alert("tesst horeee");                
            // });                     
        }else{     
            $('.Eng').removeClass('Eng2');
            $('.Eng').addClass('engblue'); 
            $('.Eng').removeClass('Eng');
            $('.Ind').hide();
            translateToEng();         
            $('#hidTranslate').val("1"); 
        }
      });

// $('.Eng3').click(function(){           
//     // $('.selLang').append('<li class = "Ind"><a href="#">Ind</a></li> ');  
//     alert("tes2");
// });
       
function translateToEng(){
    // Translate Navbar
        $('#hm').html("Home")
        $('#svc').html("Our Services") 
        $('#happly').html("How To Apply")
        $('#cntUS').html("Contact Us")
        $('#abtUS').html("About Us")

        // Translate SubJudul ke 1
        $('#sTitle').html("Your Financial Problem Solution")
        $('#psTitle').html("We can help your financial problem by offering the Quick Loans with low interest. We offer loans from Rp. 500.000 - Rp. 60.000.000. Once it Approved your loan send to your Bank Account directly.")

        // Translate SubJudul Our Services
        $('#sHOS').html("Our Services")
        $('#pOSH2').html("We give you easy access to Loan with low interest !")

        $('#sHSecure').html("High Security")
        $('#pHSecure').html("By Using High Security Technology Encryption. We will surely to protect your privacy and would never disclose any personal information to anyone.")

        $('#sH24CS').html("24 Hour Customer Service")
        $('#pH24CS').html("We are here to provide 7*24 hour high-quality customer service. If you had any questions or obstacles, do not hesitate to contact us.")

        $('#sHFE').html("Fast & Easy")        
        $('#pHFE').html("Fast & easy to Approve. You can get up to 60,000,000 Rp in hour.")

        $('#sHLowIn').html("Low Interest")
        $('#pHLowIn').html("We offer a low interest personal loan starting 0.05% p.a. The loan term varies from 3-5 years and the repayments can be made weekly, fortnightly or monthly")

        $('#sHHapp').html("How to Apply")
        $('#pSHapp').html("Simple Step to Apply")

        $('#pHFReg').html("Fill registration")
        $('#pHWav').html("Wait for Verification")
        $('#pHGL').html("Get your money")

        // $('#pBtnApply').html("Daftar Sekarang")        

        // Translate SubJudul Contact US
        $('#HConUS').html("Contact us")        
        $('#lblUsrNm').html("Username")
        $('#txtUsrName').attr("placeholder", "Type your Username...")
        $('#lblEmail').html("Email")
        $('#txtsEmail').attr("placeholder", "Type your Email Address...")
        $('#lblPhone').html("Phone")
        $('#txtsTelp').attr("placeholder", "Type your phone number...")
        $('#lblMessage').html("Message")
        $('#txtsmsg').attr("placeholder", "Type your message...") 
        $('#btn_post_Verify').html("Submit")   
        $('#btnReset').html("Reset")

        // Translate SubJudul About US
        $('#HAbout').html("About Us")
        $('#pHAbout').html("Global Multicash is Information technology platform which managed by Sembilan Bola Dunia that has priority to protect their consumer's security from High Risk")
}