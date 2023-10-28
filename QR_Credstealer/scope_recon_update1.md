<h1>Incident</h1>

<h3>
User recieved a Phishing email with Claiming to be from Microsoft.
The message claimed that your "MFA was going to expire today"
and provided a QR Code to  "Re-authenticate"
.</h3>

![~/QR_Credstealer/images/qrscam.png](image url "~/QR_Credstealer/images/qrscam.png")




<h5>Process</h5>

	Read the QR Code:

		Look for a a QR code reader that would read the encoded url to a string

		![~/Qr_Creadstealer/images/Decoderqr.PNG](image url "~/QR_Creadstealer/images/Decoderqr.PNG")

		Trying to navigeate to the url removing the users credential resulted in a blank screen
		Providing a fake email address fakeuser@company.com in place of the users email redirects
		to 'https://pub-0f1472200ea740469ffa4557843d4430.r2.dev/gene1.html#'.

                <h6>IMPORTANT NOTES:</h6>
			
			The threat actor seems to be keeping track of the public ip addresses
                	that a users is coming from. If you try to access the page a second time from the same public
                	ip address, the second attempt will direct you to a blank page".

			Attempting to access the IP address of the above URL returns an "error 1003 Direct IP Not Allowed"


		![~/QR_Credstealer/images/fakeWindowsLoginScreen.png](image url "~QR_Creadstealer/images/fakeWindowsLoginScreen.png")

		
		The page source for this page returns a single line html file that has a hiddent input field
		with a base64 encoded value of "ofaHR0cHM6Ly93ZWxsbGV4LmNvbS9nZW5lL2ZkNjNhNDgucGhw" that
		when decoded becomes 'https://welllex.com/gene/fd63a48.php' when decoded(Decdoing was done
		using Node's "atob command: atob("<base64string>"). The page also had a scritp tag that let to
		a php scritp
		
		![~/QR_Credstealer/images/landingpagehtml.png](image url '~/QR_Credstealer/landingpagehtml.png')

		![~/QR_Credstealer/images/base64url.png](image url "~/QR_Credstealer/images/base64url.png")

		Using wget on the script address returns a jav 
