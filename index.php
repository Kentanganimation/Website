<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
	<title>Porto</title>
</head>
<link rel="stylesheet" style="text/css" href="Style.css">
<body>
	 <script>
        window.addEventListener('wheel', function (event) {
            if (event.ctrlKey) {
                event.preventDefault();
            }
        }, { passive: false });
        window.addEventListener('keydown', function (event) {
            if ((event.ctrlKey || event.metaKey) && (event.key === '+' || event.key === '-' || event.key === '=')) {
                event.preventDefault();
            }
        });
        let lastTouchEnd = 0;
        document.addEventListener('touchend', function (event) {
            const now = new Date().getTime();
            if (now - lastTouchEnd <= 300) {
                event.preventDefault();
            }
            lastTouchEnd = now;
        }, { passive: false });
    </script>
	<table name=profiletable align="center">
		<tr>
			<td colspan="3" align="center"><img name="profile" src="profile.jpg" width="100px"></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><h1>Lucifer</h1></td>
		<tr>
			<td colspan="3" align="center"><P><u>Social Media Profile</u></p></td>
		</tr>
		<tr ><td align=center><button name="Tombol" onclick="window.location.href='https://www.instagram.com/lucivver_';"><img width="50px" src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg"><br><font>Lucivver</font></button></td>

		<td align=center><button name="Tombol" onclick="window.location.href='https://www.Facebook.com/Hikaren69';"><img width="50px" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"><br><font>Hitori Kakuren</font></button></td>

		<td align=center><button name="Tombol" onclick="window.location.href='https://x.com/Lucky4lucifer';"><img width="50px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/X_logo_2023.svg/1024px-X_logo_2023.svg.png"><br><font >Lucky4lucifer</font></button></td></tr>
		<tr><td colspan="3" align="center"><P><u>Contact</u></p></td>
		<tr>
			<td align=center colspan="3"><button name="Tombol" onclick="window.location.href='https://api.whatsapp.com/send/?phone=6285179769545&text&type=phone_number&app_absent=0';"><img width="50px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/WhatsApp_logo-color-vertical.svg/1024px-WhatsApp_logo-color-vertical.svg.png"><br><font >WhatsApp</font></button></td></tr>
		<tr><td colspan="3"><hr></td></tr>
	</table>
	<table border="1" align="center" style="background-image:linear-gradient(to bottom,rgba(255, 255, 255, 0),white); padding-top: 1400%; padding: 133px; margin-left: -35px; margin-bottom: -11px;" width="900px">
		<tr align="center">
			<td><img name="preview" src="https://scontent.fbth6-1.fna.fbcdn.net/v/t39.30808-6/471822111_596272136149997_7808661658404777895_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=f727a1&_nc_ohc=iDFuC3MdwokQ7kNvgEIa20A&_nc_zt=23&_nc_ht=scontent.fbth6-1.fna&_nc_gid=AH6W8NLWPaRi3Hko3uixgLy&oh=00_AYBwoE21ViPqSFoLja9lsyEjm8UveZZMq8LgV80M78dbpQ&oe=677A0BE5"></td>
			<td><img name="preview" src="https://scontent.fbth6-1.fna.fbcdn.net/v/t39.30808-6/472129715_597042176072993_7246232661390529166_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=f727a1&_nc_ohc=1pbaRl4JKbkQ7kNvgErDyYx&_nc_zt=23&_nc_ht=scontent.fbth6-1.fna&_nc_gid=AWdsHUeSZ4YkNc8XuH29sQ3&oh=00_AYBFT14XwO_KYrPeVX7Y2paNmxMUDIjbF0JDUxfMhYJpYw&oe=6779FEEA">
			<td><img name="preview" src="https://scontent.fbth6-1.fna.fbcdn.net/v/t39.30808-6/469310365_580117987765412_3059894982937090642_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=f727a1&_nc_ohc=L59qU0UvxDgQ7kNvgHoMuGd&_nc_zt=23&_nc_ht=scontent.fbth6-1.fna&_nc_gid=ANrzDybRPAIa8UcL2ouyZt4&oh=00_AYD_4pCAdLc7j0blLqwFdbE0pvIDW7BDyaXsEbkGdHOb3Q&oe=677A12CA"></td></table>
			<table align="center" bgcolor="white" style="margin-left: -5px; width: 100%; padding-left: 100px; padding-right: 100px; margin-bottom: -10px;">
		<tr align="center">
			<td colspan="3"><video muted autoplay loop><source src="video.mp4" type="video/mp4"></td>
		</video></td></tr>
		<tr>
			<td colspan="2"><h1 style="color:black;"> This Is My Favorite Work XD</td>
			<td><h1 style="color:black; text-align: right;">This is a Concept website</td>
	</table>
</body>
</html>