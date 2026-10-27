function popContact()
{
	var popContact = window.open('contact.php','popContact','width=450,height=390,left='+ (screen.width/2 - 450/2) +',top='+ ((screen.height/2 - 370/2)-100) +'');
	popContact.focus();
}

function popGuestbook()
{
	var popGuestbook = window.open('_guestbook/gbook.php','popGuestbook','width=450,height=600,left='+ (screen.width/2 - 450/2) +',top='+ ((screen.height/2 - 600/2)-100) +',scrollbars=yes');
	popGuestbook.focus();
}

function popMusic(_url)
{
	var popMusic = window.open(_url,'popMusic','width=340,height=250,left='+ (screen.width/2 - 340/2) +',top='+ ((screen.height/2 - 250/2)-100) +'');
	popMusic.focus();
}

function popGallery(_url)
{
	var popGallery = window.open(_url,'popGallery','width=600,height=560,left='+ (screen.width/2 - 600/2) +',top='+ ((screen.height/2 - 560/2)-100) +'');
	popGallery.focus();
}