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

		![~/Qr_Creadstealer/images/Decoderqr.PNG](~/QR_Creadstealer/images/Decoderqr.PNG)

		The clients email was provided as '\<companyNameingconvention\>@\<companyName\>.com'
		Trying to navigeate to the url removing the users credential resulted in a blank screen
		Providing a fake email address in place of the users takes you to a page made to look
		like a standard windos login.
		[~/QR_Creadstealer/images/betterLandingPage.PNG]('~/QR_Creadstealer/images/betterLandingPage.PNG')
		
